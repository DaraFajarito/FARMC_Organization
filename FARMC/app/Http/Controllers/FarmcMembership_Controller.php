<?php

namespace App\Http\Controllers;

use App\Models\FarmcMembership_Model;
use Illuminate\Http\Request;

class FarmcMembership_Controller extends Controller
{
    //
    public function addFARMC_PersonalInfo(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string',
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
            '4ps' => 'nullable|string',
            'pwd' => 'nullable|string',
            'IP' => 'nullable|string',
            'religion_affiliation' => 'nullable|string',
            'dependent_male' => 'nullable|integer',
            'dependent_female' => 'nullable|integer',
            'dependent_others' => 'nullable|integer',
            'educational_attainment' => 'nullable|string',
            'tesda' => 'nullable|string',
            'tertiary' => 'nullable|string',
            'other_source_of_livelihood' => 'nullable|string'
        ]);

        $farmcMembership = FarmcMembership_Model::create($validatedData);

        return redirect('/membership/' . $farmcMembership->id);
    }

    public function displayMembershipForm($id){

        $data = FarmcMembership_Model::where('id', $id)->first();

        return view('FARMC_Membership.membership', compact('data'));
    }
  
    public function addFARMC_Membership(Request $request, $id)
    {
        $validatedData = $request->validate([
            'farmc_name' => 'nullable|string',
            'farmc_add' => 'nullable|string',
            'mfarmc_officer' => 'nullable|string',
            'inc_officer2' => 'nullable|string',
            'inc_member1' => 'nullable|string',
            'inc_member2' => 'nullable|string',
            'farmc_rep' => 'nullable|string',
            'sector' => 'nullable|string',
            'lgu_rep' => 'nullable|string',
        ]);

        $farmcMembership = FarmcMembership_Model::find($id);

        if (!$farmcMembership) {
            return response()->json(['message' => 'FARMC Membership not found'], 404);
        }

        $farmcMembership->update($validatedData);

        return redirect('/org_membership/' . $farmcMembership->id);
    }

    public function displayOrMembershipForm($id){

        $data = FarmcMembership_Model::where('id', $id)->first();

        return view('FARMC_Membership.org_membership', compact('data'));
    }

    public function addOrg_Membership(Request $request){
        $validatedData = $request->validate([
            'farmc_name' => 'nullable|string',
            'farmc_add' => 'nullable|string',
            'mfarmc_officer' => 'nullable|string',
            'inc_officer2' => 'nullable|string',
            'inc_member1' => 'nullable|string',
            'inc_member2' => 'nullable|string',
            'farmc_rep' => 'nullable|string',
            'sector' => 'nullable|string',
            'lgu_rep' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = 'photos/' . time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage'), $photoPath);
            $validatedData['photo'] = $photoPath;
        }

        FarmcMembership_Model::updated($validatedData);

    }
}
