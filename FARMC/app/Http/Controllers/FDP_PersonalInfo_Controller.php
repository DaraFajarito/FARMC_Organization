<?php

namespace App\Http\Controllers;

use App\Models\FDP_PersonalInfo_Model;
use Illuminate\Http\Request;

class FDP_PersonalInfo_Controller extends Controller
{
    public function addFDP_PersonalInfo(Request $request)
    {
        $validatedData = $request->validate([
            'fam_name' => 'nullable|string',
            'given_name' => 'nullable|string',
            'mid_name' => 'nullable|string',
            'ext' => 'nullable|string',
            'add_barangay' => 'nullable|string',
            'add_city' => 'nullable|string',
            'add_province' => 'nullable|string',
            'civil_status' => 'nullable|in:Single,Married,Widow/Widower,Separated',
            'gender' => 'nullable|in:Male,Female,Others',
            'birthdate' => 'nullable|string',
            'age' => 'nullable|string',
            'fourps' => 'nullable|string',
            'cul_af' => 'nullable|string',
            'cul_af_yes' => 'nullable|string',
            'birthplace_municipality' => 'nullable|string',
            'birthplace_province' => 'nullable|string',
            'name_spouse' => 'nullable|string',
            'occupation' => 'nullable|string',
            'dependent_male' => 'nullable|integer',
            'dependent_female' => 'nullable|integer',
            'dependent_others' => 'nullable|integer',
            'educational_attainment' => 'nullable|in:Primary,Secondary,Vocational,Tertiary,Tesda,Others',
            'tesda' => 'nullable|string',
            'tertiary' => 'nullable|string',
            'others' => 'nullable|string',
        ]);

        $FDP = FDP_PersonalInfo_Model::create($validatedData);

        return redirect('/FDP_orgMem/' . $FDP->id);
    }

    public function displayFDP_orgMem($id)
    {

        $data1 = FDP_PersonalInfo_Model::where('id', $id)->first();

        return view('Fisherfolk_Directors_Program.RFDP_Form.RFDP_Org_Mem', compact('data1'));
    }

    public function addFDP_orgMem(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name_ass' => 'nullable|string',
            'add_ass' => 'nullable|string',
            'officer_ass' => 'nullable|string',
            'officer_ass_yes' => 'nullable|string',
            'reg_agency' => 'nullable|in:SEC,DOLE,CDA,Others',
            'reg_agency_others' => 'nullable|string',
            'reg_info_no' => 'nullable|string',
            'reg_info_date' => 'nullable|string',
            'comp_mem' => 'nullable|string',
            'comp_mem_others' => 'nullable|string',
            'type_of_org' => 'nullable|string',
            'name_FARMC' => 'nullable|string',
            'add_FARMC' => 'nullable|string',
            'officer_MFARMC' => 'nullable|string',
            'officer_MFARMC_yes' => 'nullable|string',
            'as_member' => 'nullable|string',
            'as_officer' => 'nullable|string',
            'sector_rep' => 'nullable|string',
            'sector_rep_others' => 'nullable|string',
            'involvement_mdo' => 'nullable|string',
            'year1' => 'nullable|string',
            'year2' => 'nullable|string',
            'year3' => 'nullable|string',
            'year4' => 'nullable|string',
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
        $FDP = FDP_PersonalInfo_Model::find($id);

        if (!$FDP) {
            return response()->json(['message' => 'FDP not found'], 404);
        }

        $FDP->update($validatedData);

        return redirect('/FDP_orgMem/' . $FDP->id);
    }


    //==========================================================================================================================================||
    //================================================== C O U N T  O F  D A T A ===============================================================||
    //==========================================================================================================================================||

    public function display_NFD()
    {
        //DISPLAYING TABLE
        $data = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')->get();


        $NFDMemCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->where(function ($query) {
                $query->whereNotNull('fam_name')
                    ->orWhereNotNull('given_name')
                    ->orWhereNotNull('mid_name')
                    ->orWhereNotNull('ext');
            })->count();


        $NFDOrgCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')->count('name_ass');

        $NFDAgeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->whereIn('age', range(0, 18))
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'National Fisherfolk Director')
                    ->whereIn('age', range(19, 25));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'National Fisherfolk Director')
                    ->whereIn('age', range(26, 35));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'National Fisherfolk Director')
                    ->whereIn('age', range(36, 50));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'National Fisherfolk Director')
                    ->where('age', '>', 50);
            })
            ->get();

        // Count members in each age range
        $ageRanges = [
            '0-18' => $NFDAgeCount->whereBetween('age', [0, 18])->count(),
            '19-25' => $NFDAgeCount->whereBetween('age', [19, 25])->count(),
            '26-35' => $NFDAgeCount->whereBetween('age', [26, 35])->count(),
            '36-50' => $NFDAgeCount->whereBetween('age', [36, 50])->count(),
            '51+' => $NFDAgeCount->where('age', '>', 50)->count(),
        ];

        $labelsage = array_keys($ageRanges);
        $dataage = array_values($ageRanges);



        $NFDmaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')->where('gender', 'Male')->count();
        $NFDfemaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')->where('gender', 'Female')->count();
        $NFDothersCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')->where('gender', 'Others')->count();

        $GenderCount = [
            'Male' => $NFDmaleCount,
            'Female' => $NFDfemaleCount,
            'Others' => $NFDothersCount,
        ];

        $labelsgen = array_keys($GenderCount);
        $datagen = array_values($GenderCount);


        $municipalCount = FDP_PersonalInfo_Model::where('comp_mem', 'Municipal')
            ->where('involvement_mdo', 'National Fisherfolk Director')
            ->count();
        $fishworkerCount = FDP_PersonalInfo_Model::where('comp_mem', 'Fishworker')
            ->where('involvement_mdo', 'National Fisherfolk Director')
            ->count();
        $commercialCount = FDP_PersonalInfo_Model::where('comp_mem', 'Commercial')
            ->where('involvement_mdo', 'National Fisherfolk Director')
            ->count();
        $womenYouthCount = FDP_PersonalInfo_Model::where('comp_mem', 'Women/Youth')
            ->where('involvement_mdo', 'National Fisherfolk Director')
            ->count();
        $otherCount = FDP_PersonalInfo_Model::where('comp_mem', 'Others')
            ->where('involvement_mdo', 'National Fisherfolk Director')
            ->count();

        $memCount = [
            'Municipal' => $municipalCount,
            'Fishworker' => $fishworkerCount,
            'Commercial' => $commercialCount,
            'Women / Youth' => $womenYouthCount,
            'Others' => $womenYouthCount
        ];

        $labelscomp = array_keys($memCount);
        $datacomp = array_values($memCount);





        return view('Fisherfolk_Directors_Program.National_FD.nationalFD', compact('data', 'NFDMemCount', 'NFDOrgCount', 'labelsage', 'dataage', 'labelsgen', 'datagen', 'labelscomp', 'datacomp'));
    }
}
