<?php

namespace App\Http\Controllers;

use App\Models\FisherfolkOrganization_Model;
use App\Models\FO_OAM_BoardofDir_Model;
use Illuminate\Http\Request;

class FO_OAM_BoardofDir_Controller extends Controller
{
    public function display_boardofDir($id)
    {
        $boardofDir = FisherfolkOrganization_Model::where('id', $id)->get();

        return view('Fisherfolk_Organization.Municipal.form1_OAM_BoardofDir', compact('boardofDir'));
    }

    public function add_boardofDir(Request $request)
    {
        $fisherfolkOrg = FisherfolkOrganization_Model::latest()->first();

        $validatedData = $request->validate([

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

        ]);


        $board = new FO_OAM_BoardofDir_Model();
        $board->fisherfolkOrg_id = $fisherfolkOrg->id ?? null;
        $board->boardofDir_name1 = $validatedData['boardofDir_name1'] ?? null;
        $board->boardofDir_cs1 = $validatedData['boardofDir_cs1'] ?? null;
        $board->boardofDir_gen1 = $validatedData['boardofDir_gen1'] ?? null;
        $board->boardofDir_age1 =  $validatedData['boardofDir_age1'] ?? null;
        $board->boardofDir_birth1 = isset($validatedData['boardofDir_birth1']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth1'])) : null;
        $board->boardofDir_fourps1 = $validatedData['boardofDir_fourps1'] ?? null;

        $board->boardofDir_name2 = $validatedData['boardofDir_name2'] ?? null;
        $board->boardofDir_cs2 = $validatedData['boardofDir_cs2'] ?? null;
        $board->boardofDir_gen2 = $validatedData['boardofDir_gen2'] ?? null;
        $board->boardofDir_birth2 = isset($validatedData['boardofDir_birth2']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth2'])) : null;
        $board->boardofDir_age2 = $validatedData['boardofDir_age2'] ?? null;
        $board->boardofDir_fourps2 = $validatedData['boardofDir_fourps2'] ?? null;

        $board->boardofDir_name3 = $validatedData['boardofDir_name3'] ?? null;
        $board->boardofDir_cs3 = $validatedData['boardofDir_cs3'] ?? null;
        $board->boardofDir_gen3 = $validatedData['boardofDir_gen3'] ?? null;
        $board->boardofDir_birth3 = isset($validatedData['boardofDir_birth3']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth3'])) : null;
        $board->boardofDir_age3 = $validatedData['boardofDir_age3'] ?? null;
        $board->boardofDir_fourps3 = $validatedData['boardofDir_fourps3'] ?? null;

        $board->boardofDir_name4 = $validatedData['boardofDir_name4'] ?? null;
        $board->boardofDir_cs4 = $validatedData['boardofDir_cs4'] ?? null;
        $board->boardofDir_gen4 = $validatedData['boardofDir_gen4'] ?? null;
        $board->boardofDir_birth4 = isset($validatedData['boardofDir_birth4']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth4'])) : null;
        $board->boardofDir_age4 = $validatedData['boardofDir_age4'] ?? null;
        $board->boardofDir_fourps4 = $validatedData['boardofDir_fourps4'] ?? null;

        $board->boardofDir_name5 = $validatedData['boardofDir_name5'] ?? null;
        $board->boardofDir_cs5 = $validatedData['boardofDir_cs5'] ?? null;
        $board->boardofDir_gen5 = $validatedData['boardofDir_gen5'] ?? null;
        $board->boardofDir_birth5 = isset($validatedData['boardofDir_birth5']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth5'])) : null;
        $board->boardofDir_age5 = $validatedData['boardofDir_age5'] ?? null;
        $board->boardofDir_fourps5 = $validatedData['boardofDir_fourps5'] ?? null;

        $board->boardofDir_name6 = $validatedData['boardofDir_name6'] ?? null;
        $board->boardofDir_cs6 = $validatedData['boardofDir_cs6'] ?? null;
        $board->boardofDir_gen6 = $validatedData['boardofDir_gen6'] ?? null;
        $board->boardofDir_birth6 = isset($validatedData['boardofDir_birth6']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth6'])) : null;
        $board->boardofDir_age6 = $validatedData['boardofDir_age6'] ?? null;
        $board->boardofDir_fourps6 = $validatedData['boardofDir_fourps6'] ?? null;

        $board->boardofDir_name7 = $validatedData['boardofDir_name7'] ?? null;
        $board->boardofDir_cs7 = $validatedData['boardofDir_cs7'] ?? null;
        $board->boardofDir_gen7 = $validatedData['boardofDir_gen7'] ?? null;
        $board->boardofDir_birth7 = isset($validatedData['boardofDir_birth7']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth7'])) : null;
        $board->boardofDir_age7 = $validatedData['boardofDir_age7'] ?? null;
        $board->boardofDir_fourps7 = $validatedData['boardofDir_fourps7'] ?? null;

        $board->boardofDir_name8 = $validatedData['boardofDir_name8'] ?? null;
        $board->boardofDir_cs8 = $validatedData['boardofDir_cs8'] ?? null;
        $board->boardofDir_gen8 = $validatedData['boardofDir_gen8'] ?? null;
        $board->boardofDir_birth8 = isset($validatedData['boardofDir_birth8']) ? date('Y-m-d', strtotime($validatedData['boardofDir_birth8'])) : null;
        $board->boardofDir_age8 = $validatedData['boardofDir_age8'] ?? null;
        $board->boardofDir_fourps8 = $validatedData['boardofDir_fourps8'] ?? null;

        $board->save();

        if ($board) {
            return redirect('/FOform1_Committees/' . $board->id)->with('success', 'Success!');
        } else {
            return redirect()->back()->with('failed', 'error');
        }
    }

}
