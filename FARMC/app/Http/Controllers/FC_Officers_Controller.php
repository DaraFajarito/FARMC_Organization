<?php

namespace App\Http\Controllers;
use App\Models\FC_GenInfo_Model;
use App\Models\FC_Officers_Model;
use Illuminate\Http\Request;

class FC_Officers_Controller extends Controller
{
    public function display_foOfficers($id) {

        $fo_officers = FC_GenInfo_Model::where('id', $id)->get();

        return view('Fisherfolk_Organization.Cooperative_Form.form2_Officers' , compact('fo_officers'));
    }

    public function add_foOfficers(Request $request)
    {
        $fisherfolkOrg_FC = FC_GenInfo_Model::latest()->first();

        $validatedData = $request->validate([

            'BoardofDir_name1' => 'nullable',
            'cs1' => 'nullable',
            'gen1' => 'nullable',
            'birth1' =>  'nullable|date_format:Y-m-d',
            'age1' => 'nullable',

            'Chairperson_name2' => 'nullable',
            'cs2' => 'nullable',
            'gen2' => 'nullable',
            'birth2' =>  'nullable|date_format:Y-m-d',
            'age2' => 'nullable',

            'Vchair_name3' => 'nullable',
            'cs3' => 'nullable',
            'gen3' => 'nullable',
            'birth3' =>  'nullable|date_format:Y-m-d',
            'age3' => 'nullable',

            'BM_name4' => 'nullable',
            'cs4' => 'nullable',
            'gen4' => 'nullable',
            'birth4' =>  'nullable|date_format:Y-m-d',
            'age4' => 'nullable',

            'BM_name5' => 'nullable',
            'cs5' => 'nullable',
            'gen5' => 'nullable',
            'birth5' =>  'nullable|date_format:Y-m-d',
            'age5' => 'nullable',

            'BM_name6' => 'nullable',
            'cs6' => 'nullable',
            'gen6' => 'nullable',
            'birth6' =>  'nullable|date_format:Y-m-d',
            'age6' => 'nullable',

            'BM_name7' => 'nullable',
            'cs7' => 'nullable',
            'gen7' => 'nullable',
            'birth7' =>  'nullable|date_format:Y-m-d',
            'age7' => 'nullable',

            'BM_name8' => 'nullable',
            'cs8' => 'nullable',
            'gen8' => 'nullable',
            'birth8' =>  'nullable|date_format:Y-m-d',
            'age8' => 'nullable',

            'BM_name9' => 'nullable',
            'cs9' => 'nullable',
            'gen9' => 'nullable',
            'birth9' =>  'nullable|date_format:Y-m-d',
            'age9' => 'nullable',

            'BM_name10' => 'nullable',
            'cs10' => 'nullable',
            'gen10' => 'nullable',
            'birth10' =>  'nullable|date_format:Y-m-d',
            'age10' => 'nullable',

            'GenMan_name11' => 'nullable',
            'cs11' => 'nullable',
            'gen11' => 'nullable',
            'birth11' =>  'nullable|date_format:Y-m-d',
            'age11' => 'nullable',

            'Sec_name12' => 'nullable',
            'cs12' => 'nullable',
            'gen12' => 'nullable',
            'birth12' =>  'nullable|date_format:Y-m-d',
            'age12' => 'nullable',

            'Treas_name13' => 'nullable',
            'cs13' => 'nullable',
            'gen13' => 'nullable',
            'birth13' =>  'nullable|date_format:Y-m-d',
            'age13' => 'nullable',



        ]);


        $off = new FC_Officers_Model();
        $off->fisherfolkOrg_FC_id = $fisherfolkOrg_FC->id ?? null;
        $off->BoardofDir_name1 = $validatedData['BoardofDir_name1'] ?? null;
        $off->cs1 = $validatedData['cs1'] ?? null;
        $off->gen1 = $validatedData['gen1'] ?? null;
        $off->birth1 = isset($validatedData['birth1']) ? date('Y-m-d', strtotime($validatedData['birth1'])) : null;
        $off->age1 =  $validatedData['age1'] ?? null;

        $off->Chairperson_name2 = $validatedData['Chairperson_name2'] ?? null;
        $off->cs2 = $validatedData['cs2'] ?? null;
        $off->gen2 = $validatedData['gen2'] ?? null;
        $off->birth2 = isset($validatedData['birth2']) ? date('Y-m-d', strtotime($validatedData['birth2'])) : null;
        $off->age2 =  $validatedData['age2'] ?? null;

        $off->Vchair_name3 = $validatedData['Vchair_name3'] ?? null;
        $off->cs3 = $validatedData['cs3'] ?? null;
        $off->gen3 = $validatedData['gen3'] ?? null;
        $off->birth3 = isset($validatedData['birth3']) ? date('Y-m-d', strtotime($validatedData['birth3'])) : null;
        $off->age3 =  $validatedData['age3'] ?? null;

        $off->BM_name4 = $validatedData['BM_name4'] ?? null;
        $off->cs4 = $validatedData['cs4'] ?? null;
        $off->gen4 = $validatedData['gen4'] ?? null;
        $off->birth4 = isset($validatedData['birth4']) ? date('Y-m-d', strtotime($validatedData['birth4'])) : null;
        $off->age4 =  $validatedData['age4'] ?? null;

        $off->BM_name5 = $validatedData['BM_name5'] ?? null;
        $off->cs5 = $validatedData['cs5'] ?? null;
        $off->gen5 = $validatedData['gen5'] ?? null;
        $off->birth5 = isset($validatedData['birth5']) ? date('Y-m-d', strtotime($validatedData['birth5'])) : null;
        $off->age5 =  $validatedData['age5'] ?? null;

        $off->BM_name6 = $validatedData['BM_name6'] ?? null;
        $off->cs6 = $validatedData['cs6'] ?? null;
        $off->gen6 = $validatedData['gen6'] ?? null;
        $off->birth6 = isset($validatedData['birth6']) ? date('Y-m-d', strtotime($validatedData['birth6'])) : null;
        $off->age6 =  $validatedData['age6'] ?? null;

        $off->BM_name7 = $validatedData['BM_name7'] ?? null;
        $off->cs7 = $validatedData['cs7'] ?? null;
        $off->gen7 = $validatedData['gen7'] ?? null;
        $off->birth7 = isset($validatedData['birth7']) ? date('Y-m-d', strtotime($validatedData['birth7'])) : null;
        $off->age7 =  $validatedData['age7'] ?? null;

        $off->BM_name8 = $validatedData['BM_name8'] ?? null;
        $off->cs8 = $validatedData['cs8'] ?? null;
        $off->gen8 = $validatedData['gen8'] ?? null;
        $off->birth8 = isset($validatedData['birth8']) ? date('Y-m-d', strtotime($validatedData['birth8'])) : null;
        $off->age8 =  $validatedData['age8'] ?? null;

        $off->BM_name9 = $validatedData['BM_name9'] ?? null;
        $off->cs9 = $validatedData['cs9'] ?? null;
        $off->gen9 = $validatedData['gen9'] ?? null;
        $off->birth9 = isset($validatedData['birth9']) ? date('Y-m-d', strtotime($validatedData['birth9'])) : null;
        $off->age9 =  $validatedData['age9'] ?? null;

        $off->BM_name10 = $validatedData['BM_name10'] ?? null;
        $off->cs10 = $validatedData['cs10'] ?? null;
        $off->gen10 = $validatedData['gen10'] ?? null;
        $off->birth10 = isset($validatedData['birth10']) ? date('Y-m-d', strtotime($validatedData['birth10'])) : null;
        $off->age10 =  $validatedData['age10'] ?? null;

        $off->GenMan_name11 = $validatedData['GenMan_name11'] ?? null;
        $off->cs11 = $validatedData['cs11'] ?? null;
        $off->gen11 = $validatedData['gen11'] ?? null;
        $off->birth11 = isset($validatedData['birth11']) ? date('Y-m-d', strtotime($validatedData['birth11'])) : null;
        $off->age11 =  $validatedData['age11'] ?? null;

        $off->Sec_name12 = $validatedData['Sec_name12'] ?? null;
        $off->cs12 = $validatedData['cs12'] ?? null;
        $off->gen12 = $validatedData['gen12'] ?? null;
        $off->birth12 = isset($validatedData['birth12']) ? date('Y-m-d', strtotime($validatedData['birth12'])) : null;
        $off->age12 =  $validatedData['age12'] ?? null;

        $off->Treas_name13 = $validatedData['Treas_name13'] ?? null;
        $off->cs13 = $validatedData['cs13'] ?? null;
        $off->gen13 = $validatedData['gen13'] ?? null;
        $off->birth13 = isset($validatedData['birth13']) ? date('Y-m-d', strtotime($validatedData['birth13'])) : null;
        $off->age13 =  $validatedData['age13'] ?? null;

        $off->save();

        if ($off) {
            return redirect('/FOform2_Officers1/' . $off->fisherfolkOrg_FC_id)->with('success', 'Success!');
        } else {
            return redirect()->back()->with('failed', 'error');
        }
    }
}
