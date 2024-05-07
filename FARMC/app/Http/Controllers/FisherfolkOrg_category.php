<?php

namespace App\Http\Controllers;

use App\Models\FC_GenInfo_Model;
use App\Models\FC_ListofMem_Model;
use App\Models\FC_Membership_Model;
use App\Models\FisherfolkOrganization_Model;
use App\Models\FO_ListofMem_Model;
use App\Models\FO_OAM_BoardofDir_Model;
use App\Models\FO_OAM_Committees_Model;
use Illuminate\Http\Request;


class FisherfolkOrg_category extends Controller
{
    public function display_municipal()
    {

        //DISPLAYING TABLE
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Municipal')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'Municipal')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
            ->where('sector_rep', 'Municipal')
            ->count();

        $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
            ->where('sector_rep', 'Municipal')
            ->count();

        $assCount = [
            'ASSOCIATION' => $associationCount,
            'COOPERATIVE' => $cooperativeCount,
        ];

        $data_ass = array_values($assCount);


        //COUNT

        $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->whereNotNull('sector_rep')->where('sector_rep', 'Municipal');
        })->count('mem_name');


        $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->whereNotNull('sector_rep')->where('sector_rep', 'Municipal');
        })->count('listmem_name');


        $totalMembersCount = $allfonamesCount + $allfcnamesCount;


        // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:


        $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Municipal');
        })->get();

        $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Municipal');
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
            $query->where('sector_rep', 'Municipal');
        })->where('listmem_gen', 'Male')->count();

        $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Municipal');
        })->where('listmem_gen', 'Female')->count();

        $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Municipal');
        })->where('listmem_gen', 'Others')->count();

        // Count the number of each gender in FO_ListofMem_Model with sector_rep "Municipal"
        $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Municipal');
        })->where('mem_gen', 'Male')->count();

        $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Municipal');
        })->where('mem_gen', 'Female')->count();

        $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Municipal');
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




    public function display_fishworker()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Fishworker')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'Fishworker')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
            ->where('sector_rep', 'Fishworker')
            ->count();

        $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
            ->where('sector_rep', 'Fishworker')
            ->count();

        $assCount = [
            'ASSOCIATION' => $associationCount,
            'COOPERATIVE' => $cooperativeCount,
        ];

        $data_ass = array_values($assCount);


        //COUNT

        $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->whereNotNull('sector_rep')->where('sector_rep', 'Fishworker');
        })->count('mem_name');


        $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->whereNotNull('sector_rep')->where('sector_rep', 'Fishworker');
        })->count('listmem_name');


        $totalMembersCount = $allfonamesCount + $allfcnamesCount;


        // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:


        // Retrieve members with sector_rep "Fishworker" from Fisherfolk_Organization_Model for FO_ListofMem_Model
        $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Fishworker');
        })->get();

        // Retrieve members with sector_rep "Fishworker" from FC_GenInfo_Model for FC_ListofMem_Model
        $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Fishworker');
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
            $query->where('sector_rep', 'Fishworker');
        })->where('listmem_gen', 'Male')->count();

        $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Fishworker');
        })->where('listmem_gen', 'Female')->count();

        $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Fishworker');
        })->where('listmem_gen', 'Others')->count();

        // Count the number of each gender in FO_ListofMem_Model with sector_rep "Fishworker"
        $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Fishworker');
        })->where('mem_gen', 'Male')->count();

        $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Fishworker');
        })->where('mem_gen', 'Female')->count();

        $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Fishworker');
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

    public function display_commercial()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Commercial')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'Commercial')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
            ->where('sector_rep', 'Commercial')
            ->count();

        $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
            ->where('sector_rep', 'Commercial')
            ->count();

        $assCount = [
            'ASSOCIATION' => $associationCount,
            'COOPERATIVE' => $cooperativeCount,
        ];

        $data_ass = array_values($assCount);


        //COUNT

        $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->whereNotNull('sector_rep')->where('sector_rep', 'Commercial');
        })->count('mem_name');


        $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->whereNotNull('sector_rep')->where('sector_rep', 'Commercial');
        })->count('listmem_name');


        $totalMembersCount = $allfonamesCount + $allfcnamesCount;


        // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:


        // Retrieve members with sector_rep "Commercial" from Fisherfolk_Organization_Model for FO_ListofMem_Model
        $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Commercial');
        })->get();

        // Retrieve members with sector_rep "Commercial" from FC_GenInfo_Model for FC_ListofMem_Model
        $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Commercial');
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
            $query->where('sector_rep', 'Commercial');
        })->where('listmem_gen', 'Male')->count();

        $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Commercial');
        })->where('listmem_gen', 'Female')->count();

        $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Commercial');
        })->where('listmem_gen', 'Others')->count();

        // Count the number of each gender in FO_ListofMem_Model with sector_rep "Commercial"
        $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Commercial');
        })->where('mem_gen', 'Male')->count();

        $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Commercial');
        })->where('mem_gen', 'Female')->count();

        $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Commercial');
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

    public function display_women()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Women')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'Women')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
            ->where('sector_rep', 'Women')
            ->count();

        $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
            ->where('sector_rep', 'Women')
            ->count();

        $assCount = [
            'ASSOCIATION' => $associationCount,
            'COOPERATIVE' => $cooperativeCount,
        ];

        $data_ass = array_values($assCount);


        //COUNT

        $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->whereNotNull('sector_rep')->where('sector_rep', 'Women');
        })->count('mem_name');


        $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->whereNotNull('sector_rep')->where('sector_rep', 'Women');
        })->count('listmem_name');


        $totalMembersCount = $allfonamesCount + $allfcnamesCount;


        // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:


        // Retrieve members with sector_rep "Women" from Fisherfolk_Organization_Model for FO_ListofMem_Model
        $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Women');
        })->get();

        // Retrieve members with sector_rep "Women" from FC_GenInfo_Model for FC_ListofMem_Model
        $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Women');
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
            $query->where('sector_rep', 'Women');
        })->where('listmem_gen', 'Male')->count();

        $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Women');
        })->where('listmem_gen', 'Female')->count();

        $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
            $query->where('sector_rep', 'Women');
        })->where('listmem_gen', 'Others')->count();

        // Count the number of each gender in FO_ListofMem_Model with sector_rep "Women"
        $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Women');
        })->where('mem_gen', 'Male')->count();

        $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Women');
        })->where('mem_gen', 'Female')->count();

        $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
            $query->where('sector_rep', 'Women');
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


    // ------------------------------------------------------------------//
    // ---------------------Y O U T H  F I S H E R F O L K -------------------------//
    // ------------------------------------------------------------------//
    public function display_youth()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Youth')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'Youth')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
        ->where('sector_rep', 'Youth')
        ->count();

    $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
        ->where('sector_rep', 'Youth')
        ->count();

    $assCount = [
        'ASSOCIATION' => $associationCount,
        'COOPERATIVE' => $cooperativeCount,
    ];

    $data_ass = array_values($assCount);


    //COUNT

    $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
        $query->whereNotNull('sector_rep')->where('sector_rep', 'Youth');
    })->count('mem_name');


    $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
        $query->whereNotNull('sector_rep')->where('sector_rep', 'Youth');
    })->count('listmem_name');


    $totalMembersCount = $allfonamesCount + $allfcnamesCount;


    // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:


    // Retrieve members with sector_rep "Youth" from Fisherfolk_Organization_Model for FO_ListofMem_Model
    $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
        $query->where('sector_rep', 'Youth');
    })->get();

    // Retrieve members with sector_rep "Youth" from FC_GenInfo_Model for FC_ListofMem_Model
    $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
        $query->where('sector_rep', 'Youth');
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
        $query->where('sector_rep', 'Youth');
    })->where('listmem_gen', 'Male')->count();

    $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
        $query->where('sector_rep', 'Youth');
    })->where('listmem_gen', 'Female')->count();

    $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
        $query->where('sector_rep', 'Youth');
    })->where('listmem_gen', 'Others')->count();

    // Count the number of each gender in FO_ListofMem_Model with sector_rep "Youth"
    $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
        $query->where('sector_rep', 'Youth');
    })->where('mem_gen', 'Male')->count();

    $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
        $query->where('sector_rep', 'Youth');
    })->where('mem_gen', 'Female')->count();

    $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
        $query->where('sector_rep', 'Youth');
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


    public function display_IPs()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'IPs')->get();
        $data1 = FC_GenInfo_Model::where('sector_rep', 'IPs')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')
        ->where('sector_rep', 'IPs')
        ->count();

    $cooperativeCount = FC_GenInfo_Model::where('cooperative', 'COOPERATIVE')
        ->where('sector_rep', 'IPs')
        ->count();

    $assCount = [
        'ASSOCIATION' => $associationCount,
        'COOPERATIVE' => $cooperativeCount,
    ];

    $data_ass = array_values($assCount);


    //COUNT

    $allfonamesCount = FO_ListofMem_Model::whereHas('association', function ($query) {
        $query->whereNotNull('sector_rep')->where('sector_rep', 'IPs');
    })->count('mem_name');


    $allfcnamesCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
        $query->whereNotNull('sector_rep')->where('sector_rep', 'IPs');
    })->count('listmem_name');


    $totalMembersCount = $allfonamesCount + $allfcnamesCount;


    // $distinctNamesCount = FO_ListofMem_Model::distinct()->count('mem_name'); , // each member counted only once, even if they appear multiple times), you can use the distinct() method:


    // Retrieve members with sector_rep "IPs" from Fisherfolk_Organization_Model for FO_ListofMem_Model
    $allFOMembers = FO_ListofMem_Model::whereHas('association', function ($query) {
        $query->where('sector_rep', 'IPs');
    })->get();

    // Retrieve members with sector_rep "IPs" from FC_GenInfo_Model for FC_ListofMem_Model
    $allFCMembers = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
        $query->where('sector_rep', 'IPs');
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
        $query->where('sector_rep', 'IPs');
    })->where('listmem_gen', 'Male')->count();

    $FCfemaleCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
        $query->where('sector_rep', 'IPs');
    })->where('listmem_gen', 'Female')->count();

    $FCotherCount = FC_ListofMem_Model::whereHas('cooperative', function ($query) {
        $query->where('sector_rep', 'IPs');
    })->where('listmem_gen', 'Others')->count();

    // Count the number of each gender in FO_ListofMem_Model with sector_rep "IPs"
    $FOmaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
        $query->where('sector_rep', 'IPs');
    })->where('mem_gen', 'Male')->count();

    $FOfemaleCount = FO_ListofMem_Model::whereHas('association', function ($query) {
        $query->where('sector_rep', 'IPs');
    })->where('mem_gen', 'Female')->count();

    $FOotherCount = FO_ListofMem_Model::whereHas('association', function ($query) {
        $query->where('sector_rep', 'IPs');
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
}
