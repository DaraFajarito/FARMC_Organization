<?php

namespace App\Http\Controllers;

use App\Models\FDP_PersonalInfo_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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



        // Prepare data for the chart
        $cityCounts = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->whereNotNull('add_city')
            ->select('add_city', DB::raw('count(*) as count'))
            ->groupBy('add_city')
            ->get();

        // Extract city names and counts
        $labelsAdd = $cityCounts->pluck('add_city');
        $dataAdd = $cityCounts->pluck('count');

        // Generate random background colors
        $backgroundColors = [];
        foreach ($labelsAdd as $label) {
            $backgroundColors[] = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }

        // Prepare data for the chart
        $chartData = [
            'labels' => $labelsAdd,
            'datasets' => [
                [
                    'label' => 'City Count',
                    'backgroundColor' => $backgroundColors, // Random colors for bars
                    'data' => $dataAdd,
                ],
            ],
        ];

        $associationCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')->where('type_of_org', 'Association')->count();
        $cooperativeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')->where('type_of_org', 'Cooperative')->count();

        $assCount = [
            'ASSOCIATION' => $associationCount,
            'COOPERATIVE' => $cooperativeCount,
        ];

        $data_ass = array_values($assCount);



        return view('Fisherfolk_Directors_Program.National_FD.nationalFD', compact('data', 'NFDMemCount', 'NFDOrgCount', 'labelsage', 'dataage', 'labelsgen', 'datagen', 'labelscomp', 'datacomp', 'labelsAdd', 'dataAdd', 'backgroundColors', 'data_ass'));
    }

    // ------------------------------------------------------------------//
    // ----------------------PROVINCIAL FISHERFOLK REPRESENTATIVE -------------------------//
    // ------------------------------------------------------------------//

    public function display_PFR()
    {
        //DISPLAYING TABLE
        $data = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')->get();


        $PFRMemCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNotNull('fam_name')
                    ->orWhereNotNull('given_name')
                    ->orWhereNotNull('mid_name')
                    ->orWhereNotNull('ext');
            })->count();


        $PFROrgCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')->count('name_ass');

        $PFRDAgeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->whereIn('age', range(0, 18))
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Provincial Fisherfolk Representative')
                    ->whereIn('age', range(19, 25));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Provincial Fisherfolk Representative')
                    ->whereIn('age', range(26, 35));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Provincial Fisherfolk Representative')
                    ->whereIn('age', range(36, 50));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Provincial Fisherfolk Representative')
                    ->where('age', '>', 50);
            })
            ->get();

        // Count members in each age range
        $ageRanges = [
            '0-18' => $PFRDAgeCount->whereBetween('age', [0, 18])->count(),
            '19-25' => $PFRDAgeCount->whereBetween('age', [19, 25])->count(),
            '26-35' => $PFRDAgeCount->whereBetween('age', [26, 35])->count(),
            '36-50' => $PFRDAgeCount->whereBetween('age', [36, 50])->count(),
            '51+' => $PFRDAgeCount->where('age', '>', 50)->count(),
        ];

        $labelsage = array_keys($ageRanges);
        $dataage = array_values($ageRanges);



        $PFRmaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')->where('gender', 'Male')->count();
        $PFRfemaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')->where('gender', 'Female')->count();
        $PFRothersCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')->where('gender', 'Others')->count();

        $GenderCount = [
            'Male' => $PFRmaleCount,
            'Female' => $PFRfemaleCount,
            'Others' => $PFRothersCount,
        ];

        $labelsgen = array_keys($GenderCount);
        $datagen = array_values($GenderCount);


        $municipalCount = FDP_PersonalInfo_Model::where('comp_mem', 'Municipal')
            ->where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->count();
        $fishworkerCount = FDP_PersonalInfo_Model::where('comp_mem', 'Fishworker')
            ->where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->count();
        $commercialCount = FDP_PersonalInfo_Model::where('comp_mem', 'Commercial')
            ->where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->count();
        $womenYouthCount = FDP_PersonalInfo_Model::where('comp_mem', 'Women/Youth')
            ->where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->count();
        $otherCount = FDP_PersonalInfo_Model::where('comp_mem', 'Others')
            ->where('involvement_mdo', 'Provincial Fisherfolk Representative')
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



        // Prepare data for the chart
        $cityCounts = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->whereNotNull('add_city')
            ->select('add_city', DB::raw('count(*) as count'))
            ->groupBy('add_city')
            ->get();

        // Extract city names and counts
        $labelsAdd = $cityCounts->pluck('add_city');
        $dataAdd = $cityCounts->pluck('count');

        // Generate random background colors
        $backgroundColors = [];
        foreach ($labelsAdd as $label) {
            $backgroundColors[] = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }

        // Prepare data for the chart
        $chartData = [
            'labels' => $labelsAdd,
            'datasets' => [
                [
                    'label' => 'City Count',
                    'backgroundColor' => $backgroundColors, // Random colors for bars
                    'data' => $dataAdd,
                ],
            ],
        ];

        $associationCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')->where('type_of_org', 'Association')->count();
        $cooperativeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')->where('type_of_org', 'Cooperative')->count();

        $assCount = [
            'ASSOCIATION' => $associationCount,
            'COOPERATIVE' => $cooperativeCount,
        ];

        $data_ass = array_values($assCount);



        return view('Fisherfolk_Directors_Program.Provincial_FR.provincialFR', compact('data', 'PFRMemCount', 'PFROrgCount', 'labelsage', 'dataage', 'labelsgen', 'datagen', 'labelscomp', 'datacomp', 'labelsAdd', 'dataAdd', 'backgroundColors', 'data_ass'));
    }

    // ------------------------------------------------------------------//
    // ----------------------REGIONAL FISHERFOLK REPRESENTATIVE-------------------------//
    // ------------------------------------------------------------------//

    public function display_RFR()
    {
        //DISPLAYING TABLE
        $data = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')->get();


        $RFRMemCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNotNull('fam_name')
                    ->orWhereNotNull('given_name')
                    ->orWhereNotNull('mid_name')
                    ->orWhereNotNull('ext');
            })->count();


        $RFROrgCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')->count('name_ass');

        $RFRDAgeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->whereIn('age', range(0, 18))
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Representative')
                    ->whereIn('age', range(19, 25));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Representative')
                    ->whereIn('age', range(26, 35));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Representative')
                    ->whereIn('age', range(36, 50));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Representative')
                    ->where('age', '>', 50);
            })
            ->get();

        // Count members in each age range
        $ageRanges = [
            '0-18' => $RFRDAgeCount->whereBetween('age', [0, 18])->count(),
            '19-25' => $RFRDAgeCount->whereBetween('age', [19, 25])->count(),
            '26-35' => $RFRDAgeCount->whereBetween('age', [26, 35])->count(),
            '36-50' => $RFRDAgeCount->whereBetween('age', [36, 50])->count(),
            '51+' => $RFRDAgeCount->where('age', '>', 50)->count(),
        ];

        $labelsage = array_keys($ageRanges);
        $dataage = array_values($ageRanges);



        $RFRmaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')->where('gender', 'Male')->count();
        $RFRfemaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')->where('gender', 'Female')->count();
        $RFRothersCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')->where('gender', 'Others')->count();

        $GenderCount = [
            'Male' => $RFRmaleCount,
            'Female' => $RFRfemaleCount,
            'Others' => $RFRothersCount,
        ];

        $labelsgen = array_keys($GenderCount);
        $datagen = array_values($GenderCount);


        $municipalCount = FDP_PersonalInfo_Model::where('comp_mem', 'Municipal')
            ->where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->count();
        $fishworkerCount = FDP_PersonalInfo_Model::where('comp_mem', 'Fishworker')
            ->where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->count();
        $commercialCount = FDP_PersonalInfo_Model::where('comp_mem', 'Commercial')
            ->where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->count();
        $womenYouthCount = FDP_PersonalInfo_Model::where('comp_mem', 'Women/Youth')
            ->where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->count();
        $otherCount = FDP_PersonalInfo_Model::where('comp_mem', 'Others')
            ->where('involvement_mdo', 'Regional Fisherfolk Representative')
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



        // Prepare data for the chart
        $cityCounts = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->whereNotNull('add_city')
            ->select('add_city', DB::raw('count(*) as count'))
            ->groupBy('add_city')
            ->get();

        // Extract city names and counts
        $labelsAdd = $cityCounts->pluck('add_city');
        $dataAdd = $cityCounts->pluck('count');

        // Generate random background colors
        $backgroundColors = [];
        foreach ($labelsAdd as $label) {
            $backgroundColors[] = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }

        // Prepare data for the chart
        $chartData = [
            'labels' => $labelsAdd,
            'datasets' => [
                [
                    'label' => 'City Count',
                    'backgroundColor' => $backgroundColors, // Random colors for bars
                    'data' => $dataAdd,
                ],
            ],
        ];

        $associationCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')->where('type_of_org', 'Association')->count();
        $cooperativeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')->where('type_of_org', 'Cooperative')->count();

        $assCount = [
            'ASSOCIATION' => $associationCount,
            'COOPERATIVE' => $cooperativeCount,
        ];

        $data_ass = array_values($assCount);



        return view('Fisherfolk_Directors_Program.Regional_FR.regionalFR', compact('data', 'RFRMemCount', 'RFROrgCount', 'labelsage', 'dataage', 'labelsgen', 'datagen', 'labelscomp', 'datacomp', 'labelsAdd', 'dataAdd', 'backgroundColors', 'data_ass'));
    }




    // ------------------------------------------------------------------//
    // ----------------------REGIONAL FISHERFOLK DIRECTOR-------------------------//
    // ------------------------------------------------------------------//


    public function display_RFD()
    {
        //DISPLAYING TABLE
        $data = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')->get();


        $RFDMemCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where(function ($query) {
                $query->whereNotNull('fam_name')
                    ->orWhereNotNull('given_name')
                    ->orWhereNotNull('mid_name')
                    ->orWhereNotNull('ext');
            })->count();


        $RFDOrgCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')->count('name_ass');

        $RFDDAgeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->whereIn('age', range(0, 18))
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Director')
                    ->whereIn('age', range(19, 25));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Director')
                    ->whereIn('age', range(26, 35));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Director')
                    ->whereIn('age', range(36, 50));
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Director')
                    ->where('age', '>', 50);
            })
            ->get();

        // Count members in each age range
        $ageRanges = [
            '0-18' => $RFDDAgeCount->whereBetween('age', [0, 18])->count(),
            '19-25' => $RFDDAgeCount->whereBetween('age', [19, 25])->count(),
            '26-35' => $RFDDAgeCount->whereBetween('age', [26, 35])->count(),
            '36-50' => $RFDDAgeCount->whereBetween('age', [36, 50])->count(),
            '51+' => $RFDDAgeCount->where('age', '>', 50)->count(),
        ];

        $labelsage = array_keys($ageRanges);
        $dataage = array_values($ageRanges);



        $RFDmaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')->where('gender', 'Male')->count();
        $RFDfemaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')->where('gender', 'Female')->count();
        $RFDothersCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')->where('gender', 'Others')->count();

        $GenderCount = [
            'Male' => $RFDmaleCount,
            'Female' => $RFDfemaleCount,
            'Others' => $RFDothersCount,
        ];

        $labelsgen = array_keys($GenderCount);
        $datagen = array_values($GenderCount);


        $municipalCount = FDP_PersonalInfo_Model::where('comp_mem', 'Municipal')
            ->where('involvement_mdo', 'Regional Fisherfolk Director')
            ->count();
        $fishworkerCount = FDP_PersonalInfo_Model::where('comp_mem', 'Fishworker')
            ->where('involvement_mdo', 'Regional Fisherfolk Director')
            ->count();
        $commercialCount = FDP_PersonalInfo_Model::where('comp_mem', 'Commercial')
            ->where('involvement_mdo', 'Regional Fisherfolk Director')
            ->count();
        $womenYouthCount = FDP_PersonalInfo_Model::where('comp_mem', 'Women/Youth')
            ->where('involvement_mdo', 'Regional Fisherfolk Director')
            ->count();
        $otherCount = FDP_PersonalInfo_Model::where('comp_mem', 'Others')
            ->where('involvement_mdo', 'Regional Fisherfolk Director')
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



        // Prepare data for the chart
        $cityCounts = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->whereNotNull('add_city')
            ->select('add_city', DB::raw('count(*) as count'))
            ->groupBy('add_city')
            ->get();

        // Extract city names and counts
        $labelsAdd = $cityCounts->pluck('add_city');
        $dataAdd = $cityCounts->pluck('count');

        // Generate random background colors
        $backgroundColors = [];
        foreach ($labelsAdd as $label) {
            $backgroundColors[] = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }

        // Prepare data for the chart
        $chartData = [
            'labels' => $labelsAdd,
            'datasets' => [
                [
                    'label' => 'City Count',
                    'backgroundColor' => $backgroundColors, // Random colors for bars
                    'data' => $dataAdd,
                ],
            ],
        ];

        $associationCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')->where('type_of_org', 'Association')->count();
        $cooperativeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')->where('type_of_org', 'Cooperative')->count();

        $assCount = [
            'ASSOCIATION' => $associationCount,
            'COOPERATIVE' => $cooperativeCount,
        ];

        $data_ass = array_values($assCount);



        return view('Fisherfolk_Directors_Program.Regional_FD.regionalFD', compact('data', 'RFDMemCount', 'RFDOrgCount', 'labelsage', 'dataage', 'labelsgen', 'datagen', 'labelscomp', 'datacomp', 'labelsAdd', 'dataAdd', 'backgroundColors', 'data_ass'));
    }


}
