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
// use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;


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

    public function display_coop_edit($id)
    {
        $gen_info1 = FC_GenInfo_Model::where('id', $id)->get();
        $mem = FC_Membership_model::where('fisherfolkOrg_FC_id', $id)->get();
        $officer = FC_Officers_Model::where('fisherfolkOrg_FC_id', $id)->get();
        $org = FC_Orgstruct_Model::where('fisherfolkOrg_FC_id', $id)->get();

        return view('Fisherfolk_Organization.Cooperative_Form.editCooperative',  compact('gen_info1', 'mem', 'officer', 'org'));
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
            //my problem is how can i edit data of each category if they have same input fields , how can identify if it is the category data i want to edit
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
    public function edit_Cooperative(Request $request, $id)
    {

        $validatedData = $request->validate([
            //GEN INFO (FC_GenInfo_Model)
            'as_of' => 'nullable',
            'name_of_coop' => 'nullable',
            'add_barangay' => 'nullable',
            'add_city' => 'nullable',
            'add_province' => 'nullable',
            'sector_rep' => 'nullable|in:Municipal,Commercial,Fishworker,Women,Youth,IPs,Others',
            'sector_rep_yes' => 'nullable',
            'CIN' => 'nullable',
            'date_of_amend' => 'nullable|date_format:Y-m-d',
            'short_history' => 'nullable',

            'RD_ODR_regnum' => 'nullable',
            'RD_ODR_regdate' => 'nullable|date_format:Y-m-d',
            'RD_ODR_regfile' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',


            'RD_RA_regnum' => 'nullable',
            'RD_RA_regdate' => 'nullable|date_format:Y-m-d',
            'RD_RA_regfile' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',


            'RD_memOp' => 'nullable|in:Municipal,Provincial,Regional,National',
            'RD_bussOp' => 'nullable',
            'RD_categofCoop' => 'nullable|in:Primary,Secondary,Tertiary',
            'RD_typeofCoop' => 'nullable',

            'RD_genObj' => 'nullable',
            'RD_progpas' => 'nullable',
            'RD_SOA_date' =>'nullable|date_format:Y-m-d',
            'RD_SOA_num' => 'nullable',
            'RD_categofAccre' => 'nullable|in:Municipal,Provincial,National',

            //MEMBERSHIP & ASSETS (FC_Membership_Model)
            'common_bond' => 'nullable|in:Institutional,Occupational,Residential,Associational',
            'CoM_NRMem_male' => 'nullable',
            'NRMem_female' => 'nullable',
            'NRMem_total' => 'nullable',

            'CoM_NAMem_male' => 'nullable',
            'NAMem_female' => 'nullable',
            'NAMem_total' => 'nullable',

            'CoM_TotalMem_male' => 'nullable',
            'TMem_female' => 'nullable',
            'TMem_total' => 'nullable',

            'CoM_TargetMem_male' => 'nullable',
            'TarMem_female' => 'nullable',
            'TarMem_total' => 'nullable',

            'CoM_Total_male' => 'nullable',
            'Total_female' => 'nullable',
            'Total_total' => 'nullable',

            'NoE_Fulltime_male' => 'nullable',
            'Fulltime_female' => 'nullable',
            'Fulltime_total' => 'nullable',

            'NoE_Parttime_male' => 'nullable',
            'Parttime_female' => 'nullable',
            'Parttime_total' => 'nullable',

            'NoE_Total_male' => 'nullable',
            'TotalEmp_female' => 'nullable',
            'TotalEmp_total' => 'nullable',

            'total_assets' => 'nullable',

            //OFFICERS (FC_Officers_Model)
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

            'orgstruct_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'CD_name' => 'nullable',
            'CD_design' => 'nullable',
            'CD_tell' => 'nullable',
            'CD_email' => 'nullable',
            'CD_FBacc' => 'nullable',
        ], [
            'RD_ODR_regfile.max' => 'The file may not be greater than 5MB.',
            'RD_RA_regfile.max' => 'The file may not be greater than 5MB.',
            'orgstruct_file.max' => 'The file may not be greater than 5MB.',
        ]);

        $editCoop = FC_GenInfo_Model::where('id', $id)->firstOrFail();

        if ($request->hasFile('RD_ODR_regfile')) {
            if ($editCoop->RD_ODR_regfile) {
                Storage::delete($editCoop->RD_ODR_regfile);
            }
            $RD_ODR_regfilePath = $request->file('RD_ODR_regfile')->store('storage');
            $editCoop->RD_ODR_regfile = $RD_ODR_regfilePath;
        }

        if ($request->hasFile('RD_RA_regfile')) {
            if ($editCoop->RD_RA_regfile) {
                Storage::delete($editCoop->RD_RA_regfile);
            }
            $RD_RA_regfilePath = $request->file('RD_RA_regfile')->store('storage');
            $editCoop->RD_RA_regfile = $RD_RA_regfilePath;
        }

        // Update other fields
        $editCoop->as_of = $validatedData['as_of'] ?? null;
        $editCoop->name_of_coop = $validatedData['name_of_coop'] ?? null;
        $editCoop->add_barangay = $validatedData['add_barangay'] ?? null;
        $editCoop->add_city = $validatedData['add_city'] ?? null;
        $editCoop->add_province = $validatedData['add_province'] ?? null;
        $editCoop->sector_rep = $validatedData['sector_rep'] ?? null;
        $editCoop->sector_rep_yes = $validatedData['sector_rep_yes'] ?? null;

        $editCoop->CIN = $validatedData['CIN'] ?? null;
        $editCoop->date_of_amend = $validatedData['date_of_amend'] ?? null;
        $editCoop->short_history = $validatedData['short_history'] ?? null;

        $editCoop->RD_ODR_regnum = $validatedData['RD_ODR_regnum'] ?? null;
        $editCoop->RD_ODR_regdate = isset($validatedData['RD_ODR_regdate']) ? date('Y-m-d', strtotime($validatedData['RD_ODR_regdate'])) : null;
        $editCoop->RD_ODR_regfile = $validatedData['RD_ODR_regfile'] ?? null;

        $editCoop->RD_RA_regnum = $validatedData['RD_ODR_regnum'] ?? null;
        $editCoop->RD_RA_regdate = isset($validatedData['RD_RA_regdate']) ? date('Y-m-d', strtotime($validatedData['RD_RA_regdate'])) : null;
        $editCoop->RD_RA_regfile = $validatedData['RD_RA_regfile'] ?? null;

        $editCoop->RD_memOp = $validatedData['RD_memOp'] ?? null;
        $editCoop->RD_bussOp = $validatedData['RD_bussOp'] ?? null;
        $editCoop->RD_categofCoop = $validatedData['RD_categofCoop'] ?? null;
        $editCoop->RD_typeofCoop = $validatedData['RD_typeofCoop'] ?? null;

        $editCoop->RD_genObj = $validatedData['RD_genObj'] ?? null;
        $editCoop->RD_progpas = $validatedData['RD_progpas'] ?? null;
        $editCoop->RD_SOA_date = isset($validatedData['RD_SOA_date']) ? date('Y-m-d', strtotime($validatedData['RD_SOA_date'])) : null;
        $editCoop->RD_SOA_num = $validatedData['RD_SOA_num'] ?? null;
        $editCoop->RD_categofAccre = $validatedData['RD_categofAccre'] ?? null;

        $mem = FC_Membership_Model::where('fisherfolkOrg_FC_id', $editCoop->id)->firstOrFail();
        $mem->common_bond = $validatedData['common_bond'] ?? null;
        $mem->CoM_NRMem_male = $validatedData['CoM_NRMem_male'] ?? null;
        $mem->NRMem_female = $validatedData['NRMem_female'] ?? null;
        $mem->NRMem_total =  $validatedData['NRMem_total'] ?? null;

        $mem->CoM_NAMem_male = $validatedData['CoM_NAMem_male'] ?? null;
        $mem->NAMem_female = $validatedData['NAMem_female'] ?? null;
        $mem->NAMem_total = $validatedData['NAMem_total'] ?? null;

        $mem->CoM_TotalMem_male = $validatedData['CoM_TotalMem_male'] ?? null;
        $mem->TMem_female = $validatedData['TMem_female'] ?? null;
        $mem->TMem_total = $validatedData['TMem_total'] ?? null;

        $mem->CoM_TargetMem_male = $validatedData['CoM_TargetMem_male'] ?? null;
        $mem->TarMem_female = $validatedData['TarMem_female'] ?? null;
        $mem->TarMem_total = $validatedData['TarMem_total'] ?? null;

        $mem->CoM_Total_male = $validatedData['CoM_Total_male'] ?? null;
        $mem->Total_female = $validatedData['Total_female'] ?? null;
        $mem->Total_total = $validatedData['Total_total'] ?? null;


        $mem->NoE_Fulltime_male = $validatedData['NoE_Fulltime_male'] ?? null;
        $mem->Fulltime_female = $validatedData['Fulltime_female'] ?? null;
        $mem->Fulltime_total = $validatedData['Fulltime_total'] ?? null;

        $mem->NoE_Parttime_male = $validatedData['NoE_Parttime_male'] ?? null;
        $mem->Parttime_female = $validatedData['Parttime_female'] ?? null;
        $mem->Parttime_total = $validatedData['Parttime_total'] ?? null;

        $mem->NoE_Total_male = $validatedData['NoE_Total_male'] ?? null;
        $mem->TotalEmp_female = $validatedData['TotalEmp_female'] ?? null;
        $mem->TotalEmp_total = $validatedData['TotalEmp_total'] ?? null;

        $mem->total_assets = $validatedData['total_assets'] ?? null;

        $off = FC_Officers_Model::where('fisherfolkOrg_FC_id', $editCoop->id)->firstOrFail();
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

        $orgstr = FC_OrgStruct_Model::where('fisherfolkOrg_FC_id', $editCoop->id)->firstOrFail();
        $orgstr->orgstruct_file = $validatedData['orgstruct_file'] ?? null;
        $orgstr->CD_name = $validatedData['CD_name'] ?? null;
        $orgstr->CD_design = $validatedData['CD_design'] ?? null;
        $orgstr->CD_tell = $validatedData['CD_tell'] ?? null;
        $orgstr->CD_email =  $validatedData['CD_email'] ?? null;
        $orgstr->CD_FBacc = $validatedData['CD_FBacc'] ?? null;

        $editCoop->save();
        $mem->save();
        $off->save();
        $orgstr->save();

        if ($editCoop->wasChanged() || $mem->wasChanged() || $off->wasChanged() || $orgstr->wasChanged()) {
            $sectorRep = $editCoop->sector_rep;
            switch ($sectorRep) {
                case 'Municipal':
                    return redirect('/viewCooperative/' . $editCoop->id)->with('success', 'Data has been updated successfully!');
                case 'Fishworker':
                    return redirect('/viewCooperative/' . $editCoop->id)->with('success', 'Data has been updated successfully!');
                case 'Commercial':
                    return redirect('/viewCooperative/' . $editCoop->id)->with('success', 'Data has been updated successfully!');
                case 'Women':
                    return redirect('/viewCooperative/' . $editCoop->id)->with('success', 'Data has been updated successfully!');
                case 'Youth':
                    return redirect('/viewCooperative/' . $editCoop->id)->with('success', 'Data has been updated successfully!');
                case 'IP':
                    return redirect('/viewCooperative/' . $editCoop->id)->with('success', 'Data has been updated successfully!');
                default:
                    return redirect()->back()->with('error', 'Failed to update. No changes were made.');
            }
        } else {
            return redirect()->back()->with('error', 'Failed to update. No changes were made.');
        }
    }
}

