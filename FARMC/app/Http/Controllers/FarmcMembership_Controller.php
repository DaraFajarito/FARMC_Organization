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
            'age' => 'nullable|string',
            'birthplace_municipality' => 'nullable|string',
            'birthplace_province' => 'nullable|string',
            '4ps' => 'nullable|string',
            'pwd' => 'nullable|string',
            'IP' => 'nullable|string',
            'name_spouse' =>  'nullable|string',
            'occupation' =>  'nullable|string',
            'religion' => 'nullable|string',
            'dependent_male' => 'nullable|integer',
            'dependent_female' => 'nullable|integer',
            'dependent_others' => 'nullable|integer',
            'educational_attainment' => 'nullable|string',
            'tesda' => 'nullable|string',
            'tertiary' => 'nullable|string',
            'other_source' => 'nullable|string'
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
            'inc_officer2' => 'nullable|string',
            'inc_member1' => 'nullable|string',
            'inc_member2' => 'nullable|string',
            'farmc_rep' => 'nullable|string',
            'sect' => 'nullable|string',
            'LGU_rep' => 'nullable|string',
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
            'lgu_accre' => 'nullable|string',
            'reg_no' => 'nullable|string',
            'date' => 'nullable|string',
            'officer_ass' => 'nullable|string',
            'position' => 'nullable|string',
            'involvement_mdo' => 'nullable|string',
            'year_el' => 'nullable|string',
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

    public function farmc_membership_count()
    {
        $data = FarmcMembership_Model::get();
        $memberCount = FarmcMembership_Model::whereNotNull('name')->count();
        $farmcCount = FarmcMembership_Model::whereNotNull('farmc_name')->count();

        //chart for complete
        return view('FARMC_Membership.FARMC_Membership', compact('memberCount', 'farmcCount', 'data'));
    }
}
