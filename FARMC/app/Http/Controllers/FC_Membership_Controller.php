<?php

namespace App\Http\Controllers;

use App\Models\FC_GenInfo_Model;
use Illuminate\Http\Request;
use App\Models\FC_Membership_Model;

class FC_Membership_Controller extends Controller
{

    public function display_foMembership($id)
    {
        $members = FC_GenInfo_Model::where('id', $id)->get();

        return view('Fisherfolk_Organization.Cooperative_Form.form2_Membership&Asset', compact('members'));
    }

    public function add_foMembership(Request $request)
    {
        $fisherfolkOrg_FC = FC_GenInfo_Model::latest()->first();

        $validatedData = $request->validate([

            'common_bond' => 'nullable|in:Institutional,Occupational,Residential,Associational',
            'CoM_NRMem_male' => 'nullable',
            'NRMem_female' => 'nullable',
            'NRMem_total' => 'nullable',

            'CoM_NAMem_male' => 'nullable',
            'NAMem_female' => 'nullable',
            'NAMem_total' => 'nullable',

            'CoM_TotalMem_male' => 'nullable',
            'TMem_female' => 'nullable',
            'TMem_total' => 'nullable',

            'CoM_TargetMem_male' => 'nullable',
            'TarMem_female' => 'nullable',
            'TarMem_total' => 'nullable',

            'CoM_Total_male' => 'nullable',
            'Total_female' => 'nullable',
            'Total_total' => 'nullable',

            'NoE_Fulltime_male' => 'nullable',
            'Fulltime_female' => 'nullable',
            'Fulltime_total' => 'nullable',

            'NoE_Parttime_male' => 'nullable',
            'Parttime_female' => 'nullable',
            'Parttime_total' => 'nullable',

            'NoE_Total_male' => 'nullable',
            'TotalEmp_female' => 'nullable',
            'TotalEmp_total' => 'nullable',

            'total_assets' => 'nullable',

        ]);


        $mem = new FC_Membership_Model();
        $mem->fisherfolkOrg_FC_id = $fisherfolkOrg_FC->id ?? null;
        $mem->common_bond = $validatedData['common_bond'] ?? null;
        $mem->CoM_NRMem_male = $validatedData['CoM_NRMem_male'] ?? null;
        $mem->NRMem_female = $validatedData['NRMem_female'] ?? null;
        $mem->NRMem_total =  $validatedData['NRMem_total'] ?? null;

        $mem->CoM_NAMem_male = $validatedData['CoM_NAMem_male'] ?? null;
        $mem->NAMem_female = $validatedData['NAMem_female'] ?? null;
        $mem->NAMem_total = $validatedData['NAMem_total'] ?? null;

        $mem->CoM_TotalMem_male = $validatedData['CoM_TotalMem_male'] ?? null;
        $mem->TMem_female = $validatedData['TMem_female'] ?? null;
        $mem->TMem_total = $validatedData['TMem_total'] ?? null;

        $mem->CoM_TargetMem_male = $validatedData['CoM_TargetMem_male'] ?? null;
        $mem->TarMem_female = $validatedData['TarMem_female'] ?? null;
        $mem->TarMem_total = $validatedData['TarMem_total'] ?? null;

        $mem->CoM_Total_male = $validatedData['CoM_Total_male'] ?? null;
        $mem->Total_female = $validatedData['Total_female'] ?? null;
        $mem->Total_total = $validatedData['Total_total'] ?? null;


        $mem->NoE_Fulltime_male = $validatedData['NoE_Fulltime_male'] ?? null;
        $mem->Fulltime_female = $validatedData['Fulltime_female'] ?? null;
        $mem->Fulltime_total = $validatedData['Fulltime_total'] ?? null;

        $mem->NoE_Parttime_male = $validatedData['NoE_Parttime_male'] ?? null;
        $mem->Parttime_female = $validatedData['Parttime_female'] ?? null;
        $mem->Parttime_total = $validatedData['Parttime_total'] ?? null;

        $mem->NoE_Total_male = $validatedData['NoE_Total_male'] ?? null;
        $mem->TotalEmp_female = $validatedData['TotalEmp_female'] ?? null;
        $mem->TotalEmp_total = $validatedData['TotalEmp_total'] ?? null;

        $mem->total_assets = $validatedData['total_assets'] ?? null;


        $mem->save();

        if ($mem) {
            return redirect('/FOform2_Officers/' . $mem->fisherfolkOrg_FC_id)->with('success', 'Success!');
        } else {
            return redirect()->back()->with('failed', 'error');
        }
    }
}
