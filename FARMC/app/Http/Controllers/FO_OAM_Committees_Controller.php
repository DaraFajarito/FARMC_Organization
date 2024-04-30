<?php

namespace App\Http\Controllers;

use App\Models\FisherfolkOrganization_Model;
use App\Models\FO_OAM_Committees_Model;
use Illuminate\Http\Request;

class FO_OAM_Committees_Controller extends Controller
{
    public function display_committees($id)
    {
        $committees = FisherfolkOrganization_Model::where('id', $id)->get();

        return view('Fisherfolk_Organization.Association_Form.form1_OAM_Committees', compact('committees'));
    }

    public function add_comm(Request $request)
    {
        $fisherfolkOrg = FisherfolkOrganization_Model::latest()->first();

        $validatedData = $request->validate([

            'category' => 'nullable',
            'other_cat' => 'nullable',
            'name' => 'nullable',
            'civil_status' => 'nullable',
            'birthday' => 'nullable|date_format:Y-m-d',
            'gender' => 'nullable',
            'age' => 'nullable',
            'fourps' => 'nullable',

            'name1' => 'nullable',
            'civil_status1' => 'nullable',
            'birthday1' => 'nullable|date_format:Y-m-d',
            'gender1' => 'nullable',
            'age1' => 'nullable',
            'fourps1' => 'nullable',

            'name2' => 'nullable',
            'civil_status2' => 'nullable',
            'birthday2' => 'nullable|date_format:Y-m-d',
            'gender2' => 'nullable',
            'age2' => 'nullable',
            'fourps2' => 'nullable',
        ]);


        $commit = new FO_OAM_Committees_Model();
        $commit->fisherfolkOrg_id = $fisherfolkOrg->id ?? null;
        $commit->category = $validatedData['category'] ?? null;
        $commit->other_cat = $validatedData['other_cat'] ?? null;
        $commit->name = $validatedData['name'] ?? null;
        $commit->civil_status = $validatedData['civil_status'] ?? null;
        $commit->gender =  $validatedData['gender'] ?? null;
        $commit->birthday = isset($validatedData['birthday']) ? date('Y-m-d', strtotime($validatedData['birthday'])) : null;
        $commit->age = $validatedData['age'] ?? null;
        $commit->fourps = $validatedData['fourps'] ?? null;

        $commit->name1 = $validatedData['name1'] ?? null;
        $commit->civil_status1 = $validatedData['civil_status1'] ?? null;
        $commit->gender1 =  $validatedData['gender1'] ?? null;
        $commit->birthday1 = isset($validatedData['birthday1']) ? date('Y-m-d', strtotime($validatedData['birthday1'])) : null;
        $commit->age1 = $validatedData['age1'] ?? null;
        $commit->fourps1 = $validatedData['fourps1'] ?? null;

        $commit->name2 = $validatedData['name2'] ?? null;
        $commit->civil_status2 = $validatedData['civil_status2'] ?? null;
        $commit->gender2 =  $validatedData['gender2'] ?? null;
        $commit->birthday2 = isset($validatedData['birthday2']) ? date('Y-m-d', strtotime($validatedData['birthday2'])) : null;
        $commit->age2 = $validatedData['age2'] ?? null;
        $commit->fourps2 = $validatedData['fourps2'] ?? null;

        $commit->save();

        if ($commit) {
            return redirect()->back()->with('success', 'Success!');
        } else {
            return redirect()->back()->with('failed', 'error');
        }
    }

}
