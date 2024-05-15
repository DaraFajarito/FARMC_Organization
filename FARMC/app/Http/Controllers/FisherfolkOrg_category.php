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
use Illuminate\Support\Collection;

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


        $countAssName =  FisherfolkOrganization_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'Municipal')->count('name_of_org');

        $countCoopName = FC_GenInfo_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'Municipal')->count('name_of_coop');

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


        return view('Fisherfolk_Organization.Municipal.municipal', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen', 'countAssName', 'countCoopName'));
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


        $countAssName =  FisherfolkOrganization_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'Fishworker')->count('name_of_org');

        $countCoopName = FC_GenInfo_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'Fishworker')->count('name_of_coop');


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

        return view('Fisherfolk_Organization.Fishworker.fishworker', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen', 'countAssName', 'countCoopName'));
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


        $countAssName =  FisherfolkOrganization_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'Commercial')->count('name_of_org');

        $countCoopName = FC_GenInfo_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'Commercial')->count('name_of_coop');

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

        return view('Fisherfolk_Organization.Commercial.commercial', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen', 'countAssName', 'countCoopName'));
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

        $countAssName =  FisherfolkOrganization_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'Women')->count('name_of_org');

        $countCoopName = FC_GenInfo_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'Women')->count('name_of_coop');


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

        return view('Fisherfolk_Organization.Women_Fisherfolk.women_fisherfolk', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen', 'countAssName', 'countCoopName'));
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


        $countAssName =  FisherfolkOrganization_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'Youth')->count('name_of_org');

        $countCoopName = FC_GenInfo_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'Youth')->count('name_of_coop');

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

        return view('Fisherfolk_Organization.Youth_Fisherfolk.youth_fisherfolk', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen', 'countAssName', 'countCoopName'));
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

        $countAssName =  FisherfolkOrganization_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'IPs')->count('name_of_org');

        $countCoopName = FC_GenInfo_Model::where('status', '!=', 'ARCHIVED')
            ->orWhereNull('status')
            ->whereNotNull('sector_rep')
            ->where('sector_rep', 'IPs')->count('name_of_coop');


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

        return view('Fisherfolk_Organization.IPs.IPs', compact('data', 'data1', 'data_ass', 'allfonamesCount', 'allfcnamesCount', 'totalMembersCount', 'labelsage', 'dataage', 'labelsGen', 'dataGen', 'countAssName', 'countCoopName'));
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

        return view('Fisherfolk_Organization.Cooperative_Form.viewCooperative', compact('gen_info', 'members', 'offic', 'offic1', 'orgst', 'listmem'));
    }


    // ----------------------------------------------------------------------------------//
    // ----------------------- V I E W  A L L  M E M B E R S ----------------------------//
    // ----------------------------------------------------------------------------------//

    public function display_all_Mun()
    {
         //DISPLAYING TABLE
         $association = FisherfolkOrganization_Model::where('sector_rep', 'Municipal')->get();
         $cooperative = FC_GenInfo_Model::where('sector_rep', 'Municipal')->get();


        return view('Fisherfolk_Organization.Municipal.viewall_Municipal', compact('association', 'cooperative'));
    }
    public function display_all_Fish()
    {
         //DISPLAYING TABLE
         $association = FisherfolkOrganization_Model::where('sector_rep', 'Fishworker')->get();
         $cooperative = FC_GenInfo_Model::where('sector_rep', 'Fishworker')->get();


        return view('Fisherfolk_Organization.Fishworker.viewall_Fishworker', compact('association', 'cooperative'));
    }
    public function display_all_Com()
    {
         //DISPLAYING TABLE
         $association = FisherfolkOrganization_Model::where('sector_rep', 'Commercial')->get();
         $cooperative = FC_GenInfo_Model::where('sector_rep', 'Commercial')->get();


        return view('Fisherfolk_Organization.Commercial.viewall_Commercial', compact('association', 'cooperative'));
    }
    public function display_all_Women()
    {
         //DISPLAYING TABLE
         $association = FisherfolkOrganization_Model::where('sector_rep', 'Women')->get();
         $cooperative = FC_GenInfo_Model::where('sector_rep', 'Women')->get();


        return view('Fisherfolk_Organization.Women_Fisherfolk.viewall_WFisherfolk', compact('association', 'cooperative'));
    }
    public function display_all_Youth()
    {
         //DISPLAYING TABLE
         $association = FisherfolkOrganization_Model::where('sector_rep', 'Youth')->get();
         $cooperative = FC_GenInfo_Model::where('sector_rep', 'Youth')->get();


        return view('Fisherfolk_Organization.Youth_Fisherfolk.viewall_YFisherfolk', compact('association', 'cooperative'));
    }
    public function display_all_IP()
    {
         //DISPLAYING TABLE
         $association = FisherfolkOrganization_Model::where('sector_rep', 'IPs')->get();
         $cooperative = FC_GenInfo_Model::where('sector_rep', 'IPs')->get();


        return view('Fisherfolk_Organization.IPs.viewall_IPs', compact('association', 'cooperative'));
    }






    // ----------------------------------------------------------------------------------//
    // ------------------------------ E D I T I N G  D A T A ----------------------------//
    // ----------------------------------------------------------------------------------//


    public function display_Ass_edit($id)
    {
        $basic_info1 = FisherfolkOrganization_Model::where('id', $id)->get();
        $boardDir1 = FO_OAM_BoardofDir_Model::where('fisherfolkOrg_id', $id)->get();
        $committee1 = FO_OAM_Committees_Model::where('fisherfolkOrg_id', $id)->get();
        $listmem1 = FO_ListofMem_Model::where('fisherfolkOrg_id', $id)->get();

        return view('Fisherfolk_Organization.Association_Form.editAssociation',  compact('basic_info1', 'boardDir1', 'committee1', 'listmem1'));
    }

    public function edit_Association(Request $request, $id)
    {


        $validatedData = $request->validate([
            //BASIC INFO (FisherfolkOrganization_Model)
            'as_of' => 'nullable|string',
            'name_of_org' => 'nullable|string',
            'add_barangay' => 'nullable|string',
            'add_city' => 'nullable|string',
            'add_province' => 'nullable|string',
            'sector_rep' => 'nullable|string',
            'sector_rep_yes' => 'nullable|string',
            'status_of_reg' => 'nullable|string',
            'status_of_reg_yes' => 'nullable|string',
            'reg_no' => 'nullable|string',
            'date_reg' => 'nullable|string',
            'status_of_accre' => 'nullable|string',
            'status_of_accre_yes' => 'nullable|string',
            'accre_no' => 'nullable|string',
            'date_accre' => 'nullable|string',

            'OAM_EO_Chair_name' => 'nullable',
            'chair_cs' => 'nullable',
            'chair_gen' => 'nullable',
            'chair_birth' => 'nullable|date_format:Y-m-d',
            'chair_age' => 'nullable',
            'chair_fourps' => 'nullable',

            'OAM_EO_Vicechair_name' => 'nullable',
            'vicechair_cs' => 'nullable',
            'vicechair_gen' => 'nullable',
            'vicechair_birth' => 'nullable|date_format:Y-m-d',
            'vicechair_age' => 'nullable',
            'vicechair_fourps' => 'nullable',

            'OAM_EO_Sec_name' => 'nullable',
            'sec_cs' => 'nullable',
            'sec_gen' => 'nullable',
            'sec_birth' => 'nullable|date_format:Y-m-d',
            'sec_age' => 'nullable',
            'sec_fourps' => 'nullable',

            'OAM_EO_Treas_name' => 'nullable',
            'treas_cs' => 'nullable',
            'treas_gen' => 'nullable',
            'treas_birth' => 'nullable|date_format:Y-m-d',
            'treas_age' => 'nullable',
            'treas_fourps' => 'nullable',

            'OAM_EO_Aud_name' => 'nullable',
            'aud_cs' => 'nullable',
            'aud_gen' => 'nullable',
            'aud_birth' => 'nullable|date_format:Y-m-d',
            'aud_age' => 'nullable',
            'aud_fourps' => 'nullable',

            'OAM_EO_PRO_name' => 'nullable',
            'pro_cs' => 'nullable',
            'pro_gen' => 'nullable',
            'pro_birth' => 'nullable|date_format:Y-m-d',
            'pro_age' => 'nullable',
            'pro_fourps' => 'nullable',

            'OAM_EO_Sgt_name' => 'nullable',
            'sgt_cs' => 'nullable',
            'sgt_gen' => 'nullable',
            'sgt_birth' => 'nullable|date_format:Y-m-d',
            'sgt_age' => 'nullable',
            'sgt_fourps' => 'nullable',

            'OAM_EO_Other_name' => 'nullable',
            'other_cs' => 'nullable',
            'other_gen' => 'nullable',
            'other_birth' => 'nullable|date_format:Y-m-d',
            'other_age' => 'nullable',
            'other_fourps' => 'nullable',

            //BOARD OF DIRECTOR (FO_OAM_BoardofDir_Model)
            'boardofDir_name1' => 'nullable',
            'boardofDir_cs1' => 'nullable',
            'boardofDir_gen1' => 'nullable',
            'boardofDir_birth1' => 'nullable|date_format:Y-m-d',
            'boardofDir_age1' => 'nullable',
            'boardofDir_fourps1' => 'nullable',

            'boardofDir_name2' => 'nullable',
            'boardofDir_cs2' => 'nullable',
            'boardofDir_gen2' => 'nullable',
            'boardofDir_birth2' => 'nullable|date_format:Y-m-d',
            'boardofDir_age2' => 'nullable',
            'boardofDir_fourps2' => 'nullable',

            'boardofDir_name3' => 'nullable',
            'boardofDir_cs3' => 'nullable',
            'boardofDir_gen3' => 'nullable',
            'boardofDir_birth3' => 'nullable|date_format:Y-m-d',
            'boardofDir_age3' => 'nullable',
            'boardofDir_fourps3' => 'nullable',

            'boardofDir_name4' => 'nullable',
            'boardofDir_cs4' => 'nullable',
            'boardofDir_gen4' => 'nullable',
            'boardofDir_birth4' => 'nullable|date_format:Y-m-d',
            'boardofDir_age4' => 'nullable',
            'boardofDir_fourps4' => 'nullable',

            'boardofDir_name5' => 'nullable',
            'boardofDir_cs5' => 'nullable',
            'boardofDir_gen5' => 'nullable',
            'boardofDir_birth5' => 'nullable|date_format:Y-m-d',
            'boardofDir_age5' => 'nullable',
            'boardofDir_fourps5' => 'nullable',

            'boardofDir_name6' => 'nullable',
            'boardofDir_cs6' => 'nullable',
            'boardofDir_gen6' => 'nullable',
            'boardofDir_birth6' => 'nullable|date_format:Y-m-d',
            'boardofDir_age6' => 'nullable',
            'boardofDir_fourps6' => 'nullable',

            'boardofDir_name7' => 'nullable',
            'boardofDir_cs7' => 'nullable',
            'boardofDir_gen7' => 'nullable',
            'boardofDir_birth7' => 'nullable|date_format:Y-m-d',
            'boardofDir_age7' => 'nullable',
            'boardofDir_fourps7' => 'nullable',

            'boardofDir_name8' => 'nullable',
            'boardofDir_cs8' => 'nullable',
            'boardofDir_gen8' => 'nullable',
            'boardofDir_birth8' => 'nullable|date_format:Y-m-d',
            'boardofDir_age8' => 'nullable',
            'boardofDir_fourps8' => 'nullable',

            'capmem_fee' => 'nullable',
            'capmonthly_cont' => 'nullable',
            'cap_donation' => 'nullable',
            'cap_others' => 'nullable',
            'captotal_cap' => 'nullable',
            'CIcontact_person' => 'nullable',
            'CIlandline' => 'nullable',
            'CIMobile' => 'nullable',
            'CIMess' => 'nullable',

            //COMMITTEE (FO_OAM_Committees_Model)
            // i have category here (Membership Committee, Committee on Education and Research, Election Committee, Audit Committee, Others: please specify),
            //wherein i just select one of this category and fill up the field in each category
            //my problem is how can i edit data of each category i have if they have same input fields , how can identify if it is the category data i want to edit
            'category' => 'nullable',
            'other_cat' => 'nullable',
            'name' => 'nullable',
            'civil_status' => 'nullable',
            'birthday' => 'nullable|date_format:Y-m-d',
            'gender' => 'nullable',
            'age' => 'nullable',
            'fourps' => 'nullable',

            'name1' => 'nullable',
            'civil_status1' => 'nullable',
            'birthday1' => 'nullable|date_format:Y-m-d',
            'gender1' => 'nullable',
            'age1' => 'nullable',
            'fourps1' => 'nullable',

            'name2' => 'nullable',
            'civil_status2' => 'nullable',
            'birthday2' => 'nullable|date_format:Y-m-d',
            'gender2' => 'nullable',
            'age2' => 'nullable',
            'fourps2' => 'nullable',

        ]);

        $editAss = FisherfolkOrganization_Model::where('id', $id)->firstOrFail();

        // Update other fields
        $editAss->as_of = $validatedData['as_of'] ?? null;
        $editAss->name_of_org = $validatedData['name_of_org'] ?? null;
        $editAss->add_barangay = $validatedData['add_barangay'] ?? null;
        $editAss->add_city = $validatedData['add_city'] ?? null;
        $editAss->add_province = $validatedData['add_province'] ?? null;
        $editAss->sector_rep = $validatedData['sector_rep'] ?? null;
        $editAss->sector_rep_yes = $validatedData['sector_rep_yes'] ?? null;
        $editAss->status_of_reg = $validatedData['status_of_reg'] ?? null;
        $editAss->status_of_reg_yes = $validatedData['status_of_reg_yes'] ?? null;
        $editAss->reg_no = $validatedData['reg_no'] ?? null;
        $editAss->date_reg = $validatedData['date_reg'] ?? null;
        $editAss->status_of_accre = $validatedData['status_of_accre'] ?? null;
        $editAss->status_of_accre_yes = $validatedData['status_of_accre_yes'] ?? null;
        $editAss->accre_no = $validatedData['accre_no'] ?? null;
        $editAss->date_accre = $validatedData['date_accre'] ?? null;

        $editAss->OAM_EO_Chair_name = $validatedData['OAM_EO_Chair_name'] ?? null;
        $editAss->chair_cs = $validatedData['chair_cs'] ?? null;
        $editAss->chair_gen = $validatedData['chair_gen'] ?? null;
        $editAss->chair_birth = $validatedData['chair_birth'] ?? null;
        $editAss->chair_age = $validatedData['chair_age'] ?? null;
        $editAss->chair_fourps = $validatedData['chair_fourps'] ?? null;

        $editAss->OAM_EO_Vicechair_name = $validatedData['OAM_EO_Vicechair_name'] ?? null;
        $editAss->vicechair_cs = $validatedData['vicechair_cs'] ?? null;
        $editAss->vicechair_gen = $validatedData['vicechair_gen'] ?? null;
        $editAss->vicechair_birth = $validatedData['vicechair_birth'] ?? null;
        $editAss->vicechair_age = $validatedData['vicechair_age'] ?? null;
        $editAss->vicechair_fourps = $validatedData['vicechair_fourps'] ?? null;

        // Update Executive Officers
        $editAss->OAM_EO_Sec_name = $validatedData['OAM_EO_Sec_name'] ?? null;
        $editAss->sec_cs = $validatedData['sec_cs'] ?? null;
        $editAss->sec_gen = $validatedData['sec_gen'] ?? null;
        $editAss->sec_birth = $validatedData['sec_birth'] ?? null;
        $editAss->sec_age = $validatedData['sec_age'] ?? null;
        $editAss->sec_fourps = $validatedData['sec_fourps'] ?? null;

        $editAss->OAM_EO_Treas_name = $validatedData['OAM_EO_Treas_name'] ?? null;
        $editAss->treas_cs = $validatedData['treas_cs'] ?? null;
        $editAss->treas_gen = $validatedData['treas_gen'] ?? null;
        $editAss->treas_birth = $validatedData['treas_birth'] ?? null;
        $editAss->treas_age = $validatedData['treas_age'] ?? null;
        $editAss->treas_fourps = $validatedData['treas_fourps'] ?? null;

        $editAss->OAM_EO_Aud_name = $validatedData['OAM_EO_Aud_name'] ?? null;
        $editAss->aud_cs = $validatedData['aud_cs'] ?? null;
        $editAss->aud_gen = $validatedData['aud_gen'] ?? null;
        $editAss->aud_birth = $validatedData['aud_birth'] ?? null;
        $editAss->aud_age = $validatedData['aud_age'] ?? null;
        $editAss->aud_fourps = $validatedData['aud_fourps'] ?? null;

        $editAss->OAM_EO_PRO_name = $validatedData['OAM_EO_PRO_name'] ?? null;
        $editAss->pro_cs = $validatedData['pro_cs'] ?? null;
        $editAss->pro_gen = $validatedData['pro_gen'] ?? null;
        $editAss->pro_birth = $validatedData['pro_birth'] ?? null;
        $editAss->pro_age = $validatedData['pro_age'] ?? null;
        $editAss->pro_fourps = $validatedData['pro_fourps'] ?? null;

        $editAss->OAM_EO_Sgt_name = $validatedData['OAM_EO_Sgt_name'] ?? null;
        $editAss->sgt_cs = $validatedData['sgt_cs'] ?? null;
        $editAss->sgt_gen = $validatedData['sgt_gen'] ?? null;
        $editAss->sgt_birth = $validatedData['sgt_birth'] ?? null;
        $editAss->sgt_age = $validatedData['sgt_age'] ?? null;
        $editAss->sgt_fourps = $validatedData['sgt_fourps'] ?? null;

        $editAss->OAM_EO_Other_name = $validatedData['OAM_EO_Other_name'] ?? null;
        $editAss->other_cs = $validatedData['other_cs'] ?? null;
        $editAss->other_gen = $validatedData['other_gen'] ?? null;
        $editAss->other_birth = $validatedData['other_birth'] ?? null;
        $editAss->other_age = $validatedData['other_age'] ?? null;
        $editAss->other_fourps = $validatedData['other_fourps'] ?? null;

        $editAss->capmem_fee = $validatedData['capmem_fee'] ?? null;
        $editAss->capmonthly_cont = $validatedData['capmonthly_cont'] ?? null;
        $editAss->cap_donation = $validatedData['cap_donation'] ?? null;
        $editAss->cap_others = $validatedData['cap_others'] ?? null;
        $editAss->captotal_cap = $validatedData['captotal_cap'] ?? null;

        $editAss->CIcontact_person = $validatedData['CIcontact_person'] ?? null;
        $editAss->CIlandline = $validatedData['CIlandline'] ?? null;
        $editAss->CIMobile = $validatedData['CIMobile'] ?? null;
        $editAss->CIMess = $validatedData['CIMess'] ?? null;

        $boardir = FO_OAM_BoardofDir_Model::where('fisherfolkOrg_id', $editAss->id)->firstOrFail();
        $boardir->boardofDir_name1 = $validatedData['boardofDir_name1'] ?? null;
        $boardir->boardofDir_cs1 = $validatedData['boardofDir_cs1'] ?? null;
        $boardir->boardofDir_gen1 = $validatedData['boardofDir_gen1'] ?? null;
        $boardir->boardofDir_age1 =  $validatedData['boardofDir_age1'] ?? null;
        $boardir->boardofDir_birth1 = isset($validatedData['boardofDir_birth1']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth1'])) : null;
        $boardir->boardofDir_fourps1 = $validatedData['boardofDir_fourps1'] ?? null;

        $boardir->boardofDir_name2 = $validatedData['boardofDir_name2'] ?? null;
        $boardir->boardofDir_cs2 = $validatedData['boardofDir_cs2'] ?? null;
        $boardir->boardofDir_gen2 = $validatedData['boardofDir_gen2'] ?? null;
        $boardir->boardofDir_birth2 = isset($validatedData['boardofDir_birth2']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth2'])) : null;
        $boardir->boardofDir_age2 = $validatedData['boardofDir_age2'] ?? null;
        $boardir->boardofDir_fourps2 = $validatedData['boardofDir_fourps2'] ?? null;

        $boardir->boardofDir_name3 = $validatedData['boardofDir_name3'] ?? null;
        $boardir->boardofDir_cs3 = $validatedData['boardofDir_cs3'] ?? null;
        $boardir->boardofDir_gen3 = $validatedData['boardofDir_gen3'] ?? null;
        $boardir->boardofDir_birth3 = isset($validatedData['boardofDir_birth3']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth3'])) : null;
        $boardir->boardofDir_age3 = $validatedData['boardofDir_age3'] ?? null;
        $boardir->boardofDir_fourps3 = $validatedData['boardofDir_fourps3'] ?? null;

        $boardir->boardofDir_name4 = $validatedData['boardofDir_name4'] ?? null;
        $boardir->boardofDir_cs4 = $validatedData['boardofDir_cs4'] ?? null;
        $boardir->boardofDir_gen4 = $validatedData['boardofDir_gen4'] ?? null;
        $boardir->boardofDir_birth4 = isset($validatedData['boardofDir_birth4']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth4'])) : null;
        $boardir->boardofDir_age4 = $validatedData['boardofDir_age4'] ?? null;
        $boardir->boardofDir_fourps4 = $validatedData['boardofDir_fourps4'] ?? null;

        $boardir->boardofDir_name5 = $validatedData['boardofDir_name5'] ?? null;
        $boardir->boardofDir_cs5 = $validatedData['boardofDir_cs5'] ?? null;
        $boardir->boardofDir_gen5 = $validatedData['boardofDir_gen5'] ?? null;
        $boardir->boardofDir_birth5 = isset($validatedData['boardofDir_birth5']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth5'])) : null;
        $boardir->boardofDir_age5 = $validatedData['boardofDir_age5'] ?? null;
        $boardir->boardofDir_fourps5 = $validatedData['boardofDir_fourps5'] ?? null;

        $boardir->boardofDir_name6 = $validatedData['boardofDir_name6'] ?? null;
        $boardir->boardofDir_cs6 = $validatedData['boardofDir_cs6'] ?? null;
        $boardir->boardofDir_gen6 = $validatedData['boardofDir_gen6'] ?? null;
        $boardir->boardofDir_birth6 = isset($validatedData['boardofDir_birth6']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth6'])) : null;
        $boardir->boardofDir_age6 = $validatedData['boardofDir_age6'] ?? null;
        $boardir->boardofDir_fourps6 = $validatedData['boardofDir_fourps6'] ?? null;

        $boardir->boardofDir_name7 = $validatedData['boardofDir_name7'] ?? null;
        $boardir->boardofDir_cs7 = $validatedData['boardofDir_cs7'] ?? null;
        $boardir->boardofDir_gen7 = $validatedData['boardofDir_gen7'] ?? null;
        $boardir->boardofDir_birth7 = isset($validatedData['boardofDir_birth7']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth7'])) : null;
        $boardir->boardofDir_age7 = $validatedData['boardofDir_age7'] ?? null;
        $boardir->boardofDir_fourps7 = $validatedData['boardofDir_fourps7'] ?? null;

        $boardir->boardofDir_name8 = $validatedData['boardofDir_name8'] ?? null;
        $boardir->boardofDir_cs8 = $validatedData['boardofDir_cs8'] ?? null;
        $boardir->boardofDir_gen8 = $validatedData['boardofDir_gen8'] ?? null;
        $boardir->boardofDir_birth8 = isset($validatedData['boardofDir_birth8']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth8'])) : null;
        $boardir->boardofDir_age8 = $validatedData['boardofDir_age8'] ?? null;
        $boardir->boardofDir_fourps8 = $validatedData['boardofDir_fourps8'] ?? null;

        $editAss->save();
        $boardir->save();



        // Check if any changes were made and redirect accordingly
        if ($editAss->wasChanged() || $boardir->wasChanged()) {
            $sectorRep = $editAss->sector_rep;
            switch ($sectorRep) {
                case 'Municipal':
                    return redirect('/viewMunAssociation/' . $editAss->id)->with('success', 'Data has been updated successfully!');
                case 'Fishworker':
                    return redirect('/viewFishAssociation/' . $editAss->id)->with('success', 'Data has been updated successfully!');
                case 'Commercial':
                    return redirect('/viewComAssociation/' . $editAss->id)->with('success', 'Data has been updated successfully!');
                case 'Women':
                    return redirect('/viewWomAssociation/' . $editAss->id)->with('success', 'Data has been updated successfully!');
                case 'Youth':
                    return redirect('/viewYouthAssociation/' . $editAss->id)->with('success', 'Data has been updated successfully!');
                case 'IP':
                    return redirect('/viewIPAssociation/' . $editAss->id)->with('success', 'Data has been updated successfully!');
                default:
                    return redirect()->back()->with('error', 'Failed to update. No changes were made.');
            }
        } else {
            return redirect()->back()->with('error', 'Failed to update. No changes were made.');
        }
    }
}

