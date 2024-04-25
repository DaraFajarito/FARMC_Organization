<?php

namespace App\Http\Controllers;

use App\Models\FarmcMembership_Model;
use Illuminate\Http\Request;

class FarmcMembership_Controller extends Controller
{
    //
    public function addFARMC_PersonalInfo(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'address' => 'nullable|string',
            'landline_no' => 'nullable|string',
            'mobile_no' => 'nullable|string',
            'email' => 'nullable|string|email',
            'civil_status' => 'nullable|string',
            'gender' => 'nullable|string',
            'birthdate' => 'nullable|string',
            'age' => 'nullable|integer',
            'birthplace_municipality' => 'nullable|string',
            'birthplace_province' => 'nullable|string',
            'fourps' => 'nullable|string',
            'pwd' => 'nullable|string',
            'pwd_yes' => 'nullable|string',
            'IP' => 'nullable|string',
            'IP_yes' => 'nullable|string',
            'name_spouse' =>  'nullable|string',
            'occupation' =>  'nullable|string',
            'religion' => 'nullable|string',
            'religion_christ' => 'nullable|string',
            'dependent_male' => 'nullable|integer',
            'dependent_female' => 'nullable|integer',
            'dependent_others' => 'nullable|integer',
            'educational_attainment' => 'nullable|string',
            'tesda' => 'nullable|string',
            'tertiary' => 'nullable|string',
            'other_source' => 'nullable|string',
            'other_source_other' => 'nullable|string'
        ]);

        $farmcMembership = FarmcMembership_Model::create($validatedData);

        return redirect('/membership/' . $farmcMembership->id);
    }

    public function displayMembershipForm($id)
    {

        $data = FarmcMembership_Model::where('id', $id)->first();

        return view('FARMC_Membership.membership', compact('data'));
    }


    public function addFARMC_Membership(Request $request, $id)
    {
        $validatedData = $request->validate([
            'farmc_name' => 'nullable|string',
            'farmc_add' => 'nullable|string',
            'mfarmc_off' => 'nullable|string',
            'mfarmc_off_yes' => 'nullable|string',
            'inc_officer1' => 'nullable|string',
            'inc_officer2' => 'nullable|string',
            'inc_member1' => 'nullable|string',
            'inc_member2' => 'nullable|string',
            'farmc_rep' => 'nullable|string',
            'sect' => 'nullable|string',
            'sect_other' => 'nullable|string',
            'LGU_rep' => 'nullable|string',
            'LGU_rep_other' => 'nullable|string',
        ]);

        $farmcMembership = FarmcMembership_Model::find($id);

        if (!$farmcMembership) {
            return response()->json(['message' => 'FARMC Membership not found'], 404);
        }

        $farmcMembership->update($validatedData);

        return redirect('/org_membership/' . $farmcMembership->id);
    }

    public function displayOrgMembershipForm($id)
    {

        $data = FarmcMembership_Model::where('id', $id)->first();

        return view('FARMC_Membership.org_membership', compact('data'));
    }

    public function addOrg_Membership(Request $request, $id)
    {
        $validatedData = $request->validate([
            'org_mem_name' => 'nullable|string',
            'add_acc' => 'nullable|string',
            'comp_mem' => 'nullable|string',
            'reg_ass' => 'nullable|string',
            'reg_ass_yes' => 'nullable|string',
            'lgu_accre' => 'nullable|string',
            'reg_no' => 'nullable|string',
            'date' => 'nullable|string',
            'officer_ass' => 'nullable|string',
            'position' => 'nullable|string',
            'involvement_mdo' => 'nullable|string',
            'year1' => 'nullable|string',
            'year2' => 'nullable|string',
            'year3' => 'nullable|string',
            'photo' => 'file|max:10485760|mimes:pdf,doc,docx,jpeg,png',
        ], [
            'photo.max' => 'The photo may not be greater than 10MB.',
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = 'photos/' . time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage'), $photoPath);
            $validatedData['photo'] = $photoPath;
        }

        $farmcMembership = FarmcMembership_Model::find($id);

        if (!$farmcMembership) {
            return response()->json(['message' => 'FARMC Membership not found'], 404);
        }

        $farmcMembership->update($validatedData);

        return redirect('/farmc_membership');
    }

    //==========================================================================================================================================||
    //================================================== C O U N T  O F  D A T A ===============================================================||


    public function farmc_membership_count()
    {
        $data = FarmcMembership_Model::get();
        $memberCount = FarmcMembership_Model::whereNotNull('name')->count();
        $farmcCount = FarmcMembership_Model::whereNotNull('org_mem_name')->count();
        // $compMemCount = FarmcMembership_Model::whereNotNull('comp_mem')->count();

        // Age Count

        $ageRanges = [
            '0-18' => FarmcMembership_Model::whereBetween('age', [0, 18])->get()->count(),
            '19-25' => FarmcMembership_Model::whereBetween('age', [19, 25])->get()->count(),
            '26-35' => FarmcMembership_Model::whereBetween('age', [26, 35])->get()->count(),
            '36-50' => FarmcMembership_Model::whereBetween('age', [36, 50])->get()->count(),
            '51+' => FarmcMembership_Model::where('age', '>', 50)->get()->count(),
        ];
        $labelsage = array_keys($ageRanges);
        $data_age = array_values($ageRanges);

        // Composition of Membership Count and Categ

        $municipalCount = FarmcMembership_Model::where('comp_mem', 'Municipal')->count();
        $fishworkerCount = FarmcMembership_Model::where('comp_mem', 'Fishworker')->count();
        $culturalCount = FarmcMembership_Model::where('comp_mem', 'Cultural Community (IP\'s)')->count();
        $commercialCount = FarmcMembership_Model::where('comp_mem', 'Commercial')->count();
        $womenYouthCount = FarmcMembership_Model::where('comp_mem', 'Women / Youth')->count();

        $memCount = [
            'Municipal' => $municipalCount,
            'Fishworker' => $fishworkerCount,
            'Cultural Community (IP\'s)' => $culturalCount,
            'Commercial' => $commercialCount,
            'Women / Youth' => $womenYouthCount
        ];

        $labelscomp = array_keys($memCount);
        $data_comp = array_values($memCount);

        $gen_male = FarmcMembership_Model::where('gender', 'Male')->count();
        $gen_female = FarmcMembership_Model::where('gender', 'Female')->count();
        $gen_other = FarmcMembership_Model::where('gender', 'Others')->count();

        $genderCount = [
            'Male' => $gen_male,
            'Female' => $gen_female,
            'Others' => $gen_other,
        ];

        $labelsgen = array_keys($genderCount);
        $data_gen = array_values($genderCount);

        return view('FARMC_Membership.FARMC_Membership', compact('memberCount', 'farmcCount', 'data', 'data_age', 'labelsage', 'data_comp', 'labelscomp', 'labelsgen', 'data_gen'));
    }

     //==========================================================================================================================================||
    //================================================== D I S P L A Y I N G  O F  D A T A ===============================================================||

    public function display_mem_Viewform($id)
    {
        $farmc_mem = FarmcMembership_Model::where('id', $id)->get();

        return view('FARMC_Membership.FARMC_Viewform', compact('farmc_mem'));
    }

    public function display_membership_archived()
    {
        $mem_archived = FarmcMembership_Model::where('status', 'ARCHIVED')->get();
        return view('FARMC_Membership.archive_membership', compact('mem_archived'));
    }

   //==========================================================================================================================================||
    //================================================== A R C H I V I N G  O F  D A T A ===============================================================||

    public function moveToMem_archived($id)
    {
        $mem_archived = FarmcMembership_Model::find($id);

        if ($mem_archived) {
            $mem_archived->status = 'ARCHIVED';
            $mem_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found.');
        }
    }

}
