<?php

namespace App\Http\Controllers;

use App\Models\FC_GenInfo_Model;
use Illuminate\Http\Request;

class FC_GenInfo_Controller extends Controller
{
    public function createform2_genInfo(Request $request)
    {
        $validatedData = $request->validate([
            'as_of' => 'nullable',
            'name_of_coop' => 'nullable',
            'add_barangay' => 'nullable',
            'add_city' => 'nullable',
            'add_province' => 'nullable',
            'sector_rep' => 'nullable|in:Municipal,Commercial,Fishworker,Women,Youth,IPs,Others',
            'sector_rep_yes' => 'nullable',
            'CIN' => 'nullable',
            'date_of_amend' => 'nullable|date_format:Y-m-d',
            'short_history' => 'nullable',

            'RD_ODR_regnum' => 'nullable',
            'RD_ODR_regdate' => 'nullable|date_format:Y-m-d',
            'RD_ODR_regfile' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',


            'RD_RA_regnum' => 'nullable',
            'RD_RA_regdate' => 'nullable|date_format:Y-m-d',
            'RD_RA_regfile' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',


            'RD_memOp' => 'nullable|in:Municipal,Provincial,Regional,National',
            'RD_bussOp' => 'nullable',
            'RD_categofCoop' => 'nullable|in:Primary,Secondary,Tertiary',
            'RD_typeofCoop' => 'nullable',

            'RD_genObj' => 'nullable',
            'RD_progpas' => 'nullable',
            'RD_SOA_date' =>'nullable|date_format:Y-m-d',
            'RD_SOA_num' => 'nullable',
            'RD_categofAccre' => 'nullable|in:Municipal,Provincial,National',

        ], [

            'RD_ODR_regfile.max' => 'The RD_ODR_regfile file may not be greater than 5MB.',
            'RD_RA_regfile.max' => 'The RD_RA_regfile file may not be greater than 5MB.',
        ]);

         // Store the files in a public path
         $ODRregtFilePath = $request->file('RD_ODR_regfile') ? $request->file('RD_ODR_regfile')->move(public_path('RD_ODR_Reg')) : null;
         $RAregFilePath = $request->file('RD_RA_regfile') ? $request->file('RD_RA_regfile')->move(public_path('RD_RA_Reg')) : null;

         // Create a new ProfileForm instance
        $genInfo = new FC_GenInfo_Model();
        $genInfo->as_of = $validatedData['as_of'] ?? null;
        $genInfo->name_of_coop = $validatedData['name_of_coop'] ?? null;
        $genInfo->add_barangay = $validatedData['add_barangay'] ?? null;
        $genInfo->add_city = $validatedData['add_city'] ?? null;
        $genInfo->add_province = $validatedData['add_province'] ?? null;
        $genInfo->sector_rep = $validatedData['sector_rep'] ?? null;
        $genInfo->sector_rep_yes = $validatedData['sector_rep_yes'] ?? null;

        $genInfo->CIN = $validatedData['CIN'] ?? null;
        $genInfo->date_of_amend = $validatedData['date_of_amend'] ?? null;
        $genInfo->short_history = $validatedData['short_history'] ?? null;

        $genInfo->RD_ODR_regnum = $validatedData['RD_ODR_regnum'] ?? null;
        $genInfo->RD_ODR_regdate = isset($validatedData['RD_ODR_regdate']) ? date('Y-m-d', strtotime($validatedData['RD_ODR_regdate'])) : null;
        $genInfo->RD_ODR_regfile = $ODRregtFilePath ? '/RD_ODR_reg/' . $ODRregtFilePath->getFilename() : null;

        $genInfo->RD_RA_regnum = $validatedData['RD_ODR_regnum'] ?? null;
        $genInfo->RD_RA_regdate = isset($validatedData['RD_RA_regdate']) ? date('Y-m-d', strtotime($validatedData['RD_RA_regdate'])) : null;
        $genInfo->RD_RA_regfile = $RAregFilePath ? '/RD_RA_reg/' . $RAregFilePath->getFilename() : null;

        $genInfo->RD_memOp = $validatedData['RD_memOp'] ?? null;
        $genInfo->RD_bussOp = $validatedData['RD_bussOp'] ?? null;
        $genInfo->RD_categofCoop = $validatedData['RD_categofCoop'] ?? null;
        $genInfo->RD_typeofCoop = $validatedData['RD_typeofCoop'] ?? null;

        $genInfo->RD_genObj = $validatedData['RD_genObj'] ?? null;
        $genInfo->RD_progpas = $validatedData['RD_progpas'] ?? null;
        $genInfo->RD_SOA_date = isset($validatedData['RD_SOA_date']) ? date('Y-m-d', strtotime($validatedData['RD_SOA_date'])) : null;
        $genInfo->RD_SOA_num = $validatedData['RD_SOA_num'] ?? null;
        $genInfo->RD_categofAccre = $validatedData['RD_categofAccre'] ?? null;

        $genInfo->save();

        if ($genInfo) {
            return redirect('/FOform2_Membership/' . $genInfo->id)->with('success', 'Success!');
        } else {
            return redirect()->back()->with('failed', 'error');
        }
    }

}
