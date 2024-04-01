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
        $committee->profileForm_id = $profile->id ?? null;
        $committee->chairperson_name = $validatedData['chairperson_name'] ?? null;
        $committee->chairperson_org = $validatedData['chairperson_org'] ?? null;
        $committee->sec_name = $validatedData['sec_name'] ?? null;
        $committee->sec_org = $validatedData['sec_org'] ?? null;
        $committee->member_name = $validatedData['member_name'] ?? null;
        $committee->member_org = $validatedData['member_org'] ?? null;
        $committee->save();

        $fisherfolk = FisherfolkRepresentative_Model::where('id', $committee->profileForm_id)->get();
        $committeeNull = $committee->isNull();
        $fisherfolkNull = false; // Initialize as false

        // Check if any relevant field is null for any fisherfolk representative
        foreach ($fisherfolk as $representative) {
            if (
                is_null($representative->category) ||
                is_null($representative->name) ||
                is_null($representative->endorsement_fisherfolk) ||
                is_null($representative->endorsement_attachment) ||
                is_null($representative->atleast_one_year) ||
                is_null($representative->aoy_attachment) ||
                is_null($representative->source_of_income) ||
                is_null($representative->soi_attachment) ||
                is_null($representative->good_moral) ||
                is_null($representative->gmc_attachment) ||
                is_null($representative->org_name) ||
                is_null($representative->date_of_reg) ||
                is_null($representative->date_of_accreditation) ||
                is_null($representative->dor_file) ||
                is_null($representative->doa_file)
            ) {
                $fisherfolkNull = true;
                break; // No need to continue checking if one representative is null
            }
        }

        $profileForm = $profile->hasNullValues();
        // Update status based on null values
        $status = $committeeNull || $fisherfolkNull || $profileForm ? 'INCOMPLETE' : 'COMPLETED';

        $profile->update(['status' => $status]);

        return view('LVL1_Profile_Form.MFARMC_Committee.committee')->with(compact('profile'))->with('success', 'Success!');
    }
}
