<?php

namespace App\Http\Controllers;

use App\Models\FisherfolkOrganization_Model;
use Illuminate\Http\Request;


class FisherfolkOrganization_Controller extends Controller
{
    public function createform1_basicInfo(Request $request)
    {
        $validatedData = $request->validate([
            'as_of' => 'nullable',
            'name_of_org' => 'nullable',
            'add_barangay' => 'nullable',
            'add_city' => 'nullable',
            'add_province' => 'nullable',
            'sector_rep' => 'nullable',
            'sector_rep_yes' => 'nullable',
            'status_of_reg' => 'nullable',
            'status_of_reg_yes' => 'nullable',
            'reg_no' => 'nullable',
            'date_reg' => 'nullable',
            'status_of_accre' => 'nullable',
            'status_of_accre_yes' => 'nullable',
            'accre_no' => 'nullable',
            'date_accre' => 'nullable',
        ]);

        // Create a new ProfileForm instance
        $basicInfo = new FisherfolkOrganization_Model();
        $basicInfo->as_of = $validatedData['as_of'] ?? null;
        $basicInfo->name_of_org = $validatedData['name_of_org'] ?? null;
        $basicInfo->add_barangay = $validatedData['add_barangay'] ?? null;
        $basicInfo->add_city = $validatedData['add_city'] ?? null;
        $basicInfo->add_province = $validatedData['add_province'] ?? null;
        $basicInfo->sector_rep = $validatedData['sector_rep'] ?? null;
        $basicInfo->sector_rep_yes = $validatedData['sector_rep_yes'] ?? null;
        $basicInfo->status_of_reg = $validatedData['status_of_reg'] ?? null;
        $basicInfo->status_of_reg_yes = $validatedData['status_of_reg_yes'] ?? null;
        $basicInfo->reg_no = $validatedData['reg_no'] ?? null;
        $basicInfo->date_reg = $validatedData['date_reg'] ?? null;
        $basicInfo->status_of_accre = $validatedData['status_of_accre'] ?? null;
        $basicInfo->status_of_accre_yes = $validatedData['status_of_accre_yes'] ?? null;
        $basicInfo->accre_no = $validatedData['accre_no'] ?? null;
        $basicInfo->date_accre = $validatedData['date_accre'] ?? null;

        $basicInfo->save();

        if ($basicInfo) {
            return redirect('/FOform1_ExecOff/' . $basicInfo->id)->with('success', 'Success!');
        } else {
            return redirect()->back()->with('failed', 'error');
        }
    }

    public function display_exec_off($id)
    {
        $exec_off = FisherfolkOrganization_Model::where('id', $id)->get();
        if (!$exec_off) {
            return redirect()->back()->with('failed', 'Form 1 Basic Info record not found');
        } else {
            return view('Fisherfolk_Organization.Municipal.form1_OAM_ExecOff', compact('exec_off'));
        }
    }

    public function add_exec_off (Request $request, $id)
    {
        $validatedData = $request->validate([
            'OAM_EO_Chair_name' => 'nullable',
            'chair_cs' => 'nullable',
            'chair_gen' => 'nullable',
            'chair_birth' => 'nullable|date_format:Y-m-d',
            'chair_age' => 'nullable',
            'chair_fourps' => 'nullable',

            'OAM_EO_Vicechair_name' => 'nullable',
            'vicechair_cs' => 'nullable',
            'vicechair_gen' => 'nullable',
            'vicechair_birth' => 'nullable|date_format:Y-m-d',
            'vicechair_age' => 'nullable',
            'vicechair_fourps' => 'nullable',

            'OAM_EO_Sec_name' => 'nullable',
            'sec_cs' => 'nullable',
            'sec_gen' => 'nullable',
            'sec_birth' => 'nullable|date_format:Y-m-d',
            'sec_age' => 'nullable',
            'sec_fourps' => 'nullable',

            'OAM_EO_Treas_name' => 'nullable',
            'treas_cs' => 'nullable',
            'treas_gen' => 'nullable',
            'treas_birth' => 'nullable|date_format:Y-m-d',
            'treas_age' => 'nullable',
            'treas_fourps' => 'nullable',

            'OAM_EO_Aud_name' => 'nullable',
            'aud_cs' => 'nullable',
            'aud_gen' => 'nullable',
            'aud_birth' => 'nullable|date_format:Y-m-d',
            'aud_age' => 'nullable',
            'aud_fourps' => 'nullable',

            'OAM_EO_PRO_name' => 'nullable',
            'pro_cs' => 'nullable',
            'pro_gen' => 'nullable',
            'pro_birth' => 'nullable|date_format:Y-m-d',
            'pro_age' => 'nullable',
            'pro_fourps' => 'nullable',

            'OAM_EO_Sgt_name' => 'nullable',
            'sgt_cs' => 'nullable',
            'sgt_gen' => 'nullable',
            'sgt_birth' => 'nullable|date_format:Y-m-d',
            'sgt_age' => 'nullable',
            'sgt_fourps' => 'nullable',

            'OAM_EO_Other_name' => 'nullable',
            'other_cs' => 'nullable',
            'other_gen' => 'nullable',
            'other_birth' => 'nullable|date_format:Y-m-d',
            'other_age' => 'nullable',
            'other_fourps' => 'nullable',


        ]);


        $execOff = FisherfolkOrganization_Model::findOrFail($id);

        $execOff->OAM_EO_Chair_name = $validatedData['OAM_EO_Chair_name'] ?? null;
        $execOff->chair_cs = $validatedData['chair_cs'] ?? null;
        $execOff->chair_gen = $validatedData['chair_gen'] ?? null;
        $execOff->chair_birth = isset($validatedData['chair_birth']) ? date('Y-m-d', strtotime($validatedData['chair_birth'])) : null;
        $execOff->chair_age = $validatedData['chair_age'] ?? null;
        $execOff->chair_fourps = $validatedData['chair_fourps'] ?? null;

        $execOff->OAM_EO_Vicechair_name = $validatedData['OAM_EO_Vicechair_name'] ?? null;
        $execOff->vicechair_cs = $validatedData['vicechair_cs'] ?? null;
        $execOff->vicechair_gen = $validatedData['vicechair_gen'] ?? null;
        $execOff->vicechair_birth = isset($validatedData['vicechair_birth']) ? date('Y-m-d', strtotime($validatedData['vicechair_birth'])) : null;
        $execOff->vicechair_age = $validatedData['vicechair_age'] ?? null;
        $execOff->vicechair_fourps = $validatedData['vicechair_fourps'] ?? null;

        $execOff->OAM_EO_Sec_name = $validatedData['OAM_EO_Sec_name'] ?? null;
        $execOff->sec_cs = $validatedData['sec_cs'] ?? null;
        $execOff->sec_gen = $validatedData['sec_gen'] ?? null;
        $execOff->sec_birth = isset($validatedData['sec_birth']) ? date('Y-m-d', strtotime($validatedData['sec_birth'])) : null;
        $execOff->sec_age = $validatedData['sec_age'] ?? null;
        $execOff->sec_fourps = $validatedData['sec_fourps'] ?? null;

        $execOff->OAM_EO_Treas_name = $validatedData['OAM_EO_Treas_name'] ?? null;
        $execOff->treas_cs = $validatedData['treas_cs'] ?? null;
        $execOff->treas_gen = $validatedData['treas_gen'] ?? null;
        $execOff->treas_birth = isset($validatedData['treas_birth']) ? date('Y-m-d', strtotime($validatedData['treas_birth'])) : null;
        $execOff->treas_age = $validatedData['treas_age'] ?? null;
        $execOff->treas_fourps = $validatedData['treas_fourps'] ?? null;

        $execOff->OAM_EO_Aud_name = $validatedData['OAM_EO_Aud_name'] ?? null;
        $execOff->aud_cs = $validatedData['aud_cs'] ?? null;
        $execOff->aud_gen = $validatedData['aud_gen'] ?? null;
        $execOff->aud_birth = isset($validatedData['aud_birth']) ? date('Y-m-d', strtotime($validatedData['aud_birth'])) : null;
        $execOff->aud_age = $validatedData['aud_age'] ?? null;
        $execOff->aud_fourps = $validatedData['aud_fourps'] ?? null;

        $execOff->OAM_EO_PRO_name = $validatedData['OAM_EO_PRO_name'] ?? null;
        $execOff->pro_cs = $validatedData['pro_cs'] ?? null;
        $execOff->pro_gen = $validatedData['pro_gen'] ?? null;
        $execOff->pro_birth = isset($validatedData['pro_birth']) ? date('Y-m-d', strtotime($validatedData['pro_birth'])) : null;
        $execOff->pro_age = $validatedData['pro_age'] ?? null;
        $execOff->pro_fourps = $validatedData['pro_fourps'] ?? null;

        $execOff->OAM_EO_Sgt_name = $validatedData['OAM_EO_Sgt_name'] ?? null;
        $execOff->sgt_cs = $validatedData['sgt_cs'] ?? null;
        $execOff->sgt_gen = $validatedData['sgt_gen'] ?? null;
        $execOff->sgt_birth = isset($validatedData['sgt_birth']) ? date('Y-m-d', strtotime($validatedData['sgt_birth'])) : null;
        $execOff->sgt_age = $validatedData['sgt_age'] ?? null;
        $execOff->sgt_fourps = $validatedData['sgt_fourps'] ?? null;

        $execOff->OAM_EO_Other_name = $validatedData['OAM_EO_Other_name'] ?? null;
        $execOff->other_cs = $validatedData['other_cs'] ?? null;
        $execOff->other_gen = $validatedData['other_gen'] ?? null;
        $execOff->other_birth = isset($validatedData['other_birth']) ? date('Y-m-d', strtotime($validatedData['other_birth'])) : null;
        $execOff->other_age = $validatedData['other_age'] ?? null;
        $execOff->other_fourps = $validatedData['other_fourps'] ?? null;

        $execOff->save();

        if ($execOff) {
            return redirect('/FOform1_BoardofDir/' . $execOff->id)->with('success', 'Success!');
        } else {
            return redirect()->back()->with('failed', 'error');
        }
    }

    // FUNCTION TO DISPLAY THE BOARD OF DIRECTORS ARE IN THE FO_OAM_BOARDOFDIR

    public function display_CapCon_off($id)
    {
        $capcon = FisherfolkOrganization_Model::where('id', $id)->get();
        if (!$capcon) {
            return redirect()->back()->with('failed', 'Form 1 Basic Info record not found');
        } else {
            return view('Fisherfolk_Organization.Municipal.form1_Capitalization', compact('capcon'));
        }
    }

    public function add_CapCon(Request $request, $id)
    {
        $validatedData = $request->validate([
            'capmem_fee' => 'nullable',
            'capmonthly_cont' => 'nullable',
            'cap_donation' => 'nullable',
            'cap_others' => 'nullable',
            'captotal_cap' => 'nullable',
            'CIcontact_person' => 'nullable',
            'CIlandline' => 'nullable',
            'CIMobile' => 'nullable',
            'CIMess' => 'nullable',

        ]);


        $capCon = FisherfolkOrganization_Model::findOrFail($id);

        $capCon->capmem_fee = $validatedData['capmem_fee'] ?? null;
        $capCon->capmonthly_cont = $validatedData['capmonthly_cont'] ?? null;
        $capCon->cap_donation = $validatedData['cap_donation'] ?? null;
        $capCon->cap_others = $validatedData['cap_others'] ?? null;
        $capCon->captotal_cap = $validatedData['captotal_cap'] ?? null;

        $capCon->CIcontact_person = $validatedData['CIcontact_person'] ?? null;
        $capCon->CIlandline = $validatedData['CIlandline'] ?? null;
        $capCon->CIMobile = $validatedData['CIMobile'] ?? null;
        $capCon->CIMess = $validatedData['CIMess'] ?? null;


        $capCon->save();

       return redirect('/FOMunicipal')->with('success', 'Success!');
    }
}

