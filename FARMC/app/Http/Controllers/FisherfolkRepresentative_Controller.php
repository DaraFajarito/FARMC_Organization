<?php

namespace App\Http\Controllers;

use App\Models\FisherfolkRepresentative_Model;
use App\Models\ProfileForm_Model;
use Illuminate\Http\Request;

class FisherfolkRepresentative_Controller extends Controller
{
    public function createFisherfolkRep(Request $request)
{
    $profile = ProfileForm_Model::latest()->first();

    $validatedData = $request->validate([
        'category' => 'nullable', // Add any other validation rules you need
        'name' => 'nullable',
        'endorsement_fisherfolk' => 'nullable',
        'atleast_one_year' => 'nullable',
        'source_of_income' => 'nullable',
        'good_moral' => 'nullable',
        'org_name' => 'nullable',
        'date_of_reg' => 'nullable',
        'date_of_accreditation' => 'nullable',
        'endorsement_attachment' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
        'aoy_attachment' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
        'soi_attachment' => 'file|max:5242880|mimes:jpeg,png',
        'gmc_attachment' => 'file|max:5242880|mimes:jpeg,png',
        'dor_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
        'doa_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
    ], [
        'endorsement_attachment.max' => 'The endorsement_attachment file may not be greater than 5MB.',
        'aoy_attachment.max' => 'The aoy_attachment file may not be greater than 5MB.',
        'soi_attachment.max' => 'The soi_attachment file may not be greater than 5MB.',
        'gmc_attachment.max' => 'The gmc_attachment file may not be greater than 5MB.',
        'dor_file.max' => 'The dor_file file may not be greater than 5MB.',
        'doa_file.max' => 'The doa_file file may not be greater than 5MB.',
        'endorsement_attachment.mimes' => 'The endorsement_attachment file must be a file of type: pdf, doc, docx.,jpeg,png',
        'aoy_attachment.mimes' => 'The aoy_attachment file must be a file of type: pdf, doc, docx.,jpeg,png',
        'soi_attachment.mimes' => 'The soi_attachment file must be a file of type: jpeg, png.',
        'gmc_attachment.mimes' => 'The gmc_attachment file must be a file of type: jpeg, png.',
        'dor_file.mimes' => 'The dor_file file must be a file of type: pdf, doc, docx.,jpeg,png',
        'doa_file.mimes' => 'The doa_file file must be a file of type: pdf, doc, docx.,jpeg,png',
    ]);

    // Store the files in a public path
    $soi_attachmentFilePath = $request->file('soi_attachment') ? $request->file('soi_attachment')->move(public_path('source_of_income_proof')) : null;
    $endorsement_attachmentFilePath = $request->file('endorsement_attachment') ? $request->file('endorsement_attachment')->move(public_path('endorsement_proof')) : null;
    $gmc_attachmentFilePath = $request->file('gmc_attachment') ? $request->file('gmc_attachment')->move(public_path('good_moral')) : null;
    $aoy_attachmentFilePath = $request->file('aoy_attachment') ? $request->file('aoy_attachment')->move(public_path('residency_proof')) : null;
    $dor_fileFilePath = $request->file('dor_file') ? $request->file('dor_file')->move(public_path('dateOfReg_proof')) : null;
    $doa_fileFilePath = $request->file('doa_file') ? $request->file('doa_file')->move(public_path('dateOfAccre_proof')) : null;

    // Create a new fisherfolkRep instance
    $fisherfolkRep = new FisherfolkRepresentative_Model();
    $fisherfolkRep->category = $validatedData['category'] ?? null;
    $fisherfolkRep->profileForm_id = $profile->id ?? null;
    $fisherfolkRep->name = $validatedData['name'] ?? null;
    $fisherfolkRep->endorsement_fisherfolk = isset($validatedData['endorsement_fisherfolk']) ? 1 : 0;
    $fisherfolkRep->atleast_one_year = isset($validatedData['atleast_one_year']) ? 1 : 0;
    $fisherfolkRep->source_of_income = isset($validatedData['source_of_income']) ? 1 : 0;
    $fisherfolkRep->good_moral = isset($validatedData['good_moral']) ? 1 : 0;
    $fisherfolkRep->org_name = $validatedData['org_name'] ?? null;
    $fisherfolkRep->date_of_reg = $validatedData['date_of_reg'] ?? null;
    $fisherfolkRep->date_of_accreditation = $validatedData['date_of_accreditation'] ?? null;

    $fisherfolkRep->soi_attachment = $soi_attachmentFilePath ? '/soi_attachment/' . $soi_attachmentFilePath->getFilename() : null;
    $fisherfolkRep->endorsement_attachment = $endorsement_attachmentFilePath ? '/good_moral/' . $endorsement_attachmentFilePath->getFilename() : null;
    $fisherfolkRep->gmc_attachment = $gmc_attachmentFilePath ? '/good_moral/' . $gmc_attachmentFilePath->getFilename() : null;
    $fisherfolkRep->aoy_attachment = $aoy_attachmentFilePath ? '/residency_proof/' . $aoy_attachmentFilePath->getFilename() : null;
    $fisherfolkRep->dor_file = $dor_fileFilePath ? '/dateOfReg_proof/' . $dor_fileFilePath->getFilename() : null;
    $fisherfolkRep->doa_file = $doa_fileFilePath ? '/dateOfAccre_proof/' . $doa_fileFilePath->getFilename() : null;

    $fisherfolkRep->save();

    if ($fisherfolkRep) {
        return redirect()->back()->with('success', 'Success!');
    } else {
        return redirect()->back()->with('failed', 'error');
    }
}

}
