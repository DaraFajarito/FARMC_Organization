<?php

namespace App\Http\Controllers;

use App\Models\Committee_Model;
use App\Models\FisherfolkRepresentative_Model;
use App\Models\ProfileForm_Model;
use Illuminate\Http\Request;

class Committee_Controller extends Controller
{
    public function display_committee_form()
    {
        $profile = ProfileForm_Model::latest()->first();
        return view('LVL1_Profile_Form.MFARMC_Committee.committee', compact('profile'));
    }

    public function createCommittee(Request $request)
    {
        $profile = ProfileForm_Model::latest()->first();

        $validatedData = $request->validate([
            'category' => 'NULLABLE', // Add any other validation rules you need
            'other' => 'NULLABLE', // Add any other validation rules you need
            'chairperson_name' => 'NULLABLE',
            'chairperson_org' => 'NULLABLE',
            'sec_name' => 'NULLABLE',
            'sec_org' => 'NULLABLE',
            'member_name' => 'NULLABLE',
            'member_org' => 'NULLABLE'
        ]);

        // Create a new committee instance
        $committee = new Committee_Model();
        $committee->category = $validatedData['category'] ?? null;
        $committee->other = $validatedData['other'] ?? null;
        $committee->profileForm_id = $profile->id ?? null;
        $committee->chairperson_name = $validatedData['chairperson_name'] ?? null;
        $committee->chairperson_org = $validatedData['chairperson_org'] ?? null;
        $committee->sec_name = $validatedData['sec_name'] ?? null;
        $committee->sec_org = $validatedData['sec_org'] ?? null;
        $committee->member_name = $validatedData['member_name'] ?? null;
        $committee->member_org = $validatedData['member_org'] ?? null;
        $committee->save();

        return view('LVL1_Profile_Form.MFARMC_Committee.committee')->with(compact('profile'))->with('success', 'Success!');
    }
}
