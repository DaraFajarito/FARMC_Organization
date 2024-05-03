<?php

namespace App\Http\Controllers;

use App\Models\FC_GenInfo_Model;
use App\Models\FC_Officers_Commit_Model;
use Illuminate\Http\Request;

class FC_Officers_Commit_Controller extends Controller
{
    public function display_foOfficers1($id) {

        $officers_commit = FC_GenInfo_Model::where('id', $id)->get();


        return view('Fisherfolk_Organization.Cooperative_Form.form2_Officers_1' , compact('officers_commit'));
    }

    public function add_foOfficers1(Request $request)
    {
        $fisherfolkOrg_FC = FC_GenInfo_Model::latest()->first();

        $validatedData = $request->validate([

            'category' => 'nullable',
            'other_cat' => 'nullable',
            'chairman_name' => 'nullable',
            'chair_cs' => 'nullable',
            'chair_gen' => 'nullable',
            'chair_birth' => 'nullable|date_format:Y-m-d',
            'chair_age' => 'nullable',

            'sec_name' => 'nullable',
            'sec_cs' => 'nullable',
            'sec_gen' => 'nullable',
            'sec_birth' => 'nullable|date_format:Y-m-d',
            'sec_age' => 'nullable',

            'mem_name' => 'nullable',
            'mem_cs' => 'nullable',
            'mem_gen' => 'nullable',
            'mem_birth' => 'nullable|date_format:Y-m-d',
            'mem_age' => 'nullable',
        ]);


        $off1 = new FC_Officers_Commit_Model();
        $off1->fisherfolkOrg_FC_id = $fisherfolkOrg_FC->id ?? null;
        $off1->category = $validatedData['category'] ?? null;
        $off1->other_cat = $validatedData['other_cat'] ?? null;

        $off1->chairman_name = $validatedData['chairman_name'] ?? null;
        $off1->chair_cs = $validatedData['chair_cs'] ?? null;
        $off1->chair_gen =  $validatedData['chair_gen'] ?? null;
        $off1->chair_birth = isset($validatedData['chair_birth']) ? date('Y-m-d', strtotime($validatedData['chair_birth'])) : null;
        $off1->chair_age = $validatedData['chair_age'] ?? null;

        $off1->sec_name = $validatedData['sec_name'] ?? null;
        $off1->sec_cs = $validatedData['sec_cs'] ?? null;
        $off1->sec_gen =  $validatedData['sec_gen'] ?? null;
        $off1->sec_birth = isset($validatedData['sec_birth']) ? date('Y-m-d', strtotime($validatedData['sec_birth'])) : null;
        $off1->sec_age = $validatedData['sec_age'] ?? null;

        $off1->mem_name = $validatedData['mem_name'] ?? null;
        $off1->mem_cs = $validatedData['mem_cs'] ?? null;
        $off1->mem_gen =  $validatedData['mem_gen'] ?? null;
        $off1->mem_birth = isset($validatedData['mem_birth']) ? date('Y-m-d', strtotime($validatedData['mem_birth'])) : null;
        $off1->mem_age = $validatedData['mem_age'] ?? null;

        $off1->save();

        if ($off1) {
            return redirect()->back()->with('success', 'Success!');
        } else {
            return redirect()->back()->with('failed', 'error');
        }
    }
}
