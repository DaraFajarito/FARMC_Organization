<?php

namespace App\Http\Controllers;

use App\Models\FisherfolkOrganization_Model;
use Illuminate\Http\Request;
use App\Models\FO_ListofMem_Model;

class FO_ListofMem_Controller extends Controller
{
    public function display_listofMem()
    {
        // $list = FO_ListofMem_Model::where('id', $id)->get();
        $fisherfolkOrg = FisherfolkOrganization_Model::latest()->first();

        return view('Fisherfolk_Organization.Association_Form.form1_ListofMem', compact('fisherfolkOrg' ));
    }

    public function add_listofMem(Request $request)
    {
        $fisherfolkOrg = FisherfolkOrganization_Model::latest()->first();

        $validatedData = $request->validate([
            'mem_name.*' => 'nullable',
            'mem_cs.*' => 'nullable',
            'mem_gen.*' => 'nullable',
            'mem_birth.*' => 'nullable|date_format:Y-m-d',
            'mem_age.*' => 'nullable',
            'mem_fourps.*' => 'nullable',
        ]);

        // Get the number of rows to process
        $rowCount = count($request->mem_name);
        $rowCount = count($request->mem_cs);
        $rowCount = count($request->mem_gen);
        $rowCount = count($request->mem_age);
        $rowCount = count($request->mem_fourps);

        // Loop through the rows to save each member
        for ($i = 0; $i < $rowCount; $i++) {
            $listofMem = new FO_ListofMem_Model();
            $listofMem->fisherfolkOrg_id = $fisherfolkOrg->id ?? null;
            $listofMem->mem_name = $validatedData['mem_name'][$i] ?? null;
            $listofMem->mem_cs = $validatedData['mem_cs'][$i] ?? null;
            $listofMem->mem_gen = $validatedData['mem_gen'][$i] ?? null;

            $listofMem->mem_age = $validatedData['mem_age'][$i] ?? null;
            $listofMem->mem_fourps = $validatedData['mem_fourps'][$i] ?? null;

            $listofMem->save();
        }

        if ($listofMem) {
            return redirect('/FOform1_Capcon/' . $listofMem->fisherfolkOrg_id)->with('success', 'Success!');
        } else {
            return redirect()->back()->with('failed', 'error');
        }
    }
}
