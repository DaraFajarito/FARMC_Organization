<?php

namespace App\Http\Controllers;

use App\Models\FDP_PersonalInfo_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

        if ($FDP) {
            return redirect('/FDP_orgMem/' . $FDP->id)->with('success', 'Data added successfully.');
        } else {
            return redirect('/FDP_orgMem/' . $FDP->id)->with('failed', 'Failed to add data.');
        }
    }


    //==========================================================================================================================================||
    //================================================== C O U N T  O F  D A T A ===============================================================||
    //==========================================================================================================================================||

    public function moveToNFD_archived($id)
    {
        $nfd_archived = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->find($id);

        if ($nfd_archived) {
            $nfd_archived->status = 'ARCHIVED';
            $nfd_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found or involvement is not National Fisherfolk Director.');
        }
    }

    public function display_NFD_archived()
    {
        $nfd_archived = FDP_PersonalInfo_Model::where('status', 'ARCHIVED')
            ->where('involvement_mdo', 'National Fisherfolk Director')
            ->get();

        return view('Fisherfolk_Directors_Program.National_FD.archivedNFD', compact('nfd_archived'));
    }
    public function display_NFD()
    {
        //DISPLAYING TABLE
        $data = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')->get();


        $NFDMemCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->where(function ($query) {
                $query->whereNotNull('fam_name')
                    ->orWhereNotNull('given_name')
                    ->orWhereNotNull('mid_name')
                    ->orWhereNotNull('ext');
            })
            ->count();


        $NFDOrgCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count('name_ass');


        $NFDAgeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->whereIn('age', range(0, 18))
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'National Fisherfolk Director')
                    ->whereIn('age', range(19, 25))
                    ->where(function ($query) {
                        $query->where('status', '!=', 'ARCHIVED')
                            ->orWhereNull('status');
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'National Fisherfolk Director')
                    ->whereIn('age', range(26, 35))
                    ->where(function ($query) {
                        $query->where('status', '!=', 'ARCHIVED')
                            ->orWhereNull('status');
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'National Fisherfolk Director')
                    ->whereIn('age', range(36, 50))
                    ->where(function ($query) {
                        $query->where('status', '!=', 'ARCHIVED')
                            ->orWhereNull('status');
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'National Fisherfolk Director')
                    ->where('age', '>', 50)
                    ->where(function ($query) {
                        $query->where('status', '!=', 'ARCHIVED')
                            ->orWhereNull('status');
                    });
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



        $NFDmaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->where('gender', 'Male')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $NFDfemaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->where('gender', 'Female')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $NFDothersCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->where('gender', 'Others')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();


        $GenderCount = [
            'Male' => $NFDmaleCount,
            'Female' => $NFDfemaleCount,
            'Others' => $NFDothersCount,
        ];

        $labelsgen = array_keys($GenderCount);
        $datagen = array_values($GenderCount);


        $municipalCount = FDP_PersonalInfo_Model::where('comp_mem', 'Municipal')
            ->where('involvement_mdo', 'National Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $fishworkerCount = FDP_PersonalInfo_Model::where('comp_mem', 'Fishworker')
            ->where('involvement_mdo', 'National Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $commercialCount = FDP_PersonalInfo_Model::where('comp_mem', 'Commercial')
            ->where('involvement_mdo', 'National Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $womenYouthCount = FDP_PersonalInfo_Model::where('comp_mem', 'Women/Youth')
            ->where('involvement_mdo', 'National Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $otherCount = FDP_PersonalInfo_Model::where('comp_mem', 'Others')
            ->where('involvement_mdo', 'National Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $memCount = [
            'Municipal' => $municipalCount,
            'Fishworker' => $fishworkerCount,
            'Commercial' => $commercialCount,
            'Women / Youth' => $womenYouthCount,
            'Others' => $otherCount
        ];

        $labelscomp = array_keys($memCount);
        $datacomp = array_values($memCount);

        // Prepare data for the chart
        $cityCounts = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
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

        $associationCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->where('type_of_org', 'Association')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $cooperativeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'National Fisherfolk Director')
            ->where('type_of_org', 'Cooperative')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();


        $assCount = [
            'ASSOCIATION' => $associationCount,
            'COOPERATIVE' => $cooperativeCount,
        ];

        $data_ass = array_values($assCount);



        return view('Fisherfolk_Directors_Program.National_FD.nationalFD', compact('data', 'NFDMemCount', 'NFDOrgCount', 'labelsage', 'dataage', 'labelsgen', 'datagen', 'labelscomp', 'datacomp', 'labelsAdd', 'dataAdd', 'backgroundColors', 'data_ass'));
    }

    // ------------------------------------------------------------------------------------//
    // ----------------------PROVINCIAL FISHERFOLK REPRESENTATIVE -------------------------//
    // -----------------------------------------------------------------------------------//

    public function moveToPFR_archived($id)
    {
        $pfr_archived = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->find($id);

        if ($pfr_archived) {
            $pfr_archived->status = 'ARCHIVED';
            $pfr_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found or involvement is not Provincial Fisherfolk Representative.');
        }
    }

    public function display_PFR_archived()
    {
        $pfr_archived = FDP_PersonalInfo_Model::where('status', 'ARCHIVED')
            ->where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->get();

        return view('Fisherfolk_Directors_Program.Provincial_FR.archivedPFR', compact('pfr_archived'));
    }

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
            })
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();


        $PFROrgCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count('name_ass');


        $PFRDAgeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->whereIn('age', range(0, 18))
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Provincial Fisherfolk Representative')
                    ->whereIn('age', range(19, 25))
                    ->where(function ($query) {
                        $query->whereNull('status')
                            ->orWhere('status', '!=', 'ARCHIVED');
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Provincial Fisherfolk Representative')
                    ->whereIn('age', range(26, 35))
                    ->where(function ($query) {
                        $query->whereNull('status')
                            ->orWhere('status', '!=', 'ARCHIVED');
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Provincial Fisherfolk Representative')
                    ->whereIn('age', range(36, 50))
                    ->where(function ($query) {
                        $query->whereNull('status')
                            ->orWhere('status', '!=', 'ARCHIVED');
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Provincial Fisherfolk Representative')
                    ->where('age', '>', 50)
                    ->where(function ($query) {
                        $query->whereNull('status')
                            ->orWhere('status', '!=', 'ARCHIVED');
                    });
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



        $PFRmaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->where('gender', 'Male')
            ->count();

        $PFRfemaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->where('gender', 'Female')
            ->count();

        $PFRothersCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->where('gender', 'Others')
            ->count();


        $GenderCount = [
            'Male' => $PFRmaleCount,
            'Female' => $PFRfemaleCount,
            'Others' => $PFRothersCount,
        ];

        $labelsgen = array_keys($GenderCount);
        $datagen = array_values($GenderCount);


        $municipalCount = FDP_PersonalInfo_Model::where('comp_mem', 'Municipal')
            ->where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $fishworkerCount = FDP_PersonalInfo_Model::where('comp_mem', 'Fishworker')
            ->where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $commercialCount = FDP_PersonalInfo_Model::where('comp_mem', 'Commercial')
            ->where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $womenYouthCount = FDP_PersonalInfo_Model::where('comp_mem', 'Women/Youth')
            ->where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $otherCount = FDP_PersonalInfo_Model::where('comp_mem', 'Others')
            ->where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $memCount = [
            'Municipal' => $municipalCount,
            'Fishworker' => $fishworkerCount,
            'Commercial' => $commercialCount,
            'Women / Youth' => $womenYouthCount,
            'Others' => $otherCount
        ];

        $labelscomp = array_keys($memCount);
        $datacomp = array_values($memCount);



        // Prepare data for the chart
        $cityCounts = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->whereNotNull('add_city')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
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

        $associationCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where('type_of_org', 'Association')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $cooperativeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Provincial Fisherfolk Representative')
            ->where('type_of_org', 'Cooperative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();


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

    public function moveToRFR_archived($id)
    {
        $rfr_archived = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->find($id);

        if ($rfr_archived) {
            $rfr_archived->status = 'ARCHIVED';
            $rfr_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found or involvement is not Regional Fisherfolk Representative.');
        }
    }

    public function display_RFR_archived()
    {
        $rfr_archived = FDP_PersonalInfo_Model::where('status', 'ARCHIVED')
            ->where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->get();

        return view('Fisherfolk_Directors_Program.Regional_FR.archivedRFR', compact('rfr_archived'));
    }


    public function display_RFR()
    {
        //DISPLAYING TABLE
        $data = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')->get();

        $RFRMemCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->where(function ($query) {
                $query->whereNotNull('fam_name')
                    ->orWhereNotNull('given_name')
                    ->orWhereNotNull('mid_name')
                    ->orWhereNotNull('ext');
            })
            ->count();



        $RFROrgCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '=!', 'ARCHIVED');
            })
            ->count('name_ass');

        $RFRDAgeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->whereIn('age', range(0, 18))
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Representative')
                    ->whereIn('age', range(19, 25))
                    ->where(function ($query) {
                        $query->whereNull('status')
                            ->orWhere('status', '!=', 'ARCHIVED');
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Representative')
                    ->whereIn('age', range(26, 35))
                    ->where(function ($query) {
                        $query->whereNull('status')
                            ->orWhere('status', '!=', 'ARCHIVED');
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Representative')
                    ->whereIn('age', range(36, 50))
                    ->where(function ($query) {
                        $query->whereNull('status')
                            ->orWhere('status', '!=', 'ARCHIVED');
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Representative')
                    ->where('age', '>', 50)
                    ->where(function ($query) {
                        $query->whereNull('status')
                            ->orWhere('status', '!=', 'ARCHIVED');
                    });
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



        $RFRmaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where('gender', 'Male')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $RFRfemaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where('gender', 'Female')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $RFRothersCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where('gender', 'Others')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();


        $GenderCount = [
            'Male' => $RFRmaleCount,
            'Female' => $RFRfemaleCount,
            'Others' => $RFRothersCount,
        ];

        $labelsgen = array_keys($GenderCount);
        $datagen = array_values($GenderCount);

        $municipalCount = FDP_PersonalInfo_Model::where('comp_mem', 'Municipal')
            ->where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $fishworkerCount = FDP_PersonalInfo_Model::where('comp_mem', 'Fishworker')
            ->where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $commercialCount = FDP_PersonalInfo_Model::where('comp_mem', 'Commercial')
            ->where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $womenYouthCount = FDP_PersonalInfo_Model::where('comp_mem', 'Women/Youth')
            ->where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $otherCount = FDP_PersonalInfo_Model::where('comp_mem', 'Others')
            ->where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();


        $memCount = [
            'Municipal' => $municipalCount,
            'Fishworker' => $fishworkerCount,
            'Commercial' => $commercialCount,
            'Women / Youth' => $womenYouthCount,
            'Others' => $otherCount
        ];

        $labelscomp = array_keys($memCount);
        $datacomp = array_values($memCount);



        // Prepare data for the chart
        $cityCounts = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->whereNotNull('add_city')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
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

        $associationCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where('type_of_org', 'Association')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();

        $cooperativeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Representative')
            ->where('type_of_org', 'Cooperative')
            ->where(function ($query) {
                $query->whereNull('status')
                    ->orWhere('status', '!=', 'ARCHIVED');
            })
            ->count();


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

    public function moveToRFD_archived($id)
    {
        $rfd_archived = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->find($id);

        if ($rfd_archived) {
            $rfd_archived->status = 'ARCHIVED';
            $rfd_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found or involvement is not Regional Fisherfolk Director.');
        }
    }

    public function display_RFD_archived()
    {
        $rfd_archived = FDP_PersonalInfo_Model::where('status', 'ARCHIVED')
            ->where('involvement_mdo', 'Regional Fisherfolk Director')
            ->get();

        return view('Fisherfolk_Directors_Program.Regional_FD.archivedRFD', compact('rfd_archived'));
    }

    public function display_RFD()
    {
        //DISPLAYING TABLE
        $data = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')->get();


        $RFDMemCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->where(function ($query) {
                $query->whereNotNull('fam_name')
                    ->orWhereNotNull('given_name')
                    ->orWhereNotNull('mid_name')
                    ->orWhereNotNull('ext');
            })
            ->count();

        $RFDOrgCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count('name_ass');


        $RFDDAgeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->whereIn('age', range(0, 18))
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Director')
                    ->where(function ($query) {
                        $query->whereIn('age', range(19, 25))
                            ->where(function ($query) {
                                $query->where('status', '!=', 'ARCHIVED')
                                    ->orWhereNull('status');
                            });
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Director')
                    ->where(function ($query) {
                        $query->whereIn('age', range(26, 35))
                            ->where(function ($query) {
                                $query->where('status', '!=', 'ARCHIVED')
                                    ->orWhereNull('status');
                            });
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Director')
                    ->where(function ($query) {
                        $query->whereIn('age', range(36, 50))
                            ->where(function ($query) {
                                $query->where('status', '!=', 'ARCHIVED')
                                    ->orWhereNull('status');
                            });
                    });
            })
            ->orWhere(function ($query) {
                $query->where('involvement_mdo', 'Regional Fisherfolk Director')
                    ->where('age', '>', 50)
                    ->where(function ($query) {
                        $query->where('status', '!=', 'ARCHIVED')
                            ->orWhereNull('status');
                    });
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



        $RFDmaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where('gender', 'Male')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $RFDfemaleCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where('gender', 'Female')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $RFDothersCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where('gender', 'Others')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();


        $GenderCount = [
            'Male' => $RFDmaleCount,
            'Female' => $RFDfemaleCount,
            'Others' => $RFDothersCount,
        ];

        $labelsgen = array_keys($GenderCount);
        $datagen = array_values($GenderCount);


        $municipalCount = FDP_PersonalInfo_Model::where('comp_mem', 'Municipal')
            ->where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $fishworkerCount = FDP_PersonalInfo_Model::where('comp_mem', 'Fishworker')
            ->where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $commercialCount = FDP_PersonalInfo_Model::where('comp_mem', 'Commercial')
            ->where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $womenYouthCount = FDP_PersonalInfo_Model::where('comp_mem', 'Women/Youth')
            ->where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $otherCount = FDP_PersonalInfo_Model::where('comp_mem', 'Others')
            ->where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();


        $memCount = [
            'Municipal' => $municipalCount,
            'Fishworker' => $fishworkerCount,
            'Commercial' => $commercialCount,
            'Women / Youth' => $womenYouthCount,
            'Others' => $otherCount
        ];

        $labelscomp = array_keys($memCount);
        $datacomp = array_values($memCount);



        // Prepare data for the chart
        $cityCounts = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
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

        $associationCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where('type_of_org', 'Association')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $cooperativeCount = FDP_PersonalInfo_Model::where('involvement_mdo', 'Regional Fisherfolk Director')
            ->where('type_of_org', 'Cooperative')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();


        $assCount = [
            'ASSOCIATION' => $associationCount,
            'COOPERATIVE' => $cooperativeCount,
        ];

        $data_ass = array_values($assCount);



        return view('Fisherfolk_Directors_Program.Regional_FD.regionalFD', compact('data', 'RFDMemCount', 'RFDOrgCount', 'labelsage', 'dataage', 'labelsgen', 'datagen', 'labelscomp', 'datacomp', 'labelsAdd', 'dataAdd', 'backgroundColors', 'data_ass'));
    }



    // ------------------------------------------------------------------//
    // ------------------DISPLAYING DATA IN VIEWFORM---------------------//
    // ------------------------------------------------------------------//


    public function display_rfdp_Viewform($id)
    {
        $rfdp = FDP_PersonalInfo_Model::where('id', $id)->get();

        return view('Fisherfolk_Directors_Program.RFDP_Form.RFDP_Viewform', compact('rfdp'));
    }

    public function display_rfdp_edit($id)
    {
        $edit_rfdp = FDP_PersonalInfo_Model::where('id', $id)->get();

        return view('Fisherfolk_Directors_Program.RFDP_Form.RFDP_Editform', compact('edit_rfdp'));
    }


    // ------------------------------------------------------------------//
    // ------------------------E D I T I N G  D A T A---------------------------//
    // ------------------------------------------------------------------//


    public function edit_RFDP(Request $request, $id)
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
            'fourps' => 'nullable|in:Yes,No',
            'cul_af' => 'nullable|in:Yes,No',
            'cul_af_yes' => 'nullable|string',
            'birthplace_municipality' => 'nullable|string',
            'birthplace_province' => 'nullable|string',
            'name_spouse' => 'nullable|string',
            'occupation' => 'nullable|string',
            'dependent_male' => 'nullable|integer',
            'dependent_female' => 'nullable|integer',
            'dependent_others' => 'nullable|integer',
            'educational_attainment' => 'nullable|in:Primary,Secondary,Vocational,Tertiary,Tesda,Others',
            'tertiary' => 'nullable|string',
            'tesda' => 'nullable|string',
            'others' => 'nullable|string',

            'name_ass' => 'nullable|string',
            'add_ass' => 'nullable|string',
            'officer_ass' => 'nullable|in:Yes,No',
            'officer_ass_yes' => 'nullable|string',
            'reg_agency' => 'nullable|in:SEC,DOLE,CDA,Others',
            'reg_agency_others' => 'nullable|string',
            'reg_info_no' => 'nullable|string',
            'reg_info_date' => 'nullable|string',
            'comp_mem' => 'nullable|in:Municipal,Fishworker,Commercial,Women/Youth,Others',
            'comp_mem_others' => 'nullable|string',
            'type_of_org' => 'nullable|string',

            'name_FARMC' => 'nullable|string',
            'add_FARMC' => 'nullable|string',
            'officer_MFARMC' => 'nullable|string',
            'officer_MFARMC_yes' => 'nullable|string',
            'as_member' => 'nullable|string',
            'as_officer' => 'nullable|string',
            'sector_rep' => 'nullable|in:Fisherfolk/Fishworker,Commercial Operator,Women Sector,Youth Sector,Private Sector,NGO Representative,Cultural Community (IPs),Other',
            'sector_re_others' => 'nullable|string',
            'involvement_mdo' => 'nullable|in:Provincial Fisherfolk Representative,Regional Fisherfolk Representative,Regional Fisherfolk Director,National Fisherfolk Director',
            'year1' => 'nullable|string',
            'year2' => 'nullable|string',
            'year3' => 'nullable|string',
            'year4' => 'nullable|string',
            'photo' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

        ], [
            'photo.max' => 'The photo may not be greater than 5MB.',
        ]);


        $rfdp = FDP_PersonalInfo_Model::where('id', $id)->firstOrFail();

        // Delete existing files if new files are uploaded
        if ($request->hasFile('photo')) {
            if ($rfdp->photo) {
                Storage::delete($rfdp->photo);
            }
            $photoPath = $request->file('photo')->store('storage');
            $rfdp->photo = $photoPath;
        }


        // Update other fields
        $rfdp->fam_name = $validatedData['fam_name'] ?? null;
        $rfdp->given_name = $validatedData['given_name'] ?? null;
        $rfdp->mid_name = $validatedData['mid_name'] ?? null;
        $rfdp->ext = $validatedData['ext'] ?? null;
        $rfdp->add_barangay = $validatedData['add_barangay'] ?? null;
        $rfdp->add_city = $validatedData['add_city'] ?? null;
        $rfdp->add_province = $validatedData['add_province'] ?? null;
        $rfdp->civil_status = $validatedData['civil_status'] ?? null;
        $rfdp->gender = $validatedData['gender'] ?? null;
        $rfdp->birthdate = $validatedData['birthdate'] ?? null;
        $rfdp->age = $validatedData['age'] ?? null;
        $rfdp->fourps = $validatedData['fourps'] ?? null;
        $rfdp->cul_af = $validatedData['cul_af'] ?? null;
        $rfdp->cul_af_yes = $validatedData['cul_af_yes'] ?? null;
        $rfdp->birthplace_municipality = $validatedData['birthplace_municipality'] ?? null;
        $rfdp->birthplace_province = $validatedData['birthplace_province'] ?? null;

        $rfdp->name_spouse = $validatedData['name_spouse'] ?? null;
        $rfdp->occupation = $validatedData['occupation'] ?? null;
        $rfdp->dependent_male = $validatedData['dependent_male'] ?? null;
        $rfdp->dependent_female = $validatedData['dependent_female'] ?? null;
        $rfdp->dependent_others = $validatedData['dependent_others'] ?? null;
        $rfdp->educational_attainment = $validatedData['educational_attainment'] ?? null;
        $rfdp->tertiary = $validatedData['tertiary'] ?? null;
        $rfdp->tesda = $validatedData['tesda'] ?? null;
        $rfdp->others = $validatedData['others'] ?? null;

        $rfdp->name_ass = $validatedData['name_ass'] ?? null;
        $rfdp->add_ass = $validatedData['add_ass'] ?? null;
        $rfdp->officer_ass = $validatedData['officer_ass'] ?? null;
        $rfdp->officer_ass_yes = $validatedData['officer_ass_yes'] ?? null;
        $rfdp->reg_agency = $validatedData['reg_agency'] ?? null;
        $rfdp->reg_agency_others = $validatedData['reg_agency_others'] ?? null;
        $rfdp->reg_info_no = $validatedData['reg_info_no'] ?? null;
        $rfdp->reg_info_date = $validatedData['reg_info_date'] ?? null;
        $rfdp->comp_mem = $validatedData['comp_mem'] ?? null;
        $rfdp->comp_mem_others = $validatedData['comp_mem_others'] ?? null;
        $rfdp->type_of_org = $validatedData['type_of_org'] ?? null;
        $rfdp->name_FARMC = $validatedData['name_FARMC'] ?? null;
        $rfdp->add_FARMC = $validatedData['add_FARMC'] ?? null;
        $rfdp->officer_MFARMC = $validatedData['officer_MFARMC'] ?? null;
        $rfdp->officer_MFARMC_yes = $validatedData['officer_MFARMC_yes'] ?? null;
        $rfdp->as_member = $validatedData['as_member'] ?? null;

        $rfdp->as_officer = $validatedData['as_officer'] ?? null;
        $rfdp->sector_rep = $validatedData['sector_rep'] ?? null;
        $rfdp->sector_rep_others = $validatedData['sector_rep_others'] ?? null;
        $rfdp->involvement_mdo = $validatedData['involvement_mdo'] ?? null;
        $rfdp->year1 = $validatedData['year1'] ?? null;
        $rfdp->year2 = $validatedData['year2'] ?? null;
        $rfdp->year3 = $validatedData['year3'] ?? null;
        $rfdp->year4 = $validatedData['year4'] ?? null;
        $rfdp->photo = $validatedData['photo'] ?? null;

        // Save the updated record
        $rfdp->save();

        // Check if any changes were made and redirect accordingly
        if ($rfdp->wasChanged()) {
            return redirect('/rfdp-viewform/' . $rfdp->id)->with('success', 'Data has been updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update. No changes were made.');
        }
    }
}
