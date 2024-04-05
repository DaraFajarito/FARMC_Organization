<?php

namespace App\Http\Controllers;

use App\Models\Committee_Model;
use App\Models\FisherfolkRepresentative_Model;
use App\Models\ProfileForm_Model;
use Illuminate\Http\Request;

class ProfileForm_Controller extends Controller
{
    //==========================================================================================================================================||
    //=============================================== D I S P L A Y  D A T A ===================================================================||
    public function allcomplete()
    {
        $completed = ProfileForm_Model::where('status', "COMPLETED")->get();
        if (!$completed) {
            return redirect()->back()->with('failed', 'Basic Structure record not found');
        } else {
            return view('LVL1_Profile_Form.FARMC_Officers.officers', compact('completed'));
        }
    }
    public function allincomplete()
    {
        $completed = ProfileForm_Model::where('status', "INCOMPLETE")->get();
        if (!$completed) {
            return redirect()->back()->with('failed', 'Basic Structure record not found');
        } else {
            return view('LVL1_Profile_Form.FARMC_Officers.officers', compact('completed'));
        }
    }
    public function display_officer_form($id)
    {
        $officers = ProfileForm_Model::where('id', $id)->get();
        if (!$officers) {
            return redirect()->back()->with('failed', 'Basic Structure record not found');
        } else {
            return view('LVL1_Profile_Form.FARMC_Officers.officers', compact('officers'));
        }
    }
    public function display_mandatedOfficer_form($id)
    {
        $officers = ProfileForm_Model::where('id', $id)->get();
        if (!$officers) {
            return redirect()->back()->with('failed', 'Officer record not found');
        } else {
            return view('LVL1_Profile_Form.Composition_OM.mandated_member', compact('officers'));
        }
    }
    public function display_fisherfolkRep_form($id)
    {
        $officers = ProfileForm_Model::where('id', $id)->get();
        if (!$officers) {
            return redirect()->back()->with('failed', 'Officer record not found');
        } else {
            return view('LVL1_Profile_Form.Composition_OM.fisherfolk_representative', compact('officers'));
        }
    }
    public function display_sectariat_form()
    {
        $secretariat = ProfileForm_Model::latest()->first();
        if (!$secretariat) {
            return redirect()->back()->with('failed', 'Officer record not found');
        } else {
            return view('LVL1_Profile_Form.Composition_OS.secretariat', compact('secretariat'));
        }
    }
    public function displayAll()
    {
        $data = ProfileForm_Model::get();
        $completed = ProfileForm_Model::where('status', "COMPLETED")->count();
        $incomplete = ProfileForm_Model::where('status', "INCOMPLETE")->count();

        return view('LoD.Level1.Level1', compact('data', 'completed', 'incomplete'));
    }
    public function display_level1_info($id)
    {
        $data = ProfileForm_Model::where('id', $id)->get();
        $fisherfolk = FisherfolkRepresentative_Model::where('profileForm_id', $id)->get();
        $committee = Committee_Model::where('profileForm_id', $id)->get();

        return view('LoD.Level1.L1_Viewform', compact('data', 'fisherfolk', 'committee'));
    }

    public function display_level1_incomplete()
    {
        $data = ProfileForm_Model::where('status', 'INCOMPLETE')->get();
        return view('LoD.Level1.L1_Incompletetbl', compact('data'));
    }
    public function display_level1_complete()
    {
        $data = ProfileForm_Model::where('status', 'COMPLETEd')->get();
        return view('LoD.Level1.L1_Completedtbl', compact('data'));
    }


    //==========================================================================================================================================||
    //================================================== A D D I N G  O F  D A T A =============================================================||
    public function createProfileForm(Request $request)
    {
        $validatedData = $request->validate([
            'minutes1' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'minutes2' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'photos1' => 'file|max:5242880|mimes:jpeg,png',
            'photos2' => 'file|max:5242880|mimes:jpeg,png',
            'attendance1' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'attendance2' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'internalP_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'fisherfolkR_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'fisheriesP_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'formulationR_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'municipality' => 'nullable',
            'date_organized' => 'nullable',
            'date_reorganized' => 'nullable',
            'internalP' => 'nullable',
            'province' => 'nullable',
            'fisherfolkR' => 'nullable',
            'fisheriesP' => 'nullable',
            'formulationR' => 'nullable',
        ], [
            'minutes1.max' => 'The minutes1 file may not be greater than 5MB.',
            'minutes2.max' => 'The minutes2 file may not be greater than 5MB.',
            'photos1.max' => 'The photos1 file may not be greater than 5MB.',
            'photos2.max' => 'The photos2 file may not be greater than 5MB.',
            'attendance1.max' => 'The attendance1 file may not be greater than 5MB.',
            'attendance2.max' => 'The attendance2 file may not be greater than 5MB.',
            'internalP_file.max' => 'The internalP file may not be greater than 5MB.',
            'fisherfolkR_file.max' => 'The fisherfolkR file may not be greater than 5MB.',
            'fisheriesP_file.max' => 'The fisheriesP file may not be greater than 5MB.',
            'formulationR_file.max' => 'The formulationR file may not be greater than 5MB.',
            'minutes1.mimes' => 'The minutes1 file must be a file of type: pdf, doc, docx.,jpeg,png',
            'minutes2.mimes' => 'The minutes2 file must be a file of type: pdf, doc, docx.,jpeg,png',
            'photos1.mimes' => 'The photos1 file must be a file of type: jpeg, png.',
            'photos2.mimes' => 'The photos2 file must be a file of type: jpeg, png.',
            'attendance1.mimes' => 'The attendance1 file must be a file of type: pdf, doc, docx.,jpeg,png',
            'attendance2.mimes' => 'The attendance2 file must be a file of type: pdf, doc, docx.,jpeg,png',
            'internalP_file.mimes' => 'The internalP file must be a file of type: pdf, doc, docx.,jpeg,png',
            'fisherfolkR_file.mimes' => 'The fisherfolkR file must be a file of type: pdf, doc, docx.,jpeg,png',
            'fisheriesP_file.mimes' => 'The fisheriesP file must be a file of type: pdf, doc, docx.,,jpeg,png',
            'formulationR_file.mimes' => 'The formulationR file must be a file of type: pdf, doc, docx.,,jpeg,png',
        ]);

        // Store the files in a public path
        $photos1FilePath = $request->file('photos1') ? $request->file('photos1')->move(public_path('assets/images/dateOrganized-photos')) : null;
        $minutes1FilePath = $request->file('minutes1') ? $request->file('minutes1')->move(public_path('dateOrganized-minutes')) : null;
        $photos2FilePath = $request->file('photos2') ? $request->file('photos2')->move(public_path('assets/images/dateReOrganized-photos')) : null;
        $minutes2FilePath = $request->file('minutes2') ? $request->file('minutes2')->move(public_path('dateReOrganized-minutes')) : null;
        $attendance1FilePath = $request->file('attendance1') ? $request->file('attendance1')->move(public_path('dateOrganized-attendance')) : null;
        $attendance2FilePath = $request->file('attendance2') ? $request->file('attendance2')->move(public_path('dateReOrganized-attendance')) : null;
        $internalPFilePath = $request->file('internalP_file') ? $request->file('internalP_file')->move(public_path('internalPolicy')) : null;
        $fisherfolkRFilePath = $request->file('fisherfolkR_file') ? $request->file('fisherfolkR_file')->move(public_path('fisherfolkRegistry')) : null;
        $fisheriesPFilePath = $request->file('fisheriesP_file') ? $request->file('fisheriesP_file')->move(public_path('fisheriesProfile')) : null;
        $formulationRFilePath = $request->file('formulationR_file') ? $request->file('formulationR_file')->move(public_path('formulationResolution')) : null;

        // Create a new ProfileForm instance
        $profileForm = new ProfileForm_Model();
        $profileForm->municipality = $validatedData['municipality'] ?? null;
        $profileForm->province = $validatedData['province'] ?? null;
        $profileForm->date_organized = $validatedData['date_organized'] ?? null;
        $profileForm->date_reorganized = $validatedData['date_reorganized'] ?? null;
        $profileForm->internalP = isset($validatedData['internalP']) ? 1 : 0;
        $profileForm->internalP_file = $internalPFilePath ? '/internalPolicy/' . $internalPFilePath->getFilename() : null;
        $profileForm->fisherfolkR = isset($validatedData['fisherfolkR']) ? 1 : 0;
        $profileForm->fisherfolkR_file = $fisherfolkRFilePath ? '/fisherfolkRegistry/' . $fisherfolkRFilePath->getFilename() : null;
        $profileForm->fisheriesP = isset($validatedData['fisheriesP']) ? 1 : 0;
        $profileForm->fisheriesP_file = $fisheriesPFilePath ? '/fisheriesProfile/' . $fisheriesPFilePath->getFilename() : null;
        $profileForm->formulationR = isset($validatedData['formulationR']) ? 1 : 0;
        $profileForm->formulationR_file = $formulationRFilePath ? '/formulationResolution/' . $formulationRFilePath->getFilename() : null;
        $profileForm->photos1 = $photos1FilePath ? '/assets/images/dateOrganized-photos/' . $photos1FilePath->getFilename() : null;
        $profileForm->photos2 = $photos2FilePath ? '/assets/images/dateReOrganized-photos/' . $photos2FilePath->getFilename() : null;
        $profileForm->minutes1 = $minutes1FilePath ? '/dateOrganized-minutes/' . $minutes1FilePath->getFilename() : null;
        $profileForm->minutes2 = $minutes2FilePath ? '/dateReOrganized-minutes/' . $minutes2FilePath->getFilename() : null;
        $profileForm->attendance1 = $attendance1FilePath ? '/dateOrganized-attendance/' . $attendance1FilePath->getFilename() : null;
        $profileForm->attendance2 = $attendance2FilePath ? '/dateReOrganized-attendance/' . $attendance2FilePath->getFilename() : null;

        $profileForm->save();

        if ($profileForm) {
            return redirect('/officers-form/' . $profileForm->id)->with('success', 'Success!');
        } else {
            return redirect()->back()->with('failed', 'error');
        }
    }
    public function addOfficer(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'chairperson' => 'nullable',
            'vice_chairperson' => 'nullable',
            'secretary' => 'nullable',
            'asst_sec' => 'nullable',
            'treasurer' => 'nullable',
            'asst_treas' => 'nullable',
            'auditor' => 'nullable',
            'asst_aud' => 'nullable',
            'pro1' => 'nullable',
            'pro2' => 'nullable',
            'sgt_arms1' => 'nullable',
            'sgt_arms2' => 'nullable',
            'sgt_arms3' => 'nullable',
        ]);

        // Find the record
        $officers = ProfileForm_Model::findOrFail($id);

        // Update the officers' details
        $officers->chairperson = $validatedData['chairperson'];
        $officers->vice_chairperson = $validatedData['vice_chairperson'];
        $officers->secretary = $validatedData['secretary'];
        $officers->asst_sec = $validatedData['asst_sec'];
        $officers->treasurer = $validatedData['treasurer'];
        $officers->asst_treas = $validatedData['asst_treas'];
        $officers->auditor = $validatedData['auditor'];
        $officers->asst_aud = $validatedData['asst_aud'];
        $officers->pro1 = $validatedData['pro1'];
        $officers->pro2 = $validatedData['pro2'];
        $officers->sgt_arms1 = $validatedData['sgt_arms1'];
        $officers->sgt_arms2 = $validatedData['sgt_arms2'];
        $officers->sgt_arms3 = $validatedData['sgt_arms3'];

        // Save the updated officer details
        $officers->save();

        if ($officers) {
            return redirect('/mandated-officers-form/' . $officers->id)->with('success', 'Officers created successfully.');
        }

        return redirect()->back()->with('failed', 'There was a problem updating the officers.');
    }
    public function addMandatedOfficer(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'chairpersonSB' => 'nullable',
            'mpdo' => 'nullable',
            'repmdc' => 'nullable',
            'repda' => 'nullable',
            'repngo' => 'nullable',
            'repps' => 'nullable',
            'others' => 'nullable',
        ]);

        // Find the record
        $officers = ProfileForm_Model::findOrFail($id);

        // Update the officers' details
        $officers->chairpersonSB = $validatedData['chairpersonSB'];
        $officers->mpdo = $validatedData['mpdo'];
        $officers->repmdc = $validatedData['repmdc'];
        $officers->repda = $validatedData['repda'];
        $officers->repngo = $validatedData['repngo'];
        $officers->repps = $validatedData['repps'];
        $officers->others = $validatedData['others'];

        // Save the updated officer details
        $officers->save();

        if ($officers) {
            return redirect('/fisherfolk-rep-form/' . $officers->id)->with('success', 'Mandated Officer created successfully.');
        }

        return redirect()->back()->with('failed', 'There was a problem updating the officers.');
    }
    public function addSecretariat(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name_sec' => 'nullable',
            'name_sec1' => 'nullable',
            'name_sec2' => 'nullable',
            'office_org' => 'nullable',
            'office_org1' => 'nullable',
            'office_org2' => 'nullable',
        ]);

        // Find the latest ID
        $latestId = ProfileForm_Model::latest('id')->pluck('id')->first();

        // Find the record with the latest ID
        $secretariat = ProfileForm_Model::find($latestId);


        // Update the secre$secretariat' details
        $secretariat->name_sec = $validatedData['name_sec'];
        $secretariat->name_sec1 = $validatedData['name_sec1'];
        $secretariat->name_sec2 = $validatedData['name_sec2'];
        $secretariat->office_org = $validatedData['office_org'];
        $secretariat->office_org1 = $validatedData['office_org1'];
        $secretariat->office_org2 = $validatedData['office_org2'];

        // Save the updated officer details
        $secretariat->save();

        $committee = Committee_Model::where('id', $secretariat->id)->get();

        $committeeNull = $committee->isEmpty();

        $fisherfolk = FisherfolkRepresentative_Model::where('id', $secretariat->id)->get();


        // Check if the collections are empty
        $fisherfolkNull = $fisherfolk->isEmpty();

        // Check if there's null in fisherfolk table
        foreach ($fisherfolk as $representative) {
            if (
                is_null($representative->category) ||
                is_null($representative->name) ||
                is_null($representative->endorsement_fisherfolk) ||
                is_null($representative->endorsement_attachment) ||
                is_null($representative->atleast_one_year) ||
                is_null($representative->aoy_attachment) ||
                is_null($representative->source_of_income) ||
                is_null($representative->soi_attachment) ||
                is_null($representative->good_moral) ||
                is_null($representative->gmc_attachment) ||
                is_null($representative->org_name) ||
                is_null($representative->date_of_reg) ||
                is_null($representative->date_of_accreditation) ||
                is_null($representative->dor_file) ||
                is_null($representative->doa_file)
            ) {
                $fisherfolkNull = true;
                break;
            }
        }

        // Check if all fields are null in the profileform table
        $profileFormNull = $secretariat->hasNullValues();

        // Check if any category in fisherfolkrep table is not within the specified options
        $categoryOptions = [
            'Municipal Fisherfolk',
            'Fisherworker',
            'Commercial Fishing Operator',
            'Women Fisherfolk Sector Representative',
            'Youth Fisherfolk Sector Representative',
            "Indigenous Peoples(IP's) if any",
        ];

        $categoryMismatch = false;
        foreach ($fisherfolk as $representative) {
            if (!in_array($representative->category, $categoryOptions)) {
                $categoryMismatch = true;
                break;
            }
        }

        // Determine status
        $status = $committeeNull || $fisherfolkNull || $profileFormNull || $categoryMismatch ? 'INCOMPLETE' : 'COMPLETED';
        $secretariat->update(['status' => $status]);

        // Get null fields for display
        $profileFormNullFields = $secretariat->getNullFields();

        // Find the latest committee
        $committee = Committee_Model::where('profileForm_id', $secretariat->id)->latest()->first();

        // Check if committee exists and get its null fields
        $committeeNullFields = [];
        if ($committee) {
            $committeeNullFields = $committee->getNullFields();
        }

        $fisherfolkReps = FisherfolkRepresentative_Model::where('profileForm_id', $secretariat->id)->get();
        $fisherfolkNullFields = [];
        foreach ($fisherfolkReps as $fisherfolkRep) {
            $fisherfolkNullFields = array_merge($fisherfolkNullFields, $fisherfolkRep->getNullFields());
        }
        $fisherfolkNullFields = array_unique($fisherfolkNullFields);


        if ($profileFormNullFields || $committeeNullFields || $fisherfolkNullFields) {
            return view('LoD.Level1.L1_Incomplete', compact('profileFormNullFields', 'committeeNullFields', 'fisherfolkNullFields'));
        } else {
            return view('LoD.Level1.L1_Completed');
        }
    }

    //==========================================================================================================================================||
    //================================================== C O U N T  O F  D A T A =============================================================||

    public function level1Count()
    {
        $completed = ProfileForm_Model::where('status', "COMPLETED")->count();
        $incomplete = ProfileForm_Model::where('status', "INCOMPLETE")->count();

        //chart for complete
        return view('LoD.Level1.Level1', compact('completed, incomplete'));
    }



    //kung ang specific profileform_id ay walang record ng other category sa fisherfolktable, the profileform is INCOMPLETE.
    //kung ang specific profileform_id ay walang record ng other category sa committee, the profileform is INCOMPLETE.
}
