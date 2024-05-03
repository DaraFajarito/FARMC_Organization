<?php

namespace App\Http\Controllers;

use App\Models\FC_GenInfo_Model;
use App\Models\FC_ListofMem_Model;
use Illuminate\Http\Request;

class FC_ListofMem_Controller extends Controller
{
    public function display_fc_listofMem()
    {
        // $list = FO_ListofMem_Model::where('id', $id)->get();
        $listofMem = FC_GenInfo_Model::latest()->first();

        return view('Fisherfolk_Organization.Cooperative_Form.form2_ListofMem', compact('listofMem'));
    }

    public function add_listofMem(Request $request)
    {
        $fisherfolkOrg_FC = FC_GenInfo_Model::latest()->first();

        $validatedData = $request->validate([
            'listmem_name.*' => 'nullable',
            'listmem_type.*' => 'nullable',
            'listmem_cs.*' => 'nullable',
            'listmem_gen.*' => 'nullable',
            'listmem_birth.*' => 'nullable|date_format:Y-m-d',
            'listmem_age.*' => 'nullable',
        ]);

        // Get the number of rows to process
        $rowCount = count($request->listmem_name);
        $rowCount = count($request->listmem_type);
        $rowCount = count($request->listmem_cs);
        $rowCount = count($request->listmem_gen);
        $rowCount = count($request->listmem_birth);
        $rowCount = count($request->listmem_age);

        // Loop through the rows to save each member
        for ($i = 0; $i < $rowCount; $i++) {
            $listofMem = new FC_ListofMem_Model();
            $listofMem->fisherfolkOrg_FC_id = $fisherfolkOrg_FC->id ?? null;
            $listofMem->listmem_name = $validatedData['listmem_name'][$i] ?? null;
            $listofMem->listmem_type = $validatedData['listmem_type'][$i] ?? null;
            $listofMem->listmem_cs = $validatedData['listmem_cs'][$i] ?? null;
            $listofMem->listmem_gen = $validatedData['listmem_gen'][$i] ?? null;
            $listofMem->listmem_birth = $validatedData['listmem_birth'][$i] ?? null;
            $listofMem->listmem_age = $validatedData['listmem_age'][$i] ?? null;

            $listofMem->save();
        }

        if ($listofMem) {
            return redirect('/FOform2_ListofMem/' . $listofMem->fisherfolkOrg_id)->with('success', 'Success!');
        } else {
            return redirect()->back()->with('failed', 'error');
        }

        // return redirect('/FOform2_ListofMem')->with('success', 'Success!');
    }
}
