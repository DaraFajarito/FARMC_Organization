<?php

namespace App\Http\Controllers;

use App\Models\FarmcMembership_Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class FarmcMembership_Controller extends Controller
{
    //
    public function addFARMC_PersonalInfo(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'barangay' => 'nullable|string',
            'city' => 'nullable|string',
            'province' => 'nullable|string',
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

        //Count all data names
        $allNames = FarmcMembership_Model::whereNotNull('name')->get();

        $filteredNames = $allNames->reject(function ($names) {
            return $names->status === 'ARCHIVED';
        });

        $memberCount = $filteredNames->count();


        //Count all data org_name
        $allOrg = FarmcMembership_Model::whereNotNull('org_mem_name')->get();

        $filterOrgname = $allOrg->reject(function ($orgname) {
            return $orgname->status === 'ARCHIVED';
        });

        $farmcCount = $filterOrgname->count();


        $allMembers = FarmcMembership_Model::whereIn('age', range(0, 18))
            ->orWhereIn('age', range(19, 25))
            ->orWhereIn('age', range(26, 35))
            ->orWhereIn('age', range(36, 50))
            ->orWhere('age', '>', 50)
            ->get();

        // Filter out 'ARCHIVED' members
        $filteredMembers = $allMembers->reject(function ($member) {
            return $member->status === 'ARCHIVED';
        });

        // Count members in each age range
        $ageRanges = [
            '0-18' => $filteredMembers->whereBetween('age', [0, 18])->count(),
            '19-25' => $filteredMembers->whereBetween('age', [19, 25])->count(),
            '26-35' => $filteredMembers->whereBetween('age', [26, 35])->count(),
            '36-50' => $filteredMembers->whereBetween('age', [36, 50])->count(),
            '51+' => $filteredMembers->where('age', '>', 50)->count(),
        ];


        $labelsage = array_keys($ageRanges);
        $data_age = array_values($ageRanges);

        // Composition of Membership Count and Categ

        $municipalCount = FarmcMembership_Model::where('comp_mem', 'Municipal')->count();
        $fishworkerCount = FarmcMembership_Model::where('comp_mem', 'Fishworker')->count();
        $culturalCount = FarmcMembership_Model::where('comp_mem', 'Cultural Community (IPs)')->count();
        $commercialCount = FarmcMembership_Model::where('comp_mem', 'Commercial')->count();
        $womenYouthCount = FarmcMembership_Model::where('comp_mem', 'Women/Youth')->count();

        // Check if any of the counts have the 'ARCHIVED' status and exclude them
        if (FarmcMembership_Model::where('status', 'ARCHIVED')->exists()) {
            $archivedCounts = FarmcMembership_Model::where('status', 'ARCHIVED')->whereIn('comp_mem', ['Municipal', 'Fishworker', 'Cultural Community (IPs)', 'Commercial', 'Women/Youth'])->pluck('comp_mem')->toArray();
            if (in_array('Municipal', $archivedCounts)) {
                $municipalCount -= FarmcMembership_Model::where('comp_mem', 'Municipal')->where('status', 'ARCHIVED')->count();
            }
            if (in_array('Fishworker', $archivedCounts)) {
                $fishworkerCount -= FarmcMembership_Model::where('comp_mem', 'Fishworker')->where('status', 'ARCHIVED')->count();
            }
            if (in_array('Cultural Community (IPs)', $archivedCounts)) {
                $culturalCount -= FarmcMembership_Model::where('comp_mem', 'Cultural Community (IPs)')->where('status', 'ARCHIVED')->count();
            }
            if (in_array('Commercial', $archivedCounts)) {
                $commercialCount -= FarmcMembership_Model::where('comp_mem', 'Commercial')->where('status', 'ARCHIVED')->count();
            }
            if (in_array('Women/Youth', $archivedCounts)) {
                $womenYouthCount -= FarmcMembership_Model::where('comp_mem', 'Women/Youth')->where('status', 'ARCHIVED')->count();
            }
        }

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

        // Check if any of the counts have the 'ARCHIVED' status and exclude them
        if (FarmcMembership_Model::where('status', 'ARCHIVED')->exists()) {
            $archivedgenCounts = FarmcMembership_Model::where('status', 'ARCHIVED')->whereIn('gender', ['Male', 'Female'])->pluck('gender')->toArray();
            if (in_array('Male', $archivedgenCounts)) {
                $gen_male -= FarmcMembership_Model::where('gender', 'Male')->where('status', 'ARCHIVED')->count();
            }
            if (in_array('Female', $archivedgenCounts)) {
                $gen_female -= FarmcMembership_Model::where('gender', 'Female')->where('status', 'ARCHIVED')->count();
            }
            if (in_array('Others', $archivedgenCounts)) {
                $gen_other -= FarmcMembership_Model::where('gender', 'Others')->where('status', 'ARCHIVED')->count();
            }
        }

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

    public function display_membership_edit($id)
    {
        $edit_mem = FarmcMembership_Model::where('id', $id)->get();

        return view('FARMC_Membership.edit_membership', compact('edit_mem'));
    }


    public function display_all_members()
    {
        // $all_mem = FarmcMembership_Model::where('id', $id)->where('status', '!=', 'ARCHIVED')->get();
        // $all_mem = FarmcMembership_Model::select('id')->where('status', '!=', 'ARCHIVED')->get();

        $all_mem = FarmcMembership_Model::whereNull('status')->get();


        return view('FARMC_Membership.view_all_membership', compact('all_mem'));
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

    //==========================================================================================================================================||
    //================================================== E D I T I N G  O F  D A T A ===============================================================||


    public function editFARMC_Membership(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'barangay' => 'nullable|string',
            'city' => 'nullable|string',
            'province' => 'nullable|string',
            'landline_no' => 'nullable|string',
            'mobile_no' => 'nullable|string',
            'email' => 'nullable|string',
            'civil_status' => 'nullable|in:Single,Married,Widow/Widower,Separated',
            'gender' => 'nullable|in:Male,Female,Others',
            'birthdate' => 'nullable|string',
            'age' => 'nullable|string',
            'birthplace_municipality' => 'nullable|string',
            'birthplace_province' => 'nullable|string',
            'fourps' => 'nullable|in:Yes,No',
            'pwd' => 'nullable|in:Yes,No',
            'pwd_yes' => 'nullable|string',
            'IP' => 'nullable|in:Yes,No',
            'IP_yes' => 'nullable|string',
            'name_spouse' => 'nullable|string',
            'occupation' => 'nullable|string',
            'religion' => 'nullable|in:Islam,Christian',
            'religion_christ' => 'nullable|string',
            'dependent_male' => 'nullable|integer',
            'dependent_female' => 'nullable|integer',
            'dependent_others' => 'nullable|integer',
            'educational_attainment' => 'nullable|in:Primary,Secondary,Vocational,Tertiary,Tesda',
            'tertiary' => 'nullable|string',
            'tesda' => 'nullable|string',
            'other_source' => 'nullable|string',
            'other_source_other' => 'nullable|string',
            'farmc_name' => 'nullable|string',
            'farmc_add' => 'nullable|string',
            'mfarmc_off' => 'nullable|in:Yes,No',
            'mfarmc_off_yes' => 'nullable|string',
            'inc_officer1' => 'nullable|string',
            'inc_officer2' => 'nullable|string',
            'inc_member1' => 'nullable|string',
            'inc_member2' => 'nullable|string',
            'farmc_rep' => 'nullable|in:Provincial Fisherfolk Representative,Regional Fisherfolk Representative',
            'sect' => 'nullable|in:Fisherfolk/Fishworker,Commercial Operator,Women Sector,Youth Sector,Private Sector,NGO Representative,Cultural Community (IPs),Other',
            'sect_other' => 'nullable|string',
            'LGU_rep' => 'nullable|in:SB Committee on Fisheries,Municipal/City Planning Office,Municipal/City Development Council,Municipal/City Agriculture Office,Other',
            'LGU_rep_other' => 'nullable|string',
            'org_mem_name' => 'nullable|string',
            'add_acc' => 'nullable|string',
            'comp_mem' => 'nullable|in:Municipal,Fishworker,Cultural Community (IPs),Commercial,Women/Youth',
            'reg_ass' => 'nullable|in:Yes,No',
            'reg_ass_yes' => 'nullable|string',
            'lgu_accre' => 'nullable|in:Yes,No',
            'reg_no' => 'nullable|string',
            'date' => 'nullable|date',
            'officer_ass' => 'nullable|in:Yes,No,Member Only',
            'position' => 'nullable|string',
            'involvement_mdo' => 'nullable|in:Provincial Fisherfolk Representative,Regional Fisherfolk Director,National Fisherfolk Director',
            'year1' => 'nullable|string',
            'year2' => 'nullable|string',
            'year3' => 'nullable|string',
            'photo' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

        ], [
            'photo.max' => 'The photo may not be greater than 5MB.',
        ]);


        $farmc_mem = FarmcMembership_Model::where('id', $id)->firstOrFail();

        // Delete existing files if new files are uploaded
        if ($request->hasFile('photo')) {
            if ($farmc_mem->photo) {
                Storage::delete($farmc_mem->photo);
            }
            $photoPath = $request->file('photo')->store('storage');
            $farmc_mem->photo = $photoPath;
        }


        // Update other fields
        $farmc_mem->name = $validatedData['name'] ?? null;
        $farmc_mem->barangay = $validatedData['barangay'] ?? null;
        $farmc_mem->city = $validatedData['city'] ?? null;
        $farmc_mem->province = $validatedData['province'] ?? null;
        $farmc_mem->landline_no = $validatedData['landline_no'] ?? null;
        $farmc_mem->mobile_no = $validatedData['mobile_no'] ?? null;
        $farmc_mem->email = $validatedData['email'] ?? null;
        $farmc_mem->civil_status = $validatedData['civil_status'] ?? null;
        $farmc_mem->gender = $validatedData['gender'] ?? null;
        $farmc_mem->birthdate = $validatedData['birthdate'] ?? null;
        $farmc_mem->age = $validatedData['age'] ?? null;
        $farmc_mem->birthplace_municipality = $validatedData['birthplace_municipality'] ?? null;
        $farmc_mem->birthplace_province = $validatedData['birthplace_province'] ?? null;
        $farmc_mem->fourps = $validatedData['fourps'] ?? null;
        $farmc_mem->pwd = $validatedData['pwd'] ?? null;
        $farmc_mem->pwd_yes = $validatedData['pwd_yes'] ?? null;
        $farmc_mem->IP = $validatedData['IP'] ?? null;
        $farmc_mem->IP_yes = $validatedData['IP_yes'] ?? null;
        $farmc_mem->name_spouse = $validatedData['name_spouse'] ?? null;
        $farmc_mem->occupation = $validatedData['occupation'] ?? null;
        $farmc_mem->religion = $validatedData['religion'] ?? null;
        $farmc_mem->religion_christ = $validatedData['religion_christ'] ?? null;
        $farmc_mem->dependent_male = $validatedData['dependent_male'] ?? null;
        $farmc_mem->dependent_female = $validatedData['dependent_female'] ?? null;
        $farmc_mem->dependent_others = $validatedData['dependent_others'] ?? null;
        $farmc_mem->educational_attainment = $validatedData['educational_attainment'] ?? null;
        $farmc_mem->tertiary = $validatedData['tertiary'] ?? null;
        $farmc_mem->tesda = $validatedData['tesda'] ?? null;
        $farmc_mem->other_source = $validatedData['other_source'] ?? null;
        $farmc_mem->other_source_other = $validatedData['other_source_other'] ?? null;

        $farmc_mem->farmc_name = $validatedData['farmc_name'] ?? null;
        $farmc_mem->farmc_add = $validatedData['farmc_add'] ?? null;
        $farmc_mem->mfarmc_off = $validatedData['mfarmc_off'] ?? null;
        $farmc_mem->mfarmc_off_yes = $validatedData['mfarmc_off_yes'] ?? null;
        $farmc_mem->inc_officer1 = $validatedData['inc_officer1'] ?? null;
        $farmc_mem->inc_officer2 = $validatedData['inc_officer2'] ?? null;
        $farmc_mem->inc_member1 = $validatedData['inc_member1'] ?? null;
        $farmc_mem->inc_member2 = $validatedData['inc_member2'] ?? null;
        $farmc_mem->farmc_rep = $validatedData['farmc_rep'] ?? null;
        $farmc_mem->sect = $validatedData['sect'] ?? null;
        $farmc_mem->sect_other = $validatedData['sect_other'] ?? null;
        $farmc_mem->farmc_rep = $validatedData['farmc_rep'] ?? null;
        $farmc_mem->LGU_rep = $validatedData['LGU_rep'] ?? null;
        $farmc_mem->LGU_rep_other = $validatedData['LGU_rep_other'] ?? null;

        $farmc_mem->org_mem_name = $validatedData['org_mem_name'] ?? null;
        $farmc_mem->add_acc = $validatedData['add_acc'] ?? null;
        $farmc_mem->comp_mem = $validatedData['comp_mem'] ?? null;
        $farmc_mem->reg_ass = $validatedData['reg_ass'] ?? null;
        $farmc_mem->reg_ass_yes = $validatedData['reg_ass_yes'] ?? null;
        $farmc_mem->lgu_accre = $validatedData['lgu_accre'] ?? null;
        $farmc_mem->reg_no = $validatedData['reg_no'] ?? null;
        $farmc_mem->date = $validatedData['date'] ?? null;
        $farmc_mem->officer_ass = $validatedData['officer_ass'] ?? null;
        $farmc_mem->position = $validatedData['position'] ?? null;
        $farmc_mem->involvement_mdo = $validatedData['involvement_mdo'] ?? null;
        $farmc_mem->year1 = $validatedData['year1'] ?? null;
        $farmc_mem->year2 = $validatedData['year2'] ?? null;
        $farmc_mem->year3 = $validatedData['year3'] ?? null;
        $farmc_mem->photo = $validatedData['photo'] ?? null;

        // Save the updated record
        $farmc_mem->save();

        // Check if any changes were made and redirect accordingly
        if ($farmc_mem->wasChanged()) {
            return redirect('/FARMCViewform/' . $id)->with('success', 'FARMC Membership updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update. No changes were made.');
        }
    }
}
