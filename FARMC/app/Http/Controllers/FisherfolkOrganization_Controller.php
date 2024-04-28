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

        // $basicInfo = FisherfolkOrganization_Model::create($validatedData);

        // return redirect('/FOform1_ExecOff/' . $basicInfo->id);
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
}

