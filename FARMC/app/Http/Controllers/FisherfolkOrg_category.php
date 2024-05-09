<?php

namespace App\Http\Controllers;

use App\Models\FC_GenInfo_Model;
use App\Models\FC_ListofMem_Model;
use App\Models\FC_Membership_Model;
use App\Models\FC_Officers_Commit_Model;
use App\Models\FC_Officers_Model;
use App\Models\FC_OrgStruct_Model;
use App\Models\FisherfolkOrganization_Model;
use App\Models\FO_ListofMem_Model;
use App\Models\FO_OAM_BoardofDir_Model;
use App\Models\FO_OAM_Committees_Model;
use Illuminate\Http\Request;


class FisherfolkOrg_category extends Controller
{


    public function moveToMunAss_archived($id)
    {
        $munass_archived = FisherfolkOrganization_Model::where('sector_rep', 'Municipal')
            ->find($id);

        if ($munass_archived) {
            $munass_archived->status = 'ARCHIVED';
            $munass_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function moveToMunCoop_archived($id)
    {
        $munCoop_archived = FC_GenInfo_Model::where('sector_rep', 'Municipal')
            ->find($id);

        if ($munCoop_archived) {
            $munCoop_archived->status = 'ARCHIVED';
            $munCoop_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function display_Mun_archived()
    {
        $ass_archived = FisherfolkOrganization_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'Municipal')
            ->get();

        $fc_archived = FC_GenInfo_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'Municipal')
            ->get();

        // $archived_entries = $ass_archived->merge($fc_archived);

        return view('Fisherfolk_Organization.Municipal.archivedData', compact('ass_archived', 'fc_archived'));
    }

    public function display_municipal()
    {

        //DISPLAYING TABLE
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Municipal')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'Municipal')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
            ->where('sector_rep', 'Municipal')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
            ->where('sector_rep', 'Municipal')
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



        //COUNT

        $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'Municipal');
        })->count('mem_name');

        $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'Municipal');
        })->count('listmem_name');


        $totalMembersCount = $allfonamesCount + $allfcnamesCount;


        // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:

        $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Municipal');
        })->get();

        $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Municipal');
        })->get();

        // Count members in each age range for FO_ListofMem_Model
        $ageFORanges = [
            '1-18' => $allFOMembers->whereBetween('mem_age', [1, 18])->count(),
            '19-25' => $allFOMembers->whereBetween('mem_age', [19, 25])->count(),
            '26-35' => $allFOMembers->whereBetween('mem_age', [26, 35])->count(),
            '36-50' => $allFOMembers->whereBetween('mem_age', [36, 50])->count(),
            '51+' => $allFOMembers->where('mem_age', '>', 50)->count(),
        ];

        // Count members in each age range for FC_ListofMem_Model
        $ageFCRanges = [
            '1-18' => $allFCMembers->whereBetween('listmem_age', [1, 18])->count(),
            '19-25' => $allFCMembers->whereBetween('listmem_age', [19, 25])->count(),
            '26-35' => $allFCMembers->whereBetween('listmem_age', [26, 35])->count(),
            '36-50' => $allFCMembers->whereBetween('listmem_age', [36, 50])->count(),
            '51+' => $allFCMembers->where('listmem_age', '>', 50)->count(),
        ];

        // Combine the counts from both models
        $ageRanges = [
            '1-18' => $ageFORanges['1-18'] + $ageFCRanges['1-18'],
            '19-25' => $ageFORanges['19-25'] + $ageFCRanges['19-25'],
            '26-35' => $ageFORanges['26-35'] + $ageFCRanges['26-35'],
            '36-50' => $ageFORanges['36-50'] + $ageFCRanges['36-50'],
            '51+' => $ageFORanges['51+'] + $ageFCRanges['51+'],
        ];

        $labelsage = array_keys($ageRanges);
        $dataage = array_values($ageRanges);



        // Count the number of each gender in FC_ListofMem_Model with sector_rep "Municipal"
        $FCmaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Municipal');
        })->where('listmem_gen', 'Male')->count();

        $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Municipal');
        })->where('listmem_gen', 'Female')->count();

        $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Municipal');
        })->where('listmem_gen', 'Others')->count();

        // Count the number of each gender in FO_ListofMem_Model with sector_rep "Municipal"
        $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Municipal');
        })->where('mem_gen', 'Male')->count();

        $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Municipal');
        })->where('mem_gen', 'Female')->count();

        $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Municipal');
        })->where('mem_gen', 'Others')->count();

        // Combine the counts from both models
        $combinedGenderCount = [
            'Male' => $FCmaleCount + $FOmaleCount,
            'Female' => $FCfemaleCount + $FOfemaleCount,
            'Others' => $FCotherCount + $FOotherCount,
        ];

        $labelsGen = array_keys($combinedGenderCount);
        $dataGen = array_values($combinedGenderCount);


        return view('Fisherfolk_Organization.Municipal.municipal', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen'));
    }


    public function display_MunAssociation_viewform($id)
    {
        $basic_info = FisherfolkOrganization_Model::where('id', $id)->get();
        $boardDir = FO_OAM_BoardofDir_Model::where('fisherfolkOrg_id', $id)->get();
        $committee = FO_OAM_Committees_Model::where('fisherfolkOrg_id', $id)->get();
        $listmem = FO_ListofMem_Model::where('fisherfolkOrg_id', $id)->get();

        return view('Fisherfolk_Organization.Association_Form.viewAssociation', compact('basic_info', 'boardDir', 'committee', 'listmem'));
    }



    // ------------------------------------------------------------------//
    // ----------------------F I S H W O R K E R-------------------------//
    // ------------------------------------------------------------------//

    public function moveToFishAss_archived($id)
    {
        $fishass_archived = FisherfolkOrganization_Model::where('sector_rep', 'Fishworker')
            ->find($id);

        if ($fishass_archived) {
            $fishass_archived->status = 'ARCHIVED';
            $fishass_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function moveToFishCoop_archived($id)
    {
        $fishCoop_archived = FC_GenInfo_Model::where('sector_rep', 'Fishworker')
            ->find($id);

        if ($fishCoop_archived) {
            $fishCoop_archived->status = 'ARCHIVED';
            $fishCoop_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function display_Fish_archived()
    {
        $ass_archived = FisherfolkOrganization_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'Fishworker')
            ->get();

        $fc_archived = FC_GenInfo_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'Fishworker')
            ->get();

        // $archived_entries = $ass_archived->merge($fc_archived);

        return view('Fisherfolk_Organization.Fishworker.archivedData', compact('ass_archived', 'fc_archived'));
    }

    public function display_fishworker()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Fishworker')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'Fishworker')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
            ->where('sector_rep', 'Fishworker')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
            ->where('sector_rep', 'Fishworker')
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



        //COUNT

        $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'Fishworker');
        })->count('mem_name');

        $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'Fishworker');
        })->count('listmem_name');


        $totalMembersCount = $allfonamesCount + $allfcnamesCount;


        // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:

        $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Fishworker');
        })->get();

        $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Fishworker');
        })->get();

        // Count members in each age range for FO_ListofMem_Model
        $ageFORanges = [
            '1-18' => $allFOMembers->whereBetween('mem_age', [1, 18])->count(),
            '19-25' => $allFOMembers->whereBetween('mem_age', [19, 25])->count(),
            '26-35' => $allFOMembers->whereBetween('mem_age', [26, 35])->count(),
            '36-50' => $allFOMembers->whereBetween('mem_age', [36, 50])->count(),
            '51+' => $allFOMembers->where('mem_age', '>', 50)->count(),
        ];

        // Count members in each age range for FC_ListofMem_Model
        $ageFCRanges = [
            '1-18' => $allFCMembers->whereBetween('listmem_age', [1, 18])->count(),
            '19-25' => $allFCMembers->whereBetween('listmem_age', [19, 25])->count(),
            '26-35' => $allFCMembers->whereBetween('listmem_age', [26, 35])->count(),
            '36-50' => $allFCMembers->whereBetween('listmem_age', [36, 50])->count(),
            '51+' => $allFCMembers->where('listmem_age', '>', 50)->count(),
        ];

        // Combine the counts from both models
        $ageRanges = [
            '1-18' => $ageFORanges['1-18'] + $ageFCRanges['1-18'],
            '19-25' => $ageFORanges['19-25'] + $ageFCRanges['19-25'],
            '26-35' => $ageFORanges['26-35'] + $ageFCRanges['26-35'],
            '36-50' => $ageFORanges['36-50'] + $ageFCRanges['36-50'],
            '51+' => $ageFORanges['51+'] + $ageFCRanges['51+'],
        ];

        $labelsage = array_keys($ageRanges);
        $dataage = array_values($ageRanges);



        // Count the number of each gender in FC_ListofMem_Model with sector_rep "Fishworker"
        $FCmaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Fishworker');
        })->where('listmem_gen', 'Male')->count();

        $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Fishworker');
        })->where('listmem_gen', 'Female')->count();

        $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Fishworker');
        })->where('listmem_gen', 'Others')->count();

        // Count the number of each gender in FO_ListofMem_Model with sector_rep "Fishworker"
        $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Fishworker');
        })->where('mem_gen', 'Male')->count();

        $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Fishworker');
        })->where('mem_gen', 'Female')->count();

        $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Fishworker');
        })->where('mem_gen', 'Others')->count();

        // Combine the counts from both models
        $combinedGenderCount = [
            'Male' => $FCmaleCount + $FOmaleCount,
            'Female' => $FCfemaleCount + $FOfemaleCount,
            'Others' => $FCotherCount + $FOotherCount,
        ];

        $labelsGen = array_keys($combinedGenderCount);
        $dataGen = array_values($combinedGenderCount);

        return view('Fisherfolk_Organization.Fishworker.fishworker', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen'));
    }

    public function display_Fisher_Association_viewform($id)
    {
        $basic_info = FisherfolkOrganization_Model::where('id', $id)->get();
        $boardDir = FO_OAM_BoardofDir_Model::where('fisherfolkOrg_id', $id)->get();
        $committee = FO_OAM_Committees_Model::where('fisherfolkOrg_id', $id)->get();
        $listmem = FO_ListofMem_Model::where('fisherfolkOrg_id', $id)->get();

        return view('Fisherfolk_Organization.Association_Form.viewAssociation', compact('basic_info', 'boardDir', 'committee', 'listmem'));
    }


    // ------------------------------------------------------------------//
    // ----------------------C O M M E R C I A L-------------------------//
    // ------------------------------------------------------------------//

    public function moveToComAss_archived($id)
    {
        $comass_archived = FisherfolkOrganization_Model::where('sector_rep', 'Commercial')
            ->find($id);

        if ($comass_archived) {
            $comass_archived->status = 'ARCHIVED';
            $comass_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function moveToComCoop_archived($id)
    {
        $comCoop_archived = FC_GenInfo_Model::where('sector_rep', 'Commercial')
            ->find($id);

        if ($comCoop_archived) {
            $comCoop_archived->status = 'ARCHIVED';
            $comCoop_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function display_Com_archived()
    {
        $ass_archived = FisherfolkOrganization_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'Commercial')
            ->get();

        $fc_archived = FC_GenInfo_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'Commercial')
            ->get();

        // $archived_entries = $ass_archived->merge($fc_archived);

        return view('Fisherfolk_Organization.Commercial.archivedData', compact('ass_archived', 'fc_archived'));
    }

    public function display_commercial()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Commercial')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'Commercial')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
            ->where('sector_rep', 'Commercial')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
            ->where('sector_rep', 'Commercial')
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


        //COUNT

        $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'Commercial');
        })->count('mem_name');

        $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'Commercial');
        })->count('listmem_name');


        $totalMembersCount = $allfonamesCount + $allfcnamesCount;


        // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:

        $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Commercial');
        })->get();

        $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Commercial');
        })->get();

        // Count members in each age range for FO_ListofMem_Model
        $ageFORanges = [
            '1-18' => $allFOMembers->whereBetween('mem_age', [1, 18])->count(),
            '19-25' => $allFOMembers->whereBetween('mem_age', [19, 25])->count(),
            '26-35' => $allFOMembers->whereBetween('mem_age', [26, 35])->count(),
            '36-50' => $allFOMembers->whereBetween('mem_age', [36, 50])->count(),
            '51+' => $allFOMembers->where('mem_age', '>', 50)->count(),
        ];

        // Count members in each age range for FC_ListofMem_Model
        $ageFCRanges = [
            '1-18' => $allFCMembers->whereBetween('listmem_age', [1, 18])->count(),
            '19-25' => $allFCMembers->whereBetween('listmem_age', [19, 25])->count(),
            '26-35' => $allFCMembers->whereBetween('listmem_age', [26, 35])->count(),
            '36-50' => $allFCMembers->whereBetween('listmem_age', [36, 50])->count(),
            '51+' => $allFCMembers->where('listmem_age', '>', 50)->count(),
        ];

        // Combine the counts from both models
        $ageRanges = [
            '1-18' => $ageFORanges['1-18'] + $ageFCRanges['1-18'],
            '19-25' => $ageFORanges['19-25'] + $ageFCRanges['19-25'],
            '26-35' => $ageFORanges['26-35'] + $ageFCRanges['26-35'],
            '36-50' => $ageFORanges['36-50'] + $ageFCRanges['36-50'],
            '51+' => $ageFORanges['51+'] + $ageFCRanges['51+'],
        ];

        $labelsage = array_keys($ageRanges);
        $dataage = array_values($ageRanges);



        // Count the number of each gender in FC_ListofMem_Model with sector_rep "Commercial"
        $FCmaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Commercial');
        })->where('listmem_gen', 'Male')->count();

        $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Commercial');
        })->where('listmem_gen', 'Female')->count();

        $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Commercial');
        })->where('listmem_gen', 'Others')->count();

        // Count the number of each gender in FO_ListofMem_Model with sector_rep "Commercial"
        $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Commercial');
        })->where('mem_gen', 'Male')->count();

        $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Commercial');
        })->where('mem_gen', 'Female')->count();

        $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Commercial');
        })->where('mem_gen', 'Others')->count();

        // Combine the counts from both models
        $combinedGenderCount = [
            'Male' => $FCmaleCount + $FOmaleCount,
            'Female' => $FCfemaleCount + $FOfemaleCount,
            'Others' => $FCotherCount + $FOotherCount,
        ];

        $labelsGen = array_keys($combinedGenderCount);
        $dataGen = array_values($combinedGenderCount);

        return view('Fisherfolk_Organization.Commercial.commercial', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen'));
    }

    public function display_Com_Association_viewform($id)
    {
        $basic_info = FisherfolkOrganization_Model::where('id', $id)->get();
        $boardDir = FO_OAM_BoardofDir_Model::where('fisherfolkOrg_id', $id)->get();
        $committee = FO_OAM_Committees_Model::where('fisherfolkOrg_id', $id)->get();
        $listmem = FO_ListofMem_Model::where('fisherfolkOrg_id', $id)->get();

        return view('Fisherfolk_Organization.Association_Form.viewAssociation', compact('basic_info', 'boardDir', 'committee', 'listmem'));
    }

    // ------------------------------------------------------------------//
    // ----------------------W O M E N  F I S H E R F O L K -------------------------//
    // ------------------------------------------------------------------//

    public function moveToWomenAss_archived($id)
    {
        $womass_archived = FisherfolkOrganization_Model::where('sector_rep', 'Women')
            ->find($id);

        if ($womass_archived) {
            $womass_archived->status = 'ARCHIVED';
            $womass_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function moveToWomenCoop_archived($id)
    {
        $womCoop_archived = FC_GenInfo_Model::where('sector_rep', 'Women')
            ->find($id);

        if ($womCoop_archived) {
            $womCoop_archived->status = 'ARCHIVED';
            $womCoop_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function display_Women_archived()
    {
        $ass_archived = FisherfolkOrganization_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'Women')
            ->get();

        $fc_archived = FC_GenInfo_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'Women')
            ->get();

        // $archived_entries = $ass_archived->merge($fc_archived);

        return view('Fisherfolk_Organization.Women_Fisherfolk.archivedData', compact('ass_archived', 'fc_archived'));
    }


    public function display_women()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Women')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'Women')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
            ->where('sector_rep', 'Women')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
            ->where('sector_rep', 'Women')
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


        //COUNT

        $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'Women');
        })->count('mem_name');

        $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'Women');
        })->count('listmem_name');


        $totalMembersCount = $allfonamesCount + $allfcnamesCount;


        // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:

        $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Women');
        })->get();

        $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Women');
        })->get();

        // Count members in each age range for FO_ListofMem_Model
        $ageFORanges = [
            '1-18' => $allFOMembers->whereBetween('mem_age', [1, 18])->count(),
            '19-25' => $allFOMembers->whereBetween('mem_age', [19, 25])->count(),
            '26-35' => $allFOMembers->whereBetween('mem_age', [26, 35])->count(),
            '36-50' => $allFOMembers->whereBetween('mem_age', [36, 50])->count(),
            '51+' => $allFOMembers->where('mem_age', '>', 50)->count(),
        ];

        // Count members in each age range for FC_ListofMem_Model
        $ageFCRanges = [
            '1-18' => $allFCMembers->whereBetween('listmem_age', [1, 18])->count(),
            '19-25' => $allFCMembers->whereBetween('listmem_age', [19, 25])->count(),
            '26-35' => $allFCMembers->whereBetween('listmem_age', [26, 35])->count(),
            '36-50' => $allFCMembers->whereBetween('listmem_age', [36, 50])->count(),
            '51+' => $allFCMembers->where('listmem_age', '>', 50)->count(),
        ];

        // Combine the counts from both models
        $ageRanges = [
            '1-18' => $ageFORanges['1-18'] + $ageFCRanges['1-18'],
            '19-25' => $ageFORanges['19-25'] + $ageFCRanges['19-25'],
            '26-35' => $ageFORanges['26-35'] + $ageFCRanges['26-35'],
            '36-50' => $ageFORanges['36-50'] + $ageFCRanges['36-50'],
            '51+' => $ageFORanges['51+'] + $ageFCRanges['51+'],
        ];

        $labelsage = array_keys($ageRanges);
        $dataage = array_values($ageRanges);



        // Count the number of each gender in FC_ListofMem_Model with sector_rep "Women"
        $FCmaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Women');
        })->where('listmem_gen', 'Male')->count();

        $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Women');
        })->where('listmem_gen', 'Female')->count();

        $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Women');
        })->where('listmem_gen', 'Others')->count();

        // Count the number of each gender in FO_ListofMem_Model with sector_rep "Women"
        $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Women');
        })->where('mem_gen', 'Male')->count();

        $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Women');
        })->where('mem_gen', 'Female')->count();

        $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Women');
        })->where('mem_gen', 'Others')->count();

        // Combine the counts from both models
        $combinedGenderCount = [
            'Male' => $FCmaleCount + $FOmaleCount,
            'Female' => $FCfemaleCount + $FOfemaleCount,
            'Others' => $FCotherCount + $FOotherCount,
        ];

        $labelsGen = array_keys($combinedGenderCount);
        $dataGen = array_values($combinedGenderCount);

        return view('Fisherfolk_Organization.Women_Fisherfolk.women_fisherfolk', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen'));
    }

    public function display_Wom_Association_viewform($id)
    {
        $basic_info = FisherfolkOrganization_Model::where('id', $id)->get();
        $boardDir = FO_OAM_BoardofDir_Model::where('fisherfolkOrg_id', $id)->get();
        $committee = FO_OAM_Committees_Model::where('fisherfolkOrg_id', $id)->get();
        $listmem = FO_ListofMem_Model::where('fisherfolkOrg_id', $id)->get();

        return view('Fisherfolk_Organization.Association_Form.viewAssociation', compact('basic_info', 'boardDir', 'committee', 'listmem'));
    }


    // -----------------------------------------------------------------------------//
    // ---------------------Y O U T H   F I S H E R F O L K -------------------------//
    // -----------------------------------------------------------------------------//

    public function moveToYouthAss_archived($id)
    {
        $youthass_archived = FisherfolkOrganization_Model::where('sector_rep', 'Youth')
            ->find($id);

        if ($youthass_archived) {
            $youthass_archived->status = 'ARCHIVED';
            $youthass_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function moveToYouthCoop_archived($id)
    {
        $youthCoop_archived = FC_GenInfo_Model::where('sector_rep', 'Youth')
            ->find($id);

        if ($youthCoop_archived) {
            $youthCoop_archived->status = 'ARCHIVED';
            $youthCoop_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function display_Youth_archived()
    {
        $ass_archived = FisherfolkOrganization_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'Youth')
            ->get();

        $fc_archived = FC_GenInfo_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'Youth')
            ->get();

        // $archived_entries = $ass_archived->merge($fc_archived);

        return view('Fisherfolk_Organization.Youth_Fisherfolk.archivedData', compact('ass_archived', 'fc_archived'));
    }

    public function display_youth()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Youth')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'Youth')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
            ->where('sector_rep', 'Youth')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
            ->where('sector_rep', 'Youth')
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


        //COUNT

        $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'Youth');
        })->count('mem_name');

        $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'Youth');
        })->count('listmem_name');


        $totalMembersCount = $allfonamesCount + $allfcnamesCount;


        // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:

        $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Youth');
        })->get();

        $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Youth');
        })->get();

        // Count members in each age range for FO_ListofMem_Model
        $ageFORanges = [
            '1-18' => $allFOMembers->whereBetween('mem_age', [1, 18])->count(),
            '19-25' => $allFOMembers->whereBetween('mem_age', [19, 25])->count(),
            '26-35' => $allFOMembers->whereBetween('mem_age', [26, 35])->count(),
            '36-50' => $allFOMembers->whereBetween('mem_age', [36, 50])->count(),
            '51+' => $allFOMembers->where('mem_age', '>', 50)->count(),
        ];

        // Count members in each age range for FC_ListofMem_Model
        $ageFCRanges = [
            '1-18' => $allFCMembers->whereBetween('listmem_age', [1, 18])->count(),
            '19-25' => $allFCMembers->whereBetween('listmem_age', [19, 25])->count(),
            '26-35' => $allFCMembers->whereBetween('listmem_age', [26, 35])->count(),
            '36-50' => $allFCMembers->whereBetween('listmem_age', [36, 50])->count(),
            '51+' => $allFCMembers->where('listmem_age', '>', 50)->count(),
        ];

        // Combine the counts from both models
        $ageRanges = [
            '1-18' => $ageFORanges['1-18'] + $ageFCRanges['1-18'],
            '19-25' => $ageFORanges['19-25'] + $ageFCRanges['19-25'],
            '26-35' => $ageFORanges['26-35'] + $ageFCRanges['26-35'],
            '36-50' => $ageFORanges['36-50'] + $ageFCRanges['36-50'],
            '51+' => $ageFORanges['51+'] + $ageFCRanges['51+'],
        ];

        $labelsage = array_keys($ageRanges);
        $dataage = array_values($ageRanges);



        // Count the number of each gender in FC_ListofMem_Model with sector_rep "Youth"
        $FCmaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Youth');
        })->where('listmem_gen', 'Male')->count();

        $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Youth');
        })->where('listmem_gen', 'Female')->count();

        $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Youth');
        })->where('listmem_gen', 'Others')->count();

        // Count the number of each gender in FO_ListofMem_Model with sector_rep "Youth"
        $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Youth');
        })->where('mem_gen', 'Male')->count();

        $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Youth');
        })->where('mem_gen', 'Female')->count();

        $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'Youth');
        })->where('mem_gen', 'Others')->count();

        // Combine the counts from both models
        $combinedGenderCount = [
            'Male' => $FCmaleCount + $FOmaleCount,
            'Female' => $FCfemaleCount + $FOfemaleCount,
            'Others' => $FCotherCount + $FOotherCount,
        ];

        $labelsGen = array_keys($combinedGenderCount);
        $dataGen = array_values($combinedGenderCount);

        return view('Fisherfolk_Organization.Youth_Fisherfolk.youth_fisherfolk', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen'));
    }

    public function display_Youth_Association_viewform($id)
    {
        $basic_info = FisherfolkOrganization_Model::where('id', $id)->get();
        $boardDir = FO_OAM_BoardofDir_Model::where('fisherfolkOrg_id', $id)->get();
        $committee = FO_OAM_Committees_Model::where('fisherfolkOrg_id', $id)->get();
        $listmem = FO_ListofMem_Model::where('fisherfolkOrg_id', $id)->get();

        return view('Fisherfolk_Organization.Association_Form.viewAssociation', compact('basic_info', 'boardDir', 'committee', 'listmem'));
    }


    // -----------------------------------------------------------------------------//
    // ---------------------I N D I G E N O U S  P E O P L E -------------------------//
    // -----------------------------------------------------------------------------//

    public function moveToIPsAss_archived($id)
    {
        $IPsass_archived = FisherfolkOrganization_Model::where('sector_rep', 'IPs')
            ->find($id);

        if ($IPsass_archived) {
            $IPsass_archived->status = 'ARCHIVED';
            $IPsass_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function moveToIPsCoop_archived($id)
    {
        $IPsCoop_archived = FC_GenInfo_Model::where('sector_rep', 'IPs')
            ->find($id);

        if ($IPsCoop_archived) {
            $IPsCoop_archived->status = 'ARCHIVED';
            $IPsCoop_archived->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found');
        }
    }

    public function display_IPs_archived()
    {
        $ass_archived = FisherfolkOrganization_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'IPs')
            ->get();

        $fc_archived = FC_GenInfo_Model::where('status', 'ARCHIVED')
            ->where('sector_rep', 'IPs')
            ->get();

        // $archived_entries = $ass_archived->merge($fc_archived);

        return view('Fisherfolk_Organization.IPs.archivedData', compact('ass_archived', 'fc_archived'));
    }


    public function display_IPs()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'IPs')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'IPs')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
            ->where('sector_rep', 'IPs')
            ->where(function ($query) {
                $query->where('status', '!=', 'ARCHIVED')
                    ->orWhereNull('status');
            })
            ->count();

        $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
            ->where('sector_rep', 'IPs')
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


        //COUNT

        $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'IPs');
        })->count('mem_name');

        $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->whereNotNull('sector_rep')
                ->where('sector_rep', 'IPs');
        })->count('listmem_name');


        $totalMembersCount = $allfonamesCount + $allfcnamesCount;


        // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:

        $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'IPs');
        })->get();

        $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'IPs');
        })->get();

        // Count members in each age range for FO_ListofMem_Model
        $ageFORanges = [
            '1-18' => $allFOMembers->whereBetween('mem_age', [1, 18])->count(),
            '19-25' => $allFOMembers->whereBetween('mem_age', [19, 25])->count(),
            '26-35' => $allFOMembers->whereBetween('mem_age', [26, 35])->count(),
            '36-50' => $allFOMembers->whereBetween('mem_age', [36, 50])->count(),
            '51+' => $allFOMembers->where('mem_age', '>', 50)->count(),
        ];

        // Count members in each age range for FC_ListofMem_Model
        $ageFCRanges = [
            '1-18' => $allFCMembers->whereBetween('listmem_age', [1, 18])->count(),
            '19-25' => $allFCMembers->whereBetween('listmem_age', [19, 25])->count(),
            '26-35' => $allFCMembers->whereBetween('listmem_age', [26, 35])->count(),
            '36-50' => $allFCMembers->whereBetween('listmem_age', [36, 50])->count(),
            '51+' => $allFCMembers->where('listmem_age', '>', 50)->count(),
        ];

        // Combine the counts from both models
        $ageRanges = [
            '1-18' => $ageFORanges['1-18'] + $ageFCRanges['1-18'],
            '19-25' => $ageFORanges['19-25'] + $ageFCRanges['19-25'],
            '26-35' => $ageFORanges['26-35'] + $ageFCRanges['26-35'],
            '36-50' => $ageFORanges['36-50'] + $ageFCRanges['36-50'],
            '51+' => $ageFORanges['51+'] + $ageFCRanges['51+'],
        ];

        $labelsage = array_keys($ageRanges);
        $dataage = array_values($ageRanges);



        // Count the number of each gender in FC_ListofMem_Model with sector_rep "IPs"
        $FCmaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'IPs');
        })->where('listmem_gen', 'Male')->count();

        $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'IPs');
        })->where('listmem_gen', 'Female')->count();

        $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'IPs');
        })->where('listmem_gen', 'Others')->count();

        // Count the number of each gender in FO_ListofMem_Model with sector_rep "IPs"
        $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'IPs');
        })->where('mem_gen', 'Male')->count();

        $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'IPs');
        })->where('mem_gen', 'Female')->count();

        $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('status', '!=', 'ARCHIVED')
                ->orWhereNull('status')
                ->where('sector_rep', 'IPs');
        })->where('mem_gen', 'Others')->count();

        // Combine the counts from both models
        $combinedGenderCount = [
            'Male' => $FCmaleCount + $FOmaleCount,
            'Female' => $FCfemaleCount + $FOfemaleCount,
            'Others' => $FCotherCount + $FOotherCount,
        ];

        $labelsGen = array_keys($combinedGenderCount);
        $dataGen = array_values($combinedGenderCount);

        return view('Fisherfolk_Organization.IPs.IPs', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen'));
    }

    public function display_IPs_Association_viewform($id)
    {
        $basic_info = FisherfolkOrganization_Model::where('id', $id)->get();
        $boardDir = FO_OAM_BoardofDir_Model::where('fisherfolkOrg_id', $id)->get();
        $committee = FO_OAM_Committees_Model::where('fisherfolkOrg_id', $id)->get();
        $listmem = FO_ListofMem_Model::where('fisherfolkOrg_id', $id)->get();

        return view('Fisherfolk_Organization.Association_Form.viewAssociation', compact('basic_info', 'boardDir', 'committee', 'listmem'));
    }


    // ----------------------------------------------------------------------------------//
    // -------------------------- D I S P L A Y  V I E W F O R M-------------------------//
    // ----------------------------------------------------------------------------------//


    public function display_coop_viewform($id)
    {
        $gen_info = FC_GenInfo_Model::where('id', $id)->get();
        $members = FC_Membership_Model::where('fisherfolkOrg_FC_id', $id)->get();
        $offic = FC_Officers_Model::where('fisherfolkOrg_FC_id', $id)->get();
        $offic1 = FC_Officers_Commit_Model::where('fisherfolkOrg_FC_id', $id)->get();
        $orgst = FC_OrgStruct_Model::where('fisherfolkOrg_FC_id', $id)->get();
        $listmem = FC_ListofMem_Model::where('fisherfolkOrg_FC_id', $id)->get();

        // $sector_rep = null;

        // if ($gen_info->isNotEmpty()) {
        //     $sector_rep = $gen_info[0]->sector_rep;
        // } elseif ($members->isNotEmpty()) {
        //     $sector_rep = $members[0]->sector_rep;
        // } elseif ($offic->isNotEmpty()) {
        //     $sector_rep = $offic[0]->sector_rep;
        // } elseif ($offic1->isNotEmpty()) {
        //     $sector_rep = $offic1[0]->sector_rep;
        // } elseif ($orgst->isNotEmpty()) {
        //     $sector_rep = $orgst[0]->sector_rep;
        // } elseif ($listmem->isNotEmpty()) {
        //     $sector_rep = $listmem[0]->sector_rep;
        // }

        return view('Fisherfolk_Organization.Cooperative_Form.viewCooperative', compact('gen_info', 'members', 'offic', 'offic1', 'orgst', 'listmem'));
    }
}
