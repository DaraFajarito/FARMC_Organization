<?php

namespace App\Http\Controllers;

use App\Models\FC_GenInfo_Model;
use App\Models\FC_OrgStruct_Model;
use Illuminate\Http\Request;

class FC_OrgStruct_Controller extends Controller
{
    // public function display_orgstruct($id)
    // {
    //     $orgstruct = FC_GenInfo_Model::where('id', $id)->get();

    //     return view('Fisherfolk_Organization.Cooperative_Form.form2_OrgStructure', compact('orgstruct'));
    // }

    public function display_orgstruct($id)
    {
        $orgstruct = FC_GenInfo_Model::where('id', $id)->get();

        return view('Fisherfolk_Organization.Cooperative_Form.form2_OrgStructure', compact('orgstruct'));
    }

    public function add_OrgStruct(Request $request)
    {
        $fisherfolkOrg_FC = FC_GenInfo_Model::latest()->first();

        $validatedData = $request->validate([
            'orgstruct_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'CD_name' => 'nullable',
            'CD_design' => 'nullable',
            'CD_tell' => 'nullable',
            'CD_email' => 'nullable',
            'CD_FBacc' => 'nullable',
        ]);


        $orgstructFilePath = $request->file('orgstruct_file') ? $request->file('orgstruct_file')->move(public_path('Fisherfolk_Organization/orgstruct')) : null;

        $orgstr = new FC_OrgStruct_Model();
        $orgstr->fisherfolkOrg_FC_id = $fisherfolkOrg_FC->id ?? null;
        $orgstr->orgstruct_file = $orgstructFilePath ? '/orgstruct/' . $orgstructFilePath->getFilename() : null;

        $orgstr->CD_name = $validatedData['CD_name'] ?? null;

        $orgstr->CD_design = $validatedData['CD_design'] ?? null;
        $orgstr->CD_tell = $validatedData['CD_tell'] ?? null;
        $orgstr->CD_email =  $validatedData['CD_email'] ?? null;
        $orgstr->CD_FBacc = $validatedData['CD_FBacc'] ?? null;

        $orgstr->save();


        // Check if any changes were made and redirect accordingly
        if ($orgstr) {
            $sectorRep = $fisherfolkOrg_FC->sector_rep;
            switch ($sectorRep) {
                case 'Municipal':
                    return redirect('/FOMunicipal')->with('success', 'Data has been updated successfully!');
                case 'Fishworker':
                    return redirect('/FOFishworker')->with('success', 'Data has been updated successfully!');
                case 'Commercial':
                    return redirect('/FOCommercial')->with('success', 'Data has been updated successfully!');
                case 'Women':
                    return redirect('/FOWomenF')->with('success', 'Data has been updated successfully!');
                case 'Youth':
                    return redirect('/FOYouth')->with('success', 'Data has been updated successfully!');
                case 'IP':
                    return redirect('/FOIPs')->with('success', 'Data has been updated successfully!');
                default:
                    return redirect()->back()->with('error', 'Failed to update. No changes were made.');
            }
        } else {
            return redirect()->back()->with('error', 'Failed to update. No changes were made.');
        }
    }
}
