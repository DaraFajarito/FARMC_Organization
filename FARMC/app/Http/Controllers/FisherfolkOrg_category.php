<?php

namespace App\Http\Controllers;

use App\Models\FisherfolkOrganization_Model;
use Illuminate\Http\Request;

class FisherfolkOrg_category extends Controller
{
    public function display_municipal()
    {

        $data = FisherfolkOrganization_Model::where('sector_rep', 'Municipal')->get();

        $associationCount = FisherfolkOrganization_Model::where('association', 'ASSOCIATION')->count();
        // $fishworkerCount = FisherfolkOrganization_Model::where('comp_mem', 'Fishworker')->count();

        $assCount = [
            'ASSOCIATION' => $associationCount,
        ];

        $label_ass = array_keys($assCount);
        $data_ass = array_values($assCount);


        return view('Fisherfolk_Organization.Municipal.municipal', compact('data', 'label_ass', 'data_ass'));
    }
    public function display_fishworker()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Fishworker')->get();
        return view('Fisherfolk_Organization.Fishworker.fishworker', compact('data'));
    }

    public function display_commercial()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Commercial')->get();
        return view('Fisherfolk_Organization.Commercial.commercial', compact('data'));
    }

    public function display_women()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Women')->get();
        return view('Fisherfolk_Organization.Women_Fisherfolk.women_fisherfolk', compact('data'));
    }

    public function display_youth()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'Youth')->get();
        return view('Fisherfolk_Organization.Youth_Fisherfolk.youth_fisherfolk', compact('data'));
    }

    public function display_IPs()
    {
        $data = FisherfolkOrganization_Model::where('sector_rep', 'IPs')->get();
        return view('Fisherfolk_Organization.IPs.IPs', compact('data'));
    }
}
