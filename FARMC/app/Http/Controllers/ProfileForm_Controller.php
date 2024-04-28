<?php

namespace App\Http\Controllers;

use App\Models\BasicFunction_Model;
use App\Models\Committee_Model;
use App\Models\FisherfolkRepresentative_Model;
use App\Models\ProfileForm_Model;
use App\Models\Fully_Operational_Model;
use App\Models\Model_of_Excellence_Model;
use App\Models\Sustainability_Mechanism_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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

    // ------------------------------------------------------------//
    // ----------------------LEVEL I------------------------------//
    // ------------------------------------------------------------//

    public function display_level1_info($id)
    {
        $data = ProfileForm_Model::where('id', $id)->get();
        $fisherfolk = FisherfolkRepresentative_Model::where('profileForm_id', $id)->get();
        $committee = Committee_Model::where('profileForm_id', $id)->get();

        return view('LoD.Level1.L1_Viewform', compact('data', 'fisherfolk', 'committee'));
    }

    public function display_level1_edit($id)
    {
        $data = ProfileForm_Model::select('id')->where('id', $id)->get();
        $fisherfolk = FisherfolkRepresentative_Model::where('profileForm_id', $id)->get();
        $committee = Committee_Model::where('profileForm_id', $id)->get();

        return view('LoD.Level1.L1_Editform', compact('data', 'fisherfolk', 'committee'));
    }

    public function display_level1_incomplete()
    {
        $data = ProfileForm_Model::where('status', 'INCOMPLETE')->get();
        return view('LoD.Level1.L1_Incompletetbl', compact('data'));
    }
    public function display_level1_complete()
    {
        $data = ProfileForm_Model::where('status', 'COMPLETED')->get();
        return view('LoD.Level1.L1_Completedtbl', compact('data'));
    }

    public function display_level1_archived()
    {
        $data = ProfileForm_Model::where('status', 'ARCHIVED')->get();
        return view('LoD.Level1.L1_Archivetbl', compact('data'));
    }

    // ------------------------------------------------------------//
    // ----------------------LEVEL II------------------------------//
    // ------------------------------------------------------------//

    public function display_level2($id)
    {
        $data = ProfileForm_Model::where('id', $id)->first();

        return view('LVL2_Basic_Function.basicFunction', compact('data'));
    }

    public function display_level2_info($id)
    {
        $data = ProfileForm_Model::select('id')->where('id', $id)->get();
        // $basics = BasicFunction_Model::where('profileForm_id', $id)->get();
        $basics = BasicFunction_Model::where('profileForm_id', $id)->where('status', '!=', 'ARCHIVED')->get();

        return view('LoD.Level2.L2_Viewform', compact('data', 'basics'));
    }

    public function display_level2_edit($id)
    {
        $data = ProfileForm_Model::select('id')->where('id', $id)->get();
        // $basics = BasicFunction_Model::where('profileForm_id', $id)->get();
        $basics = BasicFunction_Model::where('profileForm_id', $id)->where('status', '!=', 'ARCHIVED')->get();

        return view('LoD.Level2.L2_Editform', compact('data', 'basics'));
    }

    public function display_level2_incomplete()
    {
        $data = BasicFunction_Model::where('status', 'INCOMPLETE')->get();
        return view('LoD.Level2.L2_Incompletetbl', compact('data'));
    }
    public function display_level2_complete()
    {
        $data = BasicFunction_Model::where('status', 'COMPLETED')->get();
        return view('LoD.Level2.L2_Completedtbl', compact('data'));
    }

    public function display_level2_archived()
    {
        $data = BasicFunction_Model::where('status', 'ARCHIVED')->get();
        return view('LoD.Level2.L2_Archivetbl', compact('data'));
    }

    // ------------------------------------------------------------//
    // ----------------------LEVEL III------------------------------//
    // ------------------------------------------------------------//

    public function display_level3($id)
    {
        $basics = BasicFunction_Model::where('id', $id)->first();
        return view('LVL3_Fully_Operational.fullyOperational', compact('basics'));
    }

    public function display_level3_info($id)
    {
        $basics = BasicFunction_Model::select('id')->where('id', $id)->get();
        // $fullyOp = Fully_Operational_Model::where('profileForm_id', $id)->get();
        $fullyOp = Fully_Operational_Model::where('profileForm_id', $id)->where('status', '!=', 'ARCHIVED')->get();

        return view('LoD.Level3.L3_Viewform', compact('basics', 'fullyOp'));
    }

    public function display_level3_edit($id)
    {
        $basics = BasicFunction_Model::select('id')->where('id', $id)->get();
        // $fullyOp = Fully_Operational_Model::where('profileForm_id', $id)->get();
        $fullyOp = Fully_Operational_Model::where('profileForm_id', $id)->where('status', '!=', 'ARCHIVED')->get();

        return view('LoD.Level3.L3_Editform', compact('basics', 'fullyOp'));
    }

    public function display_level3_incomplete()
    {
        $basics = Fully_Operational_Model::where('status', 'INCOMPLETE')->get();
        return view('LoD.Level3.L3_Incompletetbl', compact('basics'));
    }
    public function display_level3_complete()
    {
        $basics = Fully_Operational_Model::where('status', 'COMPLETED')->get();
        return view('LoD.Level3.L3_Completedtbl', compact('basics'));
    }

    public function display_level3_archived()
    {
        $basics = Fully_Operational_Model::where('status', 'ARCHIVED')->get();
        return view('LoD.Level3.L3_Archivetbl', compact('basics'));
    }




    // ------------------------------------------------------------//
    // ----------------------LEVEL IV------------------------------//
    // ------------------------------------------------------------//

    public function display_level4($id)
    {
        $fullyOp = Fully_Operational_Model::where('id', $id)->first();
        return view('LVL4_Sustainability_Mechanism.sustainabilityMechanism', compact('fullyOp'));
    }

    public function display_level4_info($id)
    {
        $fullyOp = Fully_Operational_Model::select('id')->where('id', $id)->get();
        $sustain = Sustainability_Mechanism_Model::where('profileForm_id', $id)->where('status', '!=', 'ARCHIVED')->get();

        return view('LoD.Level4.L4_Viewform', compact('fullyOp', 'sustain'));
    }

    public function display_level4_edit($id)
    {
        $fullyOp = Fully_Operational_Model::select('id')->where('id', $id)->get();
        $sustain = Sustainability_Mechanism_Model::where('profileForm_id', $id)->where('status', '!=', 'ARCHIVED')->get();


        return view('LoD.Level4.L4_Editform', compact('fullyOp', 'sustain'));
    }

    public function display_level4_incomplete()
    {
        $fullyOp = Sustainability_Mechanism_Model::where('status', 'INCOMPLETE', )->get();
        return view('LoD.Level4.L4_Incompletetbl', compact('fullyOp'));
    }

    public function display_level4_complete()
    {
        $fullyOp = Sustainability_Mechanism_Model::where('status', 'COMPLETED')->get();
        return view('LoD.Level4.L4_Completedtbl', compact('fullyOp'));
    }

    public function display_level4_archived()
    {
        $fullyOp = Sustainability_Mechanism_Model::where('status', 'ARCHIVED')->get();
        return view('LoD.Level4.L4_Archivetbl', compact('fullyOp'));
    }

    // ------------------------------------------------------------//
    // ----------------------LEVEL V------------------------------//
    // ------------------------------------------------------------//

    public function display_level5($id)
    {
        $sustain = Sustainability_Mechanism_Model::where('id', $id)->first();
        return view('LVL5_Model_of_Excellence.modelofExcellence', compact('sustain'));
    }

    public function display_level5_info($id)
    {
        $sustain = Sustainability_Mechanism_Model::select('id')->where('id', $id)->get();
        $modelEx = Model_of_Excellence_Model::where('profileForm_id', $id)->where('status', '!=', 'ARCHIVED')->get();

        return view('LoD.Level5.L5_Viewform', compact('sustain', 'modelEx'));
    }

    public function display_level5_edit($id)
    {
        $sustain = Sustainability_Mechanism_Model::select('id')->where('id', $id)->get();
        $modelEx = Model_of_Excellence_Model::where('profileForm_id', $id)->where('status', '!=', 'ARCHIVED')->get();

        return view('LoD.Level5.L5_Editform', compact('sustain', 'modelEx'));
    }

    public function display_level5_incomplete()
    {
        $sustain = Model_of_Excellence_Model::where('status', 'INCOMPLETE')->get();
        return view('LoD.Level5.L5_Incompletetbl', compact('sustain'));
    }
    public function display_level5_complete()
    {
        $sustain = Model_of_Excellence_Model::where('status', 'COMPLETED')->get();
        return view('LoD.Level5.L5_Completedtbl', compact('sustain'));
    }

    public function display_level5_archived()
    {
        $sustain = Model_of_Excellence_Model::where('status', 'ARCHIVED')->get();
        return view('LoD.Level5.L5_Archivetbl', compact('sustain'));
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

        $committee = Committee_Model::where('profileForm_id', $secretariat->id)->get();

        $committeeNull = $committee->isEmpty();

        $fisherfolk = FisherfolkRepresentative_Model::where('profileForm_id', $secretariat->id)->get();


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
        $FisherfolkcategoryOptions = [
            'Municipal Fisherfolk',
            'Fisherworker',
            'Commercial Fishing Operator',
            'Women Fisherfolk Sector Representative',
            'Youth Fisherfolk Sector Representative',
        ];

        $categories = FisherfolkRepresentative_Model::where('profileForm_id', $secretariat->id)
            ->pluck('category')
            ->toArray();

        $missingCategories = array_diff($FisherfolkcategoryOptions, $categories);

        // If you need to store the missing categories, you can do it like this:
        $missingCategoriesArray = [];

        foreach ($missingCategories as $category) {
            $missingCategoriesArray[] = $category;
        }

        // Define the options
        $CommitteeCategoryOptions = [
            'Law Enforcement & Prosecution',
            'Rehabilitation and Conservation',
            'Livelihood',
            'Research Education and Training',
            'Legislation',
            'Land and Water Use',
            'Fisherfolk Resettlement'
        ];

        // Retrieve categories from the database based on the given ID
        $categories = Committee_Model::where('profileForm_id', $secretariat->id)
            ->pluck('category')
            ->toArray();

        // Find missing categories
        $missingCCategories = array_diff($CommitteeCategoryOptions, $categories);

        // Store missing categories in an array
        $missingCommitteeCategoriesArray = [];

        foreach ($missingCCategories as $category) {
            $missingCommitteeCategoriesArray[] = $category;
        }

        // Determine status
        $status = $committeeNull || $fisherfolkNull || $profileFormNull || $missingCategoriesArray || $missingCommitteeCategoriesArray ? 'INCOMPLETE' : 'COMPLETED';
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

        if ($profileFormNullFields || $committeeNullFields || $fisherfolkNullFields || $missingCategoriesArray || $missingCommitteeCategoriesArray) {
            return view('LoD.Level1.L1_Incomplete', compact('profileFormNullFields', 'committeeNullFields', 'fisherfolkNullFields', 'missingCategoriesArray', 'missingCommitteeCategoriesArray'));
        } else {
            return view('LoD.Level1.Level1');
        }
    }

    public function addBasicFunction(Request $request, $id)
    {
        $validatedData = $request->validate([
            'mfdp' => 'nullable|in:Approved,Formulated',
            'copy1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'mindoc1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'mfo' => 'nullable|in:Approved,Formulated',
            'copy2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'mindoc2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'bantaydt' => 'nullable',
            'bantaydt_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'actfarmcbt' => 'nullable',
            'actfarmcbt_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'appfarmcbt' => 'nullable',
            'appfarmcbt_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'caseestablished' => 'nullable',
            'caseestablished_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'mfarmcoffice' => 'nullable',
            'regmeet' => 'nullable',
            'minatt_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'photodoc_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',


        ], [
            'copy1_file.max' => 'The copy1_file may not be greater than 5MB.',
            'mindoc1_file.max' => 'The mindoc1_file may not be greater than 5MB.',
            'copy2_file.max' => 'The copy2_file may not be greater than 5MB.',
            'mindoc2_file.max' => 'The mindoc2_file may not be greater than 5MB.',
            'bantaydt_file.max' => 'The bantaydt_file may not be greater than 5MB.',
            'actfarmcbt_file.max' => 'The actfarmcbt_file may not be greater than 5MB.',
            'appfarmcbt_file.max' => 'The appfarmcbt_file may not be greater than 5MB.',
            'caseestablished_file.max' => 'The caseestablished_file may not be greater than 5MB.',
            'minatt_file.max' => 'The caseestablished_file may not be greater than 5MB.',
            'photodoc_file.max' => 'The caseestablished_file may not be greater than 5MB.',
        ]);

        $copy1FilePath = $request->file('copy1_file') ? $request->file('copy1_file')->move(public_path('basic-function/copy1')) : null;
        $mindoc1FilePath = $request->file('mindoc1_file') ? $request->file('mindoc1_file')->move(public_path('basic-function/mindoc1')) : null;
        $copy2FilePath = $request->file('copy2_file') ? $request->file('copy2_file')->move(public_path('basic-function/copy2')) : null;
        $mindoc2FilePath = $request->file('mindoc2_file') ? $request->file('mindoc2_file')->move(public_path('basic-function/mindoc2')) : null;
        $bantaydtFilePath = $request->file('bantaydt_file') ? $request->file('bantaydt_file')->move(public_path('basic-function/bantaydt')) : null;
        $actfarmcbtFilePath = $request->file('actfarmcbt_file') ? $request->file('actfarmcbt_file')->move(public_path('basic-function/actfarmcbt')) : null;
        $appfarmcbtFilePath = $request->file('appfarmcbt_file') ? $request->file('appfarmcbt_file')->move(public_path('basic-function/appfarmcbt')) : null;
        $caseestablishedFilePath = $request->file('caseestablished_file') ? $request->file('caseestablished_file')->move(public_path('basic-function/caseestablished')) : null;
        $copy3FilePath = $request->file('copy3_file') ? $request->file('copy3_file')->move(public_path('basic-function/copy3')) : null;
        $minattFilePath = $request->file('minatt_file') ? $request->file('minatt_file')->move(public_path('basic-function/minatt')) : null;
        $photodocFilePath = $request->file('photodoc_file') ? $request->file('photodoc_file')->move(public_path('basic-function/photodoc')) : null;


        $basicFunction = new BasicFunction_Model();
        $basicFunction->profileForm_id = $id;
        $basicFunction->mfdp = $validatedData['mfdp'] ?? null;
        $basicFunction->copy1_file = $copy1FilePath ? '/basic-function/copy1/' . $copy1FilePath->getFilename() : null;
        $basicFunction->mindoc1_file = $mindoc1FilePath ? '/basic-function/mindoc1/' . $mindoc1FilePath->getFilename() : null;
        $basicFunction->mfo = $validatedData['mfo'] ?? null;
        $basicFunction->copy2_file = $copy2FilePath ? '/basic-function/copy2/' . $copy2FilePath->getFilename() : null;
        $basicFunction->mindoc2_file = $mindoc2FilePath ? '/basic-function/mindoc2/' . $mindoc2FilePath->getFilename() : null;
        $basicFunction->bantaydt = isset($validatedData['bantaydt']) ? 1 : 0;
        $basicFunction->bantaydt_file = $bantaydtFilePath ? '/basic-function/bantaydt/' . $bantaydtFilePath->getFilename() : null;
        $basicFunction->actfarmcbt = isset($validatedData['actfarmcbt']) ? 1 : 0;
        $basicFunction->actfarmcbt_file = $actfarmcbtFilePath ? '/basic-function/actfarmcbt/' . $actfarmcbtFilePath->getFilename() : null;
        $basicFunction->appfarmcbt = isset($validatedData['appfarmcbt']) ? 1 : 0;
        $basicFunction->appfarmcbt_file = $appfarmcbtFilePath ? '/basic-function/appfarmcbt/' . $appfarmcbtFilePath->getFilename() : null;
        $basicFunction->caseestablished = isset($validatedData['caseestablished']) ? 1 : 0;
        $basicFunction->caseestablished_file = $caseestablishedFilePath ? '/basic-function/caseestablished/' . $caseestablishedFilePath->getFilename() : null;
        $basicFunction->mfarmcoffice = $validatedData['mfarmcoffice'] ?? null;
        $basicFunction->copy3_file = $copy3FilePath ? '/basic-function/copy3/' . $copy3FilePath->getFilename() : ($request->has('copy3_file') ? 'N/A' : null);
        $basicFunction->regmeet = $request->has('regmeet') ? $validatedData['regmeet'] : null;
        $basicFunction->minatt_file = $minattFilePath   ? '/basic-function/minatt/' . $minattFilePath->getFilename() : ($request->has('minatt_file') ? 'N/A' : null);
        $basicFunction->photodoc_file = $photodocFilePath ? '/basic-function/photodoc/' . $photodocFilePath->getFilename() : ($request->has('photodoc_file') ? 'N/A' : null);


        // Save the basicFunction record
        $basicFunction->save();

        $requiredFields = [
            'profileForm_id', 'copy1_file', 'mindoc1_file', 'copy2_file', 'mindoc2_file', 'bantaydt', 'bantaydt_file', 'actfarmcbt', 'actfarmcbt_file', 'appfarmcbt', 'appfarmcbt_file', 'caseestablished', 'caseestablished_file', 'mfarmcoffice', 'copy3_file', 'regmeet',
            'minatt_file', 'photodoc_file'
        ];

        // Check if any of the required fields are null
        $incomplete = false;
        foreach ($requiredFields as $field) {
            if ($basicFunction->$field === null) {
                $incomplete = true;
                break;
            }
        }

        // Set status to 'INCOMPLETE' if 'mfdp' is 'Formulated'
        if ($basicFunction->mfdp === 'Formulated') {
            $incomplete = true;
        }

        // Set status to 'INCOMPLETE' if 'mfdp' is 'Formulated'
        if ($basicFunction->mfo === 'Formulated') {
            $incomplete = true;
        }


        // Determine the status based on null values
        $status = $incomplete ? 'INCOMPLETE' : 'COMPLETED';

        // Update the status field in the database
        $basicFunction->status = $status;
        $basicFunction->save();

        if ($basicFunction != null) {
            $profile = ProfileForm_Model::find($id);
            $profile->status = 'ARCHIVED';
            $profile->save();
        }

        // Retrieve fields with null values
        $basicFunctionNull = $basicFunction->getNullFields();


        // Redirect if null values are present, otherwise display the incomplete view
        if (!$incomplete) {
            return redirect('/level2')->with('success', 'Success!');
        } else {
            return view('LoD.Level2.L2_Incomplete', ['basicFunctionNull' => $basicFunctionNull, 'basicFunction' => $basicFunction]);
        }
    }

    public function addFullyOperational(Request $request, $id)
    {
        $validatedData = $request->validate([
            'approved_MFDP_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'imp_act1' => 'nullable',
            'imp_act1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'imp_act2' => 'nullable',
            'imp_act2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'imp_act3' => 'nullable',
            'imp_act3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'pol_prop1' => 'nullable',
            'pol_prop1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'pol_prop2' => 'nullable',
            'pol_prop2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'pol_prop3' => 'nullable',
            'pol_prop3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'rec_act1' => 'nullable',
            'rec_act1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'rec_act2' => 'nullable',
            'rec_act2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'rec_act3' => 'nullable',
            'rec_act3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'rec_iss1' => 'nullable',
            'rec_iss1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'rec_iss2' => 'nullable',
            'rec_iss2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'rec_iss3' => 'nullable',
            'rec_iss3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'part_act1' => 'nullable',
            'part_act1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'part_act2' => 'nullable',
            'part_act2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'part_act3' => 'nullable',
            'part_act3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'part_LGU1' => 'nullable',
            'part_LGU1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'part_LGU2' => 'nullable',
            'part_LGU2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'part_LGU3' => 'nullable',
            'part_LGU3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'name_com' => 'nullable',
            'sched_regmeet' => 'nullable',
            'sched_regmeet_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'wor_act1' => 'nullable',
            'wor_act1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'wor_act2' => 'nullable',
            'wor_act2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'wor_act3' => 'nullable',
            'wor_act3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
        ], [
            'approved_MFDP_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'imp_act1_file.max' => 'The imp_act1_file may not be greater than 5MB.',
            'imp_act2_file.max' => 'The imp_act2_file may not be greater than 5MB.',
            'imp_act3_file.max' => 'The imp_act3_file may not be greater than 5MB.',

            'pol_prop1_file.max' => 'The pol_prop1_file may not be greater than 5MB.',
            'pol_prop2_file.max' => 'The pol_prop2_file may not be greater than 5MB.',
            'pol_prop3_file.max' => 'The pol_prop3_file may not be greater than 5MB.',

            'rec_act1_file.max' => 'The rec_act1_file may not be greater than 5MB.',
            'rec_act2_file.max' => 'The rec_act2_file may not be greater than 5MB.',
            'rec_act3_file.max' => 'The rec_act3_file may not be greater than 5MB.',

            'rec_iss1_file.max' => 'The rec_iss1_file may not be greater than 5MB.',
            'rec_iss2_file.max' => 'The rec_iss2_file may not be greater than 5MB.',
            'rec_iss3_file.max' => 'The rec_iss3_file may not be greater than 5MB.',

            'part_act1_file.max' => 'The part_act1_file may not be greater than 5MB.',
            'part_act2_file.max' => 'The part_act2_file may not be greater than 5MB.',
            'part_act3_file.max' => 'The part_act3_file may not be greater than 5MB.',

            'part_LGU1_file.max' => 'The part_LGU1_file may not be greater than 5MB.',
            'part_LGU2_file.max' => 'The part_LGU2_file may not be greater than 5MB.',
            'part_LGU3_file.max' => 'The part_LGU3_file may not be greater than 5MB.',

            'sched_regmeet_file.max' => 'The part_LGU3_file may not be greater than 5MB.',

            'wor_act1_file.max' => 'The wor_act1_file may not be greater than 5MB.',
            'wor_act2_file.max' => 'The wor_act2_file may not be greater than 5MB.',
            'wor_act3_file.max' => 'The wor_act3_file may not be greater than 5MB.',
        ]);

        $approvedMFDPFilePath = $request->file('approved_MFDP_file') ? $request->file('approved_MFDP_file')->move(public_path('fullyOperational/approved_MFDP')) : null;

        $impact1FilePath = $request->file('imp_act1_file') ? $request->file('imp_act1_file')->move(public_path('fullyOperational/imp_act1')) : null;
        $impact2FilePath = $request->file('imp_act2_file') ? $request->file('imp_act2_file')->move(public_path('fullyOperational/imp_act2')) : null;
        $impact3FilePath = $request->file('imp_act3_file') ? $request->file('imp_act3_file')->move(public_path('fullyOperational/imp_act3')) : null;

        $polprop1FilePath = $request->file('pol_prop1_file') ? $request->file('pol_prop1_file')->move(public_path('fullyOperational/pol_prop1')) : null;
        $polprop2FilePath = $request->file('pol_prop2_file') ? $request->file('pol_prop2_file')->move(public_path('fullyOperational/pol_prop2')) : null;
        $polprop3FilePath = $request->file('pol_prop3_file') ? $request->file('pol_prop3_file')->move(public_path('fullyOperational/pol_prop3')) : null;

        $recact1FilePath = $request->file('rec_act1_file') ? $request->file('rec_act1_file')->move(public_path('fullyOperational/rec_act1')) : null;
        $recact2FilePath = $request->file('rec_act2_file') ? $request->file('rec_act2_file')->move(public_path('fullyOperational/rec_act2')) : null;
        $recact3FilePath = $request->file('rec_act3_file') ? $request->file('rec_act3_file')->move(public_path('fullyOperational/rec_act3')) : null;

        $reciss1FilePath = $request->file('rec_iss1_file') ? $request->file('rec_iss1_file')->move(public_path('fullyOperational/rec_iss1')) : null;
        $reciss2FilePath = $request->file('rec_iss2_file') ? $request->file('rec_iss2_file')->move(public_path('fullyOperational/rec_iss2')) : null;
        $reciss3FilePath = $request->file('rec_iss3_file') ? $request->file('rec_iss3_file')->move(public_path('fullyOperational/rec_iss3')) : null;

        $partact1FilePath = $request->file('part_act1_file') ? $request->file('part_act1_file')->move(public_path('fullyOperational/part_act1')) : null;
        $partact2FilePath = $request->file('part_act2_file') ? $request->file('part_act2_file')->move(public_path('fullyOperational/part_act2')) : null;
        $partact3FilePath = $request->file('part_act3_file') ? $request->file('part_act3_file')->move(public_path('fullyOperational/part_act3')) : null;

        $partLGU1FilePath = $request->file('part_LGU1_file') ? $request->file('part_LGU1_file')->move(public_path('fullyOperational/part_LGU1')) : null;
        $partLGU2FilePath = $request->file('part_LGU2_file') ? $request->file('part_LGU2_file')->move(public_path('fullyOperational/part_LGU2')) : null;
        $partLGU3FilePath = $request->file('part_LGU3_file') ? $request->file('part_LGU3_file')->move(public_path('fullyOperational/part_LGU3')) : null;

        $schedregmeetFilePath = $request->file('sched_regmeet_file') ? $request->file('sched_regmeet_file')->move(public_path('fullyOperational/sched_regmeet')) : null;

        $woract1FilePath = $request->file('wor_act1_file') ? $request->file('wor_act1_file')->move(public_path('fullyOperational/wor_act1')) : null;
        $woract2FilePath = $request->file('wor_act2_file') ? $request->file('wor_act2_file')->move(public_path('fullyOperational/wor_act2')) : null;
        $woract3FilePath = $request->file('wor_act3_file') ? $request->file('wor_act3_file')->move(public_path('fullyOperational/wor_act3')) : null;


        $fullyOperational = new Fully_Operational_Model();
        $fullyOperational->profileForm_id = $id;
        $fullyOperational->approved_MFDP_file = $approvedMFDPFilePath ? '/fullyOperational/approved_MFDP/' . $approvedMFDPFilePath->getFilename() : null;

        $fullyOperational->imp_act1 = $validatedData['imp_act1'] ?? null;
        $fullyOperational->imp_act1_file = $impact1FilePath ? '/fullyOperational/imp_act1/' . $impact1FilePath->getFilename() : null;
        $fullyOperational->imp_act2 = $validatedData['imp_act2'] ?? null;
        $fullyOperational->imp_act2_file = $impact2FilePath ? '/fullyOperational/imp_act2/' . $impact2FilePath->getFilename() : null;
        $fullyOperational->imp_act3 = $validatedData['imp_act3'] ?? null;
        $fullyOperational->imp_act3_file = $impact3FilePath ? '/fullyOperational/imp_act3/' . $impact3FilePath->getFilename() : null;

        $fullyOperational->pol_prop1 = $validatedData['pol_prop1'] ?? null;
        $fullyOperational->pol_prop1_file = $polprop1FilePath ? '/fullyOperational/pol_prop1/' . $polprop1FilePath->getFilename() : null;
        $fullyOperational->pol_prop2 = $validatedData['pol_prop2'] ?? null;
        $fullyOperational->pol_prop2_file = $polprop2FilePath ? '/fullyOperational/pol_prop2/' . $polprop2FilePath->getFilename() : null;
        $fullyOperational->pol_prop3 = $validatedData['pol_prop3'] ?? null;
        $fullyOperational->pol_prop3_file = $polprop3FilePath ? '/fullyOperational/pol_prop3/' . $polprop3FilePath->getFilename() : null;

        $fullyOperational->rec_act1 = $validatedData['rec_act1'] ?? null;
        $fullyOperational->rec_act1_file = $recact1FilePath ? '/fullyOperational/rec_act1/' . $recact1FilePath->getFilename() : null;
        $fullyOperational->rec_act2 = $validatedData['rec_act2'] ?? null;
        $fullyOperational->rec_act2_file = $recact2FilePath ? '/fullyOperational/rec_act2/' . $recact2FilePath->getFilename() : null;
        $fullyOperational->rec_act3 = $validatedData['rec_act3'] ?? null;
        $fullyOperational->rec_act3_file = $recact3FilePath   ? '/fullyOperational/rec_act3/' . $recact3FilePath->getFilename() : null;

        $fullyOperational->rec_iss1 = $validatedData['rec_iss1'] ?? null;
        $fullyOperational->rec_iss1_file = $reciss1FilePath ? '/fullyOperational/rec_iss1/' . $reciss1FilePath->getFilename() : null;
        $fullyOperational->rec_iss2 = $validatedData['rec_iss2'] ?? null;
        $fullyOperational->rec_iss2_file = $reciss2FilePath ? '/fullyOperational/rec_iss2/' . $reciss2FilePath->getFilename() : null;
        $fullyOperational->rec_iss3 = $validatedData['rec_iss3'] ?? null;
        $fullyOperational->rec_iss3_file = $reciss3FilePath ? '/fullyOperational/rec_iss3/' . $reciss3FilePath->getFilename() : null;

        $fullyOperational->part_act1 = $validatedData['part_act1'] ?? null;
        $fullyOperational->part_act1_file = $partact1FilePath ? '/fullyOperational/part_act1/' . $partact1FilePath->getFilename() : null;
        $fullyOperational->part_act2 = $validatedData['part_act2'] ?? null;
        $fullyOperational->part_act2_file = $partact2FilePath ? '/fullyOperational/part_act2/' . $partact2FilePath->getFilename() : null;
        $fullyOperational->part_act3 = $validatedData['part_act3'] ?? null;
        $fullyOperational->part_act3_file = $partact3FilePath ? '/fullyOperational/part_act3/' . $partact3FilePath->getFilename() : null;

        $fullyOperational->part_LGU1 = $validatedData['part_LGU1'] ?? null;
        $fullyOperational->part_LGU1_file = $partLGU1FilePath ? '/fullyOperational/part_LGU1/' . $partLGU1FilePath->getFilename() : null;
        $fullyOperational->part_LGU2 = $validatedData['part_LGU2'] ?? null;
        $fullyOperational->part_LGU2_file = $partLGU2FilePath ? '/fullyOperational/part_LGU2/' . $partLGU2FilePath->getFilename() : null;
        $fullyOperational->part_LGU3 = $validatedData['part_LGU3'] ?? null;
        $fullyOperational->part_LGU3_file = $partLGU3FilePath ? '/fullyOperational/part_LGU3/' . $partLGU3FilePath->getFilename() : null;

        $fullyOperational->name_com = $validatedData['name_com'] ?? null;
        $fullyOperational->sched_regmeet = $validatedData['sched_regmeet'] ?? null;
        $fullyOperational->sched_regmeet_file = $schedregmeetFilePath ? '/fullyOperational/sched_regmeet/' . $schedregmeetFilePath->getFilename() : null;

        $fullyOperational->wor_act1 = $validatedData['wor_act1'] ?? null;
        $fullyOperational->wor_act1_file = $woract1FilePath ? '/fullyOperational/wor_act1/' . $woract1FilePath->getFilename() : null;
        $fullyOperational->wor_act2 = $validatedData['wor_act2'] ?? null;
        $fullyOperational->wor_act2_file = $woract2FilePath ? '/fullyOperational/wor_act1/' . $woract2FilePath->getFilename() : null;
        $fullyOperational->wor_act3 = $validatedData['wor_act3'] ?? null;
        $fullyOperational->wor_act3_file = $woract3FilePath ? '/fullyOperational/wor_act1/' . $woract3FilePath->getFilename() : null;

        // Save the fully operational record
        $fullyOperational->save();

        // Check if any fields have null values
        $requiredFields = [
            'profileForm_id', 'approved_MFDP_file', 'imp_act1', 'imp_act1_file', 'imp_act2', 'imp_act2_file', 'imp_act3', 'imp_act3_file', 'pol_prop1', 'pol_prop1_file', 'pol_prop2', 'pol_prop2_file', 'pol_prop3', 'pol_prop3_file', 'rec_act1', 'rec_act1_file', 'rec_act2_file', 'rec_act2', 'rec_act3',
            'rec_act3_file', 'rec_iss1', 'rec_iss1_file', 'rec_iss2', 'rec_iss2_file', 'rec_iss3', 'rec_iss3_file', 'part_act1', 'part_act1_file', 'part_act2', 'part_act2_file', 'part_act3', 'part_act3_file', 'part_LGU1', 'part_LGU1_file', 'part_LGU2', 'part_LGU2_file', 'part_LGU3', 'part_LGU3_file',
            'name_com', 'sched_regmeet', 'sched_regmeet_file', 'wor_act1', 'wor_act1_file', 'wor_act2', 'wor_act2_file', 'wor_act3', 'wor_act3_file'
        ];

        // Check if any of the required fields are null
        $incomplete = false;
        foreach ($requiredFields as $field) {
            if ($fullyOperational->$field === null) {
                $incomplete = true;
                break;
            }
        }

        // Determine the status based on null values
        $status = $incomplete ? 'INCOMPLETE' : 'COMPLETED';

        // Update the status field in the database
        $fullyOperational->status = $status;
        $fullyOperational->save();

        if ($fullyOperational != null) {
            $basicFunction = BasicFunction_Model::where('profileForm_id', $id)->first();
            if ($basicFunction != null) {
                $basicFunction->status = 'ARCHIVED';
                $basicFunction->save();
            } else {
                // Handle the case where $basicFunction is null
            }
        }


        // Retrieve fields with null values
        $fullyOperationalNull = $fullyOperational->getNullFields();

        // Redirect if null values are present, otherwise display the incomplete view
        if (!$incomplete) {
            return redirect('/level3')->with('success', 'Success!');
        } else {
            return view('LoD.Level3.L3_Incomplete', ['fullyOperationalNull' => $fullyOperationalNull]);
        }
    }

    public function addSustainabilityMechanism(Request $request, $id)
    {
        $validatedData = $request->validate([
            'data_training' => 'nullable',
            'data_fishcatch' => 'nullable',
            'data_regforms' => 'nullable',
            'est_funds' => 'nullable',
            'est_funds_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'othersources1' => 'nullable|string',
            'othersources1_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'othersources2' => 'nullable|string',
            'othersources2_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'othersources3' => 'nullable|string',
            'othersources3_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
        ], [
            'est_funds_file.max' => 'The est_funds_file may not be greater than 5MB.',
            'othersources1_file.max' => 'The othersources1_file may not be greater than 5MB.',
            'othersources2_file.max' => 'The othersources2_file may not be greater than 5MB.',
            'othersources3_file.max' => 'The othersources3_file may not be greater than 5MB.',
        ]);

        $estfundsFilePath = $request->file('est_funds_file') ? $request->file('est_funds_file')->move(public_path('sustainabilityMechanism/est_funds')) : null;

        $othersources1FilePath = $request->file('othersources1_file') ? $request->file('othersources1_file')->move(public_path('sustainabilityMechanism/othersources1')) : null;
        $othersources2FilePath = $request->file('othersources2_file') ? $request->file('othersources2_file')->move(public_path('sustainabilityMechanism/othersources2')) : null;
        $othersources3FilePath = $request->file('othersources3_file') ? $request->file('othersources3_file')->move(public_path('sustainabilityMechanism/othersources3')) : null;

        $sustainabilityMech = new Sustainability_Mechanism_Model();
        $sustainabilityMech->profileForm_id = $id;

        $sustainabilityMech->data_training = $validatedData['data_training'] ?? null;
        $sustainabilityMech->data_fishcatch = $validatedData['data_fishcatch'] ?? null;
        $sustainabilityMech->data_regforms = $validatedData['data_regforms'] ?? null;
        $sustainabilityMech->est_funds = $validatedData['est_funds'] ?? null;
        $sustainabilityMech->est_funds_file = $estfundsFilePath ? '/sustainabilityMechanism/est_funds/' . $estfundsFilePath->getFilename() : null;
        $sustainabilityMech->othersources1 = $validatedData['othersources1'] ?? null;
        $sustainabilityMech->othersources1_file = $othersources1FilePath ? '/sustainabilityMechanism/othersources1/' . $othersources1FilePath->getFilename() : null;
        $sustainabilityMech->othersources2 = $validatedData['othersources2'] ?? null;
        $sustainabilityMech->othersources2_file = $othersources2FilePath ? '/sustainabilityMechanism/othersources2/' . $othersources2FilePath->getFilename() : null;
        $sustainabilityMech->othersources3 = $validatedData['othersources3'] ?? null;
        $sustainabilityMech->othersources3_file = $othersources3FilePath ? '/sustainabilityMechanism/othersources3/' . $othersources3FilePath->getFilename() : null;

        // Save the fully operational record
        $sustainabilityMech->save();

        $requiredFields = ['profileForm_id', 'data_training', 'data_fishcatch', 'data_regforms', 'est_funds', 'est_funds_file', 'othersources1', 'othersources1_file', 'othersources2', 'othersources2_file', 'othersources3', 'othersources3_file'];

        // Check if any of the required fields are null
        $incomplete = false;
        foreach ($requiredFields as $field) {
            if ($sustainabilityMech->$field === null) {
                $incomplete = true;
                break;
            }
        }


        // Determine the status based on null values
        $status = $incomplete ? 'INCOMPLETE' : 'COMPLETED';

        // Update the status field in the database
        $sustainabilityMech->status = $status;
        $sustainabilityMech->save();


        if ($sustainabilityMech != null) {
            $fullyOperational = Fully_Operational_Model::where('profileForm_id', $id)->first();
            if ($fullyOperational != null) {
                $fullyOperational->status = 'ARCHIVED';
                $fullyOperational->save();
            } else {
            }
        }

        // Retrieve fields with null values
        $sustainabilityMechNull = $sustainabilityMech->getNullFields();

        // Redirect if null values are present, otherwise display the incomplete view
        if (!$incomplete) {
            return redirect('/level4')->with('success', 'Success!');
        } else {
            return view('LoD.Level4.L4_Incomplete', ['sustainabilityMechNull' => $sustainabilityMechNull]);
        }
    }

    public function addmodelExcellence(Request $request, $id)
    {
        $validatedData = $request->validate([
            'rec_list1' => 'nullable',
            'rec_list2' => 'nullable',
            'rec_list3' => 'nullable',
            'rec_attach_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'award_plaq1' => 'nullable|string',
            'award_plaq1_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_plaq2' => 'nullable|string',
            'award_plaq2_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_plaq3' => 'nullable|string',
            'award_plaq3_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'award_cert1' => 'nullable|string',
            'award_cert1_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_cert2' => 'nullable|string',
            'award_cert2_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_cert3' => 'nullable|string',
            'award_cert3_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'award_proj1' => 'nullable|string',
            'award_proj1_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_proj2' => 'nullable|string',
            'award_proj2_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_proj3' => 'nullable|string',
            'award_proj3_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'award_trop1' => 'nullable|string',
            'award_trop1_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_trop2' => 'nullable|string',
            'award_trop2_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_trop3' => 'nullable|string',
            'award_trop3_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'iec_broch' => 'nullable|string',
            'iec_broch_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'iec_hand' => 'nullable|string',
            'iec_hand_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'iec_pub' => 'nullable|string',
            'iec_pub_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'iec_AVP' => 'nullable|string',
            'iec_AVP_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
        ], [
            'rec_attach_file.max' => 'The rec_attach_file may not be greater than 5MB.',
            'award_plaq1_file.max' => 'The award_plaq1_file may not be greater than 5MB.',
            'award_plaq2_file.max' => 'The award_plaq2_file may not be greater than 5MB.',
            'award_plaq3_file.max' => 'The award_plaq3_file may not be greater than 5MB.',
            'award_cert1_file.max' => 'The award_cert1_file may not be greater than 5MB.',
            'award_cert2_file.max' => 'The award_cert2_file may not be greater than 5MB.',
            'award_cert3_file.max' => 'The award_cert3_file may not be greater than 5MB.',
            'award_proj1_file.max' => 'The award_proj1_file may not be greater than 5MB.',
            'award_proj2_file.max' => 'The award_proj2_file may not be greater than 5MB.',
            'award_proj3_file.max' => 'The award_proj3_file may not be greater than 5MB.',
            'award_trop1_file.max' => 'The award_trop1_file may not be greater than 5MB.',
            'award_trop2_file.max' => 'The award_trop2_file may not be greater than 5MB.',
            'award_trop3_file.max' => 'The award_trop3_file may not be greater than 5MB.',
            'iec_broch_file.max' => 'The iec_broch_file may not be greater than 5MB.',
            'iec_hand_file.max' => 'The iec_hand_file may not be greater than 5MB.',
            'iec_pub_file.max' => 'The iec_pub_file may not be greater than 5MB.',
            'iec_AVP_file.max' => 'The iec_AVP_file may not be greater than 5MB.',
        ]);

        $recattachFilePath = $request->file('rec_attach_file') ? $request->file('rec_attach_file')->move(public_path('modelofExcellence/rec_attach')) : null;

        $awardplaq1FilePath = $request->file('award_plaq1_file') ? $request->file('award_plaq1_file')->move(public_path('modelofExcellence/award_plaq1')) : null;
        $awardplaq2FilePath = $request->file('award_plaq2_file') ? $request->file('award_plaq2_file')->move(public_path('modelofExcellence/award_plaq2')) : null;
        $awardplaq3FilePath = $request->file('award_plaq3_file') ? $request->file('award_plaq3_file')->move(public_path('modelofExcellence/award_plaq3')) : null;

        $awardcert1FilePath = $request->file('award_cert1_file') ? $request->file('award_cert1_file')->move(public_path('modelofExcellence/award_cert1')) : null;
        $awardcert2FilePath = $request->file('award_cert2_file') ? $request->file('award_cert2_file')->move(public_path('modelofExcellence/award_cert2')) : null;
        $awardcert3FilePath = $request->file('award_cert3_file') ? $request->file('award_cert3_file')->move(public_path('modelofExcellence/award_cert3')) : null;

        $awardproj1FilePath = $request->file('award_proj1_file') ? $request->file('award_proj1_file')->move(public_path('modelofExcellence/award_proj1')) : null;
        $awardproj2FilePath = $request->file('award_proj2_file') ? $request->file('award_proj2_file')->move(public_path('modelofExcellence/award_proj2')) : null;
        $awardproj3FilePath = $request->file('award_proj3_file') ? $request->file('award_proj3_file')->move(public_path('modelofExcellence/award_proj3')) : null;

        $awardtrop1FilePath = $request->file('award_trop1_file') ? $request->file('award_trop1_file')->move(public_path('modelofExcellence/award_trop1')) : null;
        $awardtrop2FilePath = $request->file('award_trop2_file') ? $request->file('award_trop2_file')->move(public_path('modelofExcellence/award_trop2')) : null;
        $awardtrop3FilePath = $request->file('award_trop3_file') ? $request->file('award_trop3_file')->move(public_path('modelofExcellence/award_trop3')) : null;

        $iecbrochFilePath = $request->file('iec_broch_file') ? $request->file('iec_broch_file')->move(public_path('modelofExcellence/iec_broch')) : null;
        $iechandFilePath = $request->file('iec_hand_file') ? $request->file('iec_hand_file')->move(public_path('modelofExcellence/iec_hand')) : null;
        $iecpubFilePath = $request->file('iec_pub_file') ? $request->file('iec_pub_file')->move(public_path('modelofExcellence/iec_pub')) : null;
        $iecAVPFilePath = $request->file('iec_AVP_file') ? $request->file('iec_AVP_file')->move(public_path('modelofExcellence/iec_AVP')) : null;


        $modelofExcellence = new Model_of_Excellence_Model();
        $modelofExcellence->profileForm_id = $id;
        $modelofExcellence->rec_list1 = $validatedData['rec_list1'] ?? null;
        $modelofExcellence->rec_list2 = $validatedData['rec_list2'] ?? null;
        $modelofExcellence->rec_list3 = $validatedData['rec_list3'] ?? null;
        $modelofExcellence->rec_attach_file = $recattachFilePath ? '/modelofExcellence/rec_attach/' . $recattachFilePath->getFilename() : null;

        $modelofExcellence->award_plaq1 = $validatedData['award_plaq1'] ?? null;
        $modelofExcellence->award_plaq1_file = $awardplaq1FilePath ? '/modelofExcellence/award_plaq1/' . $awardplaq1FilePath->getFilename() : null;
        $modelofExcellence->award_plaq2 = $validatedData['award_plaq2'] ?? null;
        $modelofExcellence->award_plaq2_file = $awardplaq2FilePath ? '/modelofExcellence/award_plaq2/' . $awardplaq2FilePath->getFilename() : null;
        $modelofExcellence->award_plaq3 = $validatedData['award_plaq3'] ?? null;
        $modelofExcellence->award_plaq3_file = $awardplaq3FilePath ? '/modelofExcellence/award_plaq3/' . $awardplaq3FilePath->getFilename() : null;

        $modelofExcellence->award_cert1 = $validatedData['award_cert1'] ?? null;
        $modelofExcellence->award_cert1_file = $awardcert1FilePath ? '/modelofExcellence/award_cert1/' . $awardcert1FilePath->getFilename() : null;
        $modelofExcellence->award_cert2 = $validatedData['award_cert2'] ?? null;
        $modelofExcellence->award_cert2_file = $awardcert2FilePath ? '/modelofExcellence/award_cert2/' . $awardcert2FilePath->getFilename() : null;
        $modelofExcellence->award_cert3 = $validatedData['award_cert3'] ?? null;
        $modelofExcellence->award_cert3_file = $awardcert3FilePath ? '/modelofExcellence/award_cert3/' . $awardcert3FilePath->getFilename() : null;

        $modelofExcellence->award_proj1 = $validatedData['award_proj1'] ?? null;
        $modelofExcellence->award_proj1_file = $awardproj1FilePath ? '/modelofExcellence/award_proj1/' . $awardproj1FilePath->getFilename() : null;
        $modelofExcellence->award_proj2 = $validatedData['award_proj2'] ?? null;
        $modelofExcellence->award_proj2_file = $awardproj2FilePath ? '/modelofExcellence/award_proj2/' . $awardproj2FilePath->getFilename() : null;
        $modelofExcellence->award_proj3 = $validatedData['award_proj3'] ?? null;
        $modelofExcellence->award_proj3_file = $awardproj3FilePath ? '/modelofExcellence/award_proj3/' . $awardproj3FilePath->getFilename() : null;

        $modelofExcellence->award_trop1 = $validatedData['award_trop1'] ?? null;
        $modelofExcellence->award_trop1_file = $awardtrop1FilePath ? '/modelofExcellence/award_trop1/' . $awardtrop1FilePath->getFilename() : null;
        $modelofExcellence->award_trop2 = $validatedData['award_trop2'] ?? null;
        $modelofExcellence->award_trop2_file = $awardtrop2FilePath ? '/modelofExcellence/award_trop2/' . $awardtrop2FilePath->getFilename() : null;
        $modelofExcellence->award_trop3 = $validatedData['award_trop3'] ?? null;
        $modelofExcellence->award_trop3_file = $awardtrop3FilePath ? '/modelofExcellence/award_trop3/' . $awardtrop3FilePath->getFilename() : null;

        $modelofExcellence->iec_broch = isset($validatedData['iec_broch']) ? 1 : 0;
        $modelofExcellence->iec_broch_file = $iecbrochFilePath ? '/modelofExcellence/iec_broch/' . $iecbrochFilePath->getFilename() : null;

        $modelofExcellence->iec_hand = isset($validatedData['iec_hand']) ? 1 : 0;
        $modelofExcellence->iec_hand_file = $iechandFilePath ? '/modelofExcellence/iec_hand/' . $iechandFilePath->getFilename() : null;

        $modelofExcellence->iec_pub = isset($validatedData['iec_pub']) ? 1 : 0;
        $modelofExcellence->iec_pub_file = $iecpubFilePath ? '/modelofExcellence/iec_pub/' . $iecpubFilePath->getFilename() : null;

        $modelofExcellence->iec_AVP = isset($validatedData['iec_AVP']) ? 1 : 0;
        $modelofExcellence->iec_AVP_file = $iecAVPFilePath ? '/modelofExcellence/iec_AVP/' . $iecAVPFilePath->getFilename() : null;

        // Save the fully operational record
        $modelofExcellence->save();

        $requiredFields = [
            'profileForm_id', 'rec_list1', 'rec_list2', 'rec_list3', 'rec_attach_file', 'award_plaq1', 'award_plaq1_file', 'award_plaq2', 'award_plaq2_file', 'award_plaq3', 'award_plaq3_file',
            'award_cert1', 'award_cert1_file', 'award_cert2', 'award_cert2_file', 'award_cert3', 'award_cert3_file', 'award_proj1', 'award_proj1_file', 'award_proj2', 'award_proj2_file', 'award_proj3', 'award_proj3_file',
            'award_trop1', 'award_trop1_file', 'award_trop2', 'award_trop2_file', 'award_trop3', 'award_trop3_file', 'iec_broch', 'iec_broch_file', 'iec_hand', 'iec_hand_file', 'iec_pub', 'iec_pub_file', 'iec_AVP', 'iec_AVP_file'
        ];

        // Check if any of the required fields are null
        $incomplete = false;
        foreach ($requiredFields as $field) {
            if ($modelofExcellence->$field === null) {
                $incomplete = true;
                break;
            }
        }

        // Determine the status based on null values
        $status = $incomplete ? 'INCOMPLETE' : 'COMPLETED';

        // Update the status field in the database
        $modelofExcellence->status = $status;
        $modelofExcellence->save();

        if ($modelofExcellence != null) {
            $sustainabilityMech = Sustainability_Mechanism_Model::where('profileForm_id', $id)->first();
            if ($sustainabilityMech != null) {
                $sustainabilityMech->status = 'ARCHIVED';
                $sustainabilityMech->save();
            } else {
            }
        }


        // Retrieve fields with null values
        $modelofExcellenceNull = $modelofExcellence->getNullFields();

        // Redirect if null values are present, otherwise display the incomplete view
        if (!$incomplete) {
            return redirect('/level5')->with('success', 'Success!');
        } else {
            return view('LoD.Level5.L5_Incomplete', ['modelofExcellenceNull' => $modelofExcellenceNull]);
            // return redirect('/level5');
        }
    }

    //==========================================================================================================================================||
    //================================================== E D I T I N G  O F  D A T A =============================================================||


    public function editBasicStructure(Request $request, $Id, $profileFormId)
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

            'chairpersonSB' => 'nullable',
            'mpdo' => 'nullable',
            'repmdc' => 'nullable',
            'repda' => 'nullable',
            'repngo' => 'nullable',
            'repps' => 'nullable',
            'others' => 'nullable',

            'name_sec' => 'nullable',
            'name_sec1' => 'nullable',
            'name_sec2' => 'nullable',
            'office_org' => 'nullable',
            'office_org1' => 'nullable',
            'office_org2' => 'nullable',
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

        $profileForm = ProfileForm_Model::where('id', $Id)->firstOrFail();
        $officers = ProfileForm_Model::where('profileForm', $profileFormId)->firstOrFail();
        $secretariat = ProfileForm_Model::where('profileForm', $profileFormId)->firstOrFail();

        // Delete existing files if new files are uploaded
        if ($request->hasFile('minutes1')) {
            if ($profileForm->minute1) {
                Storage::delete($profileForm->minute1);
            }
            $minutes1FilePath = $request->file('minute1')->store('profileForm/minute1');
            $profileForm->minute1 = $minutes1FilePath;
        }

        if ($request->hasFile('minutes2')) {
            if ($profileForm->minutes2) {
                Storage::delete($profileForm->minutes2);
            }
            $minutes2FilePath = $request->file('minutes2')->store('profileForm/minutes2');
            $profileForm->minutes2 = $minutes2FilePath;
        }

        if ($request->hasFile('photos1')) {
            if ($profileForm->photos1) {
                Storage::delete($profileForm->photos1);
            }
            $photos1FilePath = $request->file('photos1')->store('profileForm/photos1');
            $profileForm->photos1 = $photos1FilePath;
        }

        if ($request->hasFile('photos2')) {
            if ($profileForm->photos2) {
                Storage::delete($profileForm->photos2);
            }
            $photos2FilePath = $request->file('photos2')->store('profileForm/photos2');
            $profileForm->photos2 = $photos2FilePath;
        }

        if ($request->hasFile('attendance1')) {
            if ($profileForm->attendance1) {
                Storage::delete($profileForm->attendance1);
            }
            $attendance1FilePath = $request->file('attendance1')->store('profileForm/attendance1');
            $profileForm->attendance1 = $attendance1FilePath;
        }

        if ($request->hasFile('attendance2')) {
            if ($profileForm->attendance2) {
                Storage::delete($profileForm->attendance2);
            }
            $attendance2FilePath = $request->file('attendance2')->store('profileForm/attendance2');
            $profileForm->attendance2 = $attendance2FilePath;
        }

        if ($request->hasFile('attendance1')) {
            if ($profileForm->attendance1) {
                Storage::delete($profileForm->attendance1);
            }
            $attendance1FilePath = $request->file('attendance1')->store('profileForm/attendance1');
            $profileForm->attendance1 = $attendance1FilePath;
        }

        if ($request->hasFile('attendance2')) {
            if ($profileForm->attendance2) {
                Storage::delete($profileForm->attendance2);
            }
            $attendance2FilePath = $request->file('attendance2')->store('profileForm/attendance2');
            $profileForm->attendance2 = $attendance2FilePath;
        }

        if ($request->hasFile('internalP_file')) {
            if ($profileForm->internalP_file) {
                Storage::delete($profileForm->internalP_file);
            }
            $internalPFilePath = $request->file('internalP_file')->store('profileForm/internalP');
            $profileForm->internalP_file = $internalPFilePath;
        }

        if ($request->hasFile('fisherfolkR_file')) {
            if ($profileForm->fisherfolkR_file) {
                Storage::delete($profileForm->fisherfolkR_file);
            }
            $fisherfolkRFilePath = $request->file('fisherfolkR_file')->store('profileForm/fisherfolkR');
            $profileForm->fisherfolkR_file = $fisherfolkRFilePath;
        }

        if ($request->hasFile('fisheriesP_file')) {
            if ($profileForm->fisheriesP_file) {
                Storage::delete($profileForm->fisheriesP_file);
            }
            $fisheriesPFilePath = $request->file('fisheriesP_file')->store('profileForm/fisheriesP');
            $profileForm->fisheriesP_file = $fisheriesPFilePath;
        }

        if ($request->hasFile('formulationR_file')) {
            if ($profileForm->formulationR_file) {
                Storage::delete($profileForm->formulationR_file);
            }
            $formulationRFilePath = $request->file('formulationR_file')->store('profileForm/formulationR');
            $profileForm->formulationR_file = $formulationRFilePath;
        }
        // Update other fields
        $profileForm->municipality = $validatedData['municipality'] ?? null;
        $profileForm->province = $validatedData['province'] ?? null;
        $profileForm->date_organized = $validatedData['date_organized'] ?? null;
        $profileForm->date_reorganized = $validatedData['date_reorganized'] ?? null;
        // $profileForm->internalP = $validatedData['internalP'] ?? null;
        // $profileForm->fisherfolkR = $validatedData['fisherfolkR'] ?? null;
        // $profileForm->fisheriesP = $validatedData['fisheriesP'] ?? null;
        // $profileForm->formulationR = $validatedData['formulationR'] ?? null;

        $officers->chairperson = $validatedData['chairperson'] ?? null;
        $officers->vice_chairperson = $validatedData['vice_chairperson'] ?? null;
        $officers->secretary = $validatedData['secretary'] ?? null;
        $officers->asst_sec = $validatedData['asst_sec'] ?? null;
        $officers->treasurer = $validatedData['treasurer'] ?? null;
        $officers->asst_treas = $validatedData['asst_treas'] ?? null;
        $officers->auditor = $validatedData['auditor'] ?? null;
        $officers->asst_aud = $validatedData['asst_aud'] ?? null;
        $officers->pro1 = $validatedData['pro1'] ?? null;
        $officers->pro2 = $validatedData['pro2'] ?? null;
        $officers->sgt_arms1 = $validatedData['sgt_arms1'] ?? null;
        $officers->sgt_arms2 = $validatedData['sgt_arms2'] ?? null;
        $officers->sgt_arms3 = $validatedData['sgt_arms3'] ?? null;

        $officers->chairpersonSB = $validatedData['chairpersonSB'] ?? null;
        $officers->mpdo = $validatedData['mpdo'] ?? null;
        $officers->repmdc = $validatedData['repmdc'] ?? null;
        $officers->repda = $validatedData['repda'] ?? null;
        $officers->repngo = $validatedData['repngo'] ?? null;
        $officers->repps = $validatedData['repps'] ?? null;
        $officers->others = $validatedData['others'] ?? null;

        $secretariat->name_sec = $validatedData['name_sec'] ?? null;
        $secretariat->name_sec1 = $validatedData['name_sec1'] ?? null;
        $secretariat->name_sec2 = $validatedData['name_sec2'] ?? null;
        $secretariat->office_org = $validatedData['office_org'] ?? null;
        $secretariat->office_org1 = $validatedData['office_org1'] ?? null;
        $secretariat->office_org2 = $validatedData['office_org2'] ?? null;

        // Save the updated record
        $profileForm->save();

        $fields = [
            'municipality', 'province', 'date_organized', 'date_reorganized', 'internalP', 'fisherfolkR',
            'fisheriesP', 'formulationR', 'minutes1', 'minutes2', 'photos1', 'photos2', 'attendance1', 'attendance2', 'internalP_file', 'fisherfolkR_file', 'fisheriesP_file', 'formulationR_file',
            'chairperson', 'vicechairperson', 'chairperson', 'vice_chairperson', 'secretary', 'asst_sec', 'treasurer', 'asst_treas', 'auditor', 'asst_aud', 'pro1', 'pro2', 'sgt_arms1', 'sgt_arms2', 'sgt_arms3',
            'chairpersonSB', 'mpdo', 'repmdc', 'repda', 'repngo', 'repps', 'others', 'name_sec', 'name_sec1', 'name_sec2', 'office_org', 'office_org1', 'office_org2'
        ];

        $allFieldsFilled = true;
        foreach ($fields as $field) {
            if (empty($validatedData[$field])) {
                $allFieldsFilled = false;
                break;
            }
        }
        // Update status to 'COMPLETED' if all fields are filled
        if ($allFieldsFilled) {
            $profileForm->status = 'COMPLETED';
            $profileForm->save();
        }

        // Check if any changes were made and redirect accordingly
        if ($profileForm->wasChanged()) {
            return redirect('/L1Viewform/' . $Id)->with('success', 'Basic Structure updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update. No changes were made.');
        }
    }

    public function editBasicFunction(Request $request, $profileFormId)
    {
        $validatedData = $request->validate([
            'mfdp' => 'nullable|in:Approved,Formulated',
            'copy1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'mindoc1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'mfo' => 'nullable|in:Approved,Formulated',
            'copy2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'mindoc2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'bantaydt' => 'nullable',
            'bantaydt_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'actfarmcbt' => 'nullable',
            'actfarmcbt_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'appfarmcbt' => 'nullable',
            'appfarmcbt_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'caseestablished' => 'nullable',
            'caseestablished_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'mfarmcoffice' => 'nullable',
            'copy3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'regmeet' => 'nullable',
            'minatt_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'photodoc_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',


        ], [
            'copy1_file.max' => 'The copy1_file may not be greater than 5MB.',
            'mindoc1_file.max' => 'The mindoc1_file may not be greater than 5MB.',
            'copy2_file.max' => 'The copy2_file may not be greater than 5MB.',
            'mindoc2_file.max' => 'The mindoc2_file may not be greater than 5MB.',
            'bantaydt_file.max' => 'The bantaydt_file may not be greater than 5MB.',
            'actfarmcbt_file.max' => 'The actfarmcbt_file may not be greater than 5MB.',
            'appfarmcbt_file.max' => 'The appfarmcbt_file may not be greater than 5MB.',
            'caseestablished_file.max' => 'The caseestablished_file may not be greater than 5MB.',
            'copy3_file.max' => 'The copy3_file may not be greater than 5MB.',
            'minatt_file.max' => 'The minatt_file may not be greater than 5MB.',
            'photodoc_file.max' => 'The photodoc_file may not be greater than 5MB.',

        ]);



        $basicFunction = BasicFunction_Model::where('profileForm_id', $profileFormId)->firstOrFail();

        // Delete existing files if new files are uploaded
        if ($request->hasFile('copy1_file')) {
            if ($basicFunction->copy1_file) {
                Storage::delete($basicFunction->copy1_file);
            }
            $copy1FilePath = $request->file('copy1_file')->store('basicFunction/copy1');
            $basicFunction->copy1_file = $copy1FilePath;
        }

        if ($request->hasFile('mindoc1_file')) {
            if ($basicFunction->mindoc1_file) {
                Storage::delete($basicFunction->mindoc1_file);
            }
            $mindoc1FilePath = $request->file('mindoc1_file')->store('basicFunction/mindoc1');
            $basicFunction->mindoc1_file = $mindoc1FilePath;
        }

        if ($request->hasFile('copy2_file')) {
            if ($basicFunction->copy2_file) {
                Storage::delete($basicFunction->copy2_file);
            }
            $copy2FilePath = $request->file('copy2_file')->store('basicFunction/copy2');
            $basicFunction->copy2_file = $copy2FilePath;
        }

        if ($request->hasFile('mindoc2_fule')) {
            if ($basicFunction->mindoc2_fule) {
                Storage::delete($basicFunction->mindoc2_fule);
            }
            $mindoc2FilePath = $request->file('mindoc2_fule')->store('basicFunction/mindoc2');
            $basicFunction->mindoc2_fule = $mindoc2FilePath;
        }

        if ($request->hasFile('bantaydt_file')) {
            if ($basicFunction->bantaydt_file) {
                Storage::delete($basicFunction->bantaydt_file);
            }
            $bantaydtFilePath = $request->file('bantaydt_file')->store('basicFunction/bantaydt');
            $basicFunction->bantaydt_file = $bantaydtFilePath;
        }

        if ($request->hasFile('actfarmcbt_file')) {
            if ($basicFunction->actfarmcbt_file) {
                Storage::delete($basicFunction->actfarmcbt_file);
            }
            $actfarmcbtFilePath = $request->file('actfarmcbt_file')->store('basicFunction/actfarmcbt');
            $basicFunction->actfarmcbt_file = $actfarmcbtFilePath;
        }

        if ($request->hasFile('appfarmcbt_file')) {
            if ($basicFunction->appfarmcbt_file) {
                Storage::delete($basicFunction->appfarmcbt_file);
            }
            $appfarmcbtFilePath = $request->file('appfarmcbt_file')->store('basicFunction/appfarmcbt');
            $basicFunction->appfarmcbt_file = $appfarmcbtFilePath;
        }

        if ($request->hasFile('caseestablished_file')) {
            if ($basicFunction->caseestablished_file) {
                Storage::delete($basicFunction->caseestablished_file);
            }
            $caseestablishedFilePath = $request->file('caseestablished_file')->store('basicFunction/caseestablished');
            $basicFunction->caseestablished_file = $caseestablishedFilePath;
        }

        if ($request->hasFile('copy3_file')) {
            if ($basicFunction->copy3_file) {
                Storage::delete($basicFunction->copy3_file);
            }
            $copy3FilePath = $request->file('copy3_file')->store('basicFunction/copy3');
            $basicFunction->copy3_file = $copy3FilePath;
        }

        if ($request->hasFile('minatt_file')) {
            if ($basicFunction->minatt_file) {
                Storage::delete($basicFunction->minatt_file);
            }
            $minattFilePath = $request->file('minatt_file')->store('basicFunction/minatt');
            $basicFunction->minatt_file = $minattFilePath;
        }

        if ($request->hasFile('photodoc_file')) {
            if ($basicFunction->photodoc_file) {
                Storage::delete($basicFunction->photodoc_file);
            }
            $photodocFilePath = $request->file('photodoc_file')->store('basicFunction/photodoc');
            $basicFunction->photodoc_file = $photodocFilePath;
        }

        // Update other fields
        $basicFunction->mfdp = $validatedData['mfdp'] ?? null;
        $basicFunction->mfo = $validatedData['mfo'] ?? null;
        $basicFunction->mfarmcoffice = $validatedData['mfarmcoffice'] ?? null;
        $basicFunction->regmeet = $validatedData['regmeet'] ?? null;


        // Save the updated record
        $basicFunction->save();

        $allFieldsFilled =
            $basicFunction->mfdp &&
            $basicFunction->mfo &&
            $basicFunction->bantaydt &&
            $basicFunction->actfarmcbt &&
            $basicFunction->appfarmcbt &&
            $basicFunction->caseestablished &&
            $basicFunction->mfarmcoffice &&
            $basicFunction->regmeet &&
            // Check if all files are uploaded
            $basicFunction->copy1_file &&
            $basicFunction->mindoc1_file &&
            $basicFunction->copy2_file &&
            $basicFunction->mindoc2_file &&
            $basicFunction->bantaydt_file &&
            $basicFunction->actfarmcbt_file &&
            $basicFunction->appfarmcbt_file &&
            $basicFunction->copy3_file &&
            $basicFunction->caseestablished_file &&
            $basicFunction->minatt_file &&
            $basicFunction->photodoc_file;

        // Update status to 'COMPLETED' if all fields are filled and files are uploaded, otherwise stay 'INCOMPLETE'
        $basicFunction->status = $allFieldsFilled ? 'COMPLETED' : ($basicFunction->mfdp === 'Formulated' ? 'INCOMPLETE' : ($basicFunction->mfo === 'Formulated' ? 'INCOMPLETE' : $basicFunction->status));

        // Save the updated status
        $basicFunction->save();

        // Check if any changes were made and redirect accordingly
        if ($basicFunction->wasChanged()) {
            return redirect('/L2Viewform/' . $profileFormId)->with('success', 'Sustainability mechanism updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update. No changes were made.');
        }
    }
    public function editFullyOperational(Request $request, $profileFormId)
    {
        $validatedData = $request->validate([
            'approved_MFDP_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'imp_act1' => 'nullable',
            'imp_act1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'imp_act2' => 'nullable',
            'imp_act2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'imp_act3' => 'nullable',
            'imp_act3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'pol_prop1' => 'nullable',
            'pol_prop1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'pol_prop2' => 'nullable',
            'pol_prop2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'pol_prop3' => 'nullable',
            'pol_prop3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'rec_act1' => 'nullable',
            'rec_act1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'rec_act2' => 'nullable',
            'rec_act2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'rec_act3' => 'nullable',
            'rec_act3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'rec_iss1' => 'nullable',
            'rec_iss1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'rec_iss2' => 'nullable',
            'rec_iss2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'rec_iss3' => 'nullable',
            'rec_iss3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'part_act1' => 'nullable',
            'part_act1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'part_act2' => 'nullable',
            'part_act2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'part_act3' => 'nullable',
            'part_act3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'part_LGU1' => 'nullable',
            'part_LGU1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'part_LGU2' => 'nullable',
            'part_LGU2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'part_LGU3' => 'nullable',
            'part_LGU3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'name_com' => 'nullable',
            'sched_regmeet' => 'nullable',
            'sched_regmeet_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'wor_act1' => 'nullable',
            'wor_act1_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'wor_act2' => 'nullable',
            'wor_act2_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'wor_act3' => 'nullable',
            'wor_act3_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
        ], [
            'approved_MFDP_file' => 'file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'imp_act1_file.max' => 'The imp_act1_file may not be greater than 5MB.',
            'imp_act2_file.max' => 'The imp_act2_file may not be greater than 5MB.',
            'imp_act3_file.max' => 'The imp_act3_file may not be greater than 5MB.',

            'pol_prop1_file.max' => 'The pol_prop1_file may not be greater than 5MB.',
            'pol_prop2_file.max' => 'The pol_prop2_file may not be greater than 5MB.',
            'pol_prop3_file.max' => 'The pol_prop3_file may not be greater than 5MB.',

            'rec_act1_file.max' => 'The rec_act1_file may not be greater than 5MB.',
            'rec_act2_file.max' => 'The rec_act2_file may not be greater than 5MB.',
            'rec_act3_file.max' => 'The rec_act3_file may not be greater than 5MB.',

            'rec_iss1_file.max' => 'The rec_iss1_file may not be greater than 5MB.',
            'rec_iss2_file.max' => 'The rec_iss2_file may not be greater than 5MB.',
            'rec_iss3_file.max' => 'The rec_iss3_file may not be greater than 5MB.',

            'part_act1_file.max' => 'The part_act1_file may not be greater than 5MB.',
            'part_act2_file.max' => 'The part_act2_file may not be greater than 5MB.',
            'part_act3_file.max' => 'The part_act3_file may not be greater than 5MB.',

            'part_LGU1_file.max' => 'The part_LGU1_file may not be greater than 5MB.',
            'part_LGU2_file.max' => 'The part_LGU2_file may not be greater than 5MB.',
            'part_LGU3_file.max' => 'The part_LGU3_file may not be greater than 5MB.',

            'sched_regmeet_file.max' => 'The part_LGU3_file may not be greater than 5MB.',

            'wor_act1_file.max' => 'The wor_act1_file may not be greater than 5MB.',
            'wor_act2_file.max' => 'The wor_act2_file may not be greater than 5MB.',
            'wor_act3_file.max' => 'The wor_act3_file may not be greater than 5MB.',
        ]);


        $fullyOperational = Fully_Operational_Model::where('profileForm_id', $profileFormId)->firstOrFail();

        // Delete existing files if new files are uploaded
        if ($request->hasFile('approved_MFDP_file')) {
            if ($fullyOperational->approved_MFDP_file) {
                Storage::delete($fullyOperational->approved_MFDP_file);
            }
            $approvedMFDPFilePath = $request->file('approved_MFDP_file')->store('fullyOperational/approved_MFDP');
            $fullyOperational->approved_MFDP_file = $approvedMFDPFilePath;
        }

        if ($request->hasFile('imp_act1_file')) {
            if ($fullyOperational->imp_act1_file) {
                Storage::delete($fullyOperational->imp_act1_file);
            }
            $impact1FilePath = $request->file('imp_act1_file')->store('fullyOperational/imp_act');
            $fullyOperational->imp_act1_file = $impact1FilePath;
        }

        if ($request->hasFile('imp_act2_file')) {
            if ($fullyOperational->imp_act2_file) {
                Storage::delete($fullyOperational->imp_act2_file);
            }
            $impact2FilePath = $request->file('imp_act2_file')->store('fullyOperational/imp_act2');
            $fullyOperational->imp_act2_file = $impact2FilePath;
        }

        if ($request->hasFile('imp_act3_file')) {
            if ($fullyOperational->imp_act3_file) {
                Storage::delete($fullyOperational->imp_act3_file);
            }
            $impact3FilePath = $request->file('imp_act3_file')->store('fullyOperational/imp_act3');
            $fullyOperational->imp_act3_file = $impact3FilePath;
        }

        if ($request->hasFile('pol_prop1_file')) {
            if ($fullyOperational->pol_prop1_file) {
                Storage::delete($fullyOperational->pol_prop1_file);
            }
            $polprop1FilePath = $request->file('pol_prop1_file')->store('fullyOperational/pol_prop1');
            $fullyOperational->pol_prop1_file = $polprop1FilePath;
        }

        if ($request->hasFile('pol_prop2_file')) {
            if ($fullyOperational->pol_prop2_file) {
                Storage::delete($fullyOperational->pol_prop2_file);
            }
            $polprop2FilePath = $request->file('pol_prop2_file')->store('fullyOperational/pol_prop2');
            $fullyOperational->pol_prop2_file = $polprop2FilePath;
        }

        if ($request->hasFile('pol_prop3_file')) {
            if ($fullyOperational->pol_prop3_file) {
                Storage::delete($fullyOperational->pol_prop3_file);
            }
            $polprop3FilePath = $request->file('pol_prop3_file')->store('fullyOperational/pol_prop3');
            $fullyOperational->pol_prop3_file = $polprop3FilePath;
        }

        if ($request->hasFile('rec_act1_file')) {
            if ($fullyOperational->rec_act1_file) {
                Storage::delete($fullyOperational->rec_act1_file);
            }
            $recact1FilePath = $request->file('rec_act1_file')->store('fullyOperational/rec_act1');
            $fullyOperational->rec_act1_file = $recact1FilePath;
        }

        if ($request->hasFile('rec_act2_file')) {
            if ($fullyOperational->rec_act2_file) {
                Storage::delete($fullyOperational->rec_act2_file);
            }
            $recact2FilePath = $request->file('rec_act2_file')->store('fullyOperational/rec_act2');
            $fullyOperational->rec_act2_file = $recact2FilePath;
        }

        if ($request->hasFile('rec_act3_file')) {
            if ($fullyOperational->rec_act3_file) {
                Storage::delete($fullyOperational->rec_act3_file);
            }
            $recact3FilePath = $request->file('rec_act3_file')->store('fullyOperational/rec_act3');
            $fullyOperational->rec_act3_file = $recact3FilePath;
        }

        if ($request->hasFile('rec_iss1_file')) {
            if ($fullyOperational->rec_iss1_file) {
                Storage::delete($fullyOperational->rec_iss1_file);
            }
            $reciss1FilePath = $request->file('rec_iss1_file')->store('fullyOperational/rec_iss1');
            $fullyOperational->rec_iss1_file = $reciss1FilePath;
        }

        if ($request->hasFile('rec_iss2_file')) {
            if ($fullyOperational->rec_iss2_file) {
                Storage::delete($fullyOperational->rec_iss2_file);
            }
            $reciss2FilePath = $request->file('rec_iss2_file')->store('fullyOperational/rec_iss2');
            $fullyOperational->rec_iss2_file = $reciss2FilePath;
        }

        if ($request->hasFile('rec_iss3_file')) {
            if ($fullyOperational->rec_iss3_file) {
                Storage::delete($fullyOperational->rec_iss3_file);
            }
            $reciss3FilePath = $request->file('rec_iss3_file')->store('fullyOperational/rec_iss3');
            $fullyOperational->rec_iss3_file = $reciss3FilePath;
        }

        if ($request->hasFile('part_act1_file')) {
            if ($fullyOperational->part_act1_file) {
                Storage::delete($fullyOperational->part_act1_file);
            }
            $partact1FilePath = $request->file('part_act1_file')->store('fullyOperational/part_act1');
            $fullyOperational->part_act1_file = $partact1FilePath;
        }

        if ($request->hasFile('part_act2_file')) {
            if ($fullyOperational->part_act2_file) {
                Storage::delete($fullyOperational->part_act2_file);
            }
            $partact2FilePath = $request->file('part_act2_file')->store('fullyOperational/part_act2');
            $fullyOperational->part_act2_file = $partact2FilePath;
        }

        if ($request->hasFile('part_act3_file')) {
            if ($fullyOperational->part_act3_file) {
                Storage::delete($fullyOperational->part_act3_file);
            }
            $partact3FilePath = $request->file('part_act3_file')->store('fullyOperational/part_act3');
            $fullyOperational->part_act3_file = $partact3FilePath;
        }

        if ($request->hasFile('part_LGU1_file')) {
            if ($fullyOperational->part_LGU1_file) {
                Storage::delete($fullyOperational->part_LGU1_file);
            }
            $partLGU1FilePath = $request->file('part_LGU1_file')->store('fullyOperational/part_LGU1');
            $fullyOperational->part_LGU1_file = $partLGU1FilePath;
        }

        if ($request->hasFile('part_LGU2_file')) {
            if ($fullyOperational->part_LGU2_file) {
                Storage::delete($fullyOperational->part_LGU2_file);
            }
            $partLGU2FilePath = $request->file('part_LGU2_file')->store('fullyOperational/part_LGU2');
            $fullyOperational->part_LGU2_file = $partLGU2FilePath;
        }

        if ($request->hasFile('part_LGU3_file')) {
            if ($fullyOperational->part_LGU3_file) {
                Storage::delete($fullyOperational->part_LGU3_file);
            }
            $partLGU3FilePath = $request->file('part_LGU3_file')->store('fullyOperational/part_LGU3');
            $fullyOperational->part_LGU3_file = $partLGU3FilePath;
        }

        if ($request->hasFile('sched_regmeet_file')) {
            if ($fullyOperational->sched_regmeet_file) {
                Storage::delete($fullyOperational->sched_regmeet_file);
            }
            $schedregmeetFilePath = $request->file('sched_regmeet_file')->store('fullyOperational/sched_regmeet');
            $fullyOperational->sched_regmeet_file = $schedregmeetFilePath;
        }

        if ($request->hasFile('wor_act1_file')) {
            if ($fullyOperational->wor_act1_file) {
                Storage::delete($fullyOperational->wor_act1_file);
            }
            $woract1FilePath = $request->file('wor_act1_file')->store('fullyOperational/wor_act1');
            $fullyOperational->wor_act1_file = $woract1FilePath;
        }

        if ($request->hasFile('wor_act2_file')) {
            if ($fullyOperational->wor_act2_file) {
                Storage::delete($fullyOperational->wor_act2_file);
            }
            $woract2FilePath = $request->file('wor_act2_file')->store('fullyOperational/wor_act2');
            $fullyOperational->wor_act2_file = $woract2FilePath;
        }

        if ($request->hasFile('wor_act3_file')) {
            if ($fullyOperational->wor_act3_file) {
                Storage::delete($fullyOperational->wor_act3_file);
            }
            $woract3FilePath = $request->file('wor_act3_file')->store('fullyOperational/wor_act3');
            $fullyOperational->wor_act3_file = $woract3FilePath;
        }

        // Update other fields
        $fullyOperational->imp_act1 = $validatedData['imp_act1'] ?? null;
        $fullyOperational->imp_act2 = $validatedData['imp_act2'] ?? null;
        $fullyOperational->imp_act3 = $validatedData['imp_act3'] ?? null;

        $fullyOperational->pol_prop1 = $validatedData['pol_prop1'] ?? null;
        $fullyOperational->pol_prop2 = $validatedData['pol_prop2'] ?? null;
        $fullyOperational->pol_prop3 = $validatedData['pol_prop3'] ?? null;

        $fullyOperational->rec_act1 = $validatedData['rec_act1'] ?? null;
        $fullyOperational->rec_act2 = $validatedData['rec_act2'] ?? null;
        $fullyOperational->rec_act3 = $validatedData['rec_act3'] ?? null;

        $fullyOperational->rec_iss1 = $validatedData['rec_iss1'] ?? null;
        $fullyOperational->rec_iss2 = $validatedData['rec_iss2'] ?? null;
        $fullyOperational->rec_iss3 = $validatedData['rec_iss3'] ?? null;

        $fullyOperational->part_act1 = $validatedData['part_act1'] ?? null;
        $fullyOperational->part_act2 = $validatedData['part_act2'] ?? null;
        $fullyOperational->part_act3 = $validatedData['part_act3'] ?? null;

        $fullyOperational->part_LGU1 = $validatedData['part_LGU1'] ?? null;
        $fullyOperational->part_LGU2 = $validatedData['part_LGU2'] ?? null;
        $fullyOperational->part_LGU3 = $validatedData['part_LGU3'] ?? null;

        $fullyOperational->name_com = $validatedData['name_com'] ?? null;
        $fullyOperational->sched_regmeet = $validatedData['sched_regmeet'] ?? null;

        $fullyOperational->wor_act1 = $validatedData['wor_act1'] ?? null;
        $fullyOperational->wor_act2 = $validatedData['wor_act2'] ?? null;
        $fullyOperational->wor_act3 = $validatedData['wor_act3'] ?? null;

        // Save the updated record
        $fullyOperational->save();

        // $fields = [
        //     'profileForm_id','approved_MFDP_file', 'imp_act1', 'imp_act1_file', 'imp_act2', 'imp_act2_file', 'imp_act3', 'imp_act3_file', 'pol_prop1', 'pol_prop1_file', 'pol_prop2', 'pol_prop2_file', 'pol_prop3', 'pol_prop3_file', 'rec_act1', 'rec_act1_file', 'rec_act2_file', 'rec_act2', 'rec_act3',
        //     'rec_act3_file', 'rec_iss1', 'rec_iss1_file', 'rec_iss2', 'rec_iss2_file', 'rec_iss3', 'rec_iss3_file', 'part_act1', 'part_act1_file', 'part_act2', 'part_act2_file', 'part_act3', 'part_act3_file', 'part_LGU1', 'part_LGU1_file', 'part_LGU2', 'part_LGU2_file', 'part_LGU3', 'part_LGU3_file',
        //     'name_com', 'sched_regmeet', 'sched_regmeet_file', 'wor_act1', 'wor_act1_file', 'wor_act2', 'wor_act2_file', 'wor_act3', 'wor_act3_file'
        // ];

        // $allFieldsFilled = true;
        // foreach ($fields as $field) {
        //     if (empty($validatedData[$field])) {
        //         $allFieldsFilled = false;
        //         break;
        //     }
        // }
        // // Update status to 'COMPLETED' if all fields are filled
        // if ($allFieldsFilled) {
        //     $fullyOperational->status = 'COMPLETED';
        //     $fullyOperational->save();
        // }

        if (
            // Check if all fields are filled
            $fullyOperational->imp_act1 && $fullyOperational->imp_act2 && $fullyOperational->imp_act3 &&
            $fullyOperational->pol_prop1 && $fullyOperational->pol_prop2 && $fullyOperational->pol_prop3 &&
            $fullyOperational->rec_act1 && $fullyOperational->rec_act2 && $fullyOperational->rec_act3 &&
            $fullyOperational->rec_iss1 && $fullyOperational->rec_iss2 && $fullyOperational->rec_iss3 &&
            $fullyOperational->part_act1 && $fullyOperational->part_act2 && $fullyOperational->part_act3 &&
            $fullyOperational->part_LGU1 && $fullyOperational->part_LGU2 && $fullyOperational->part_LGU3 &&
            $fullyOperational->name_com && $fullyOperational->sched_regmeet &&
            $fullyOperational->wor_act1 && $fullyOperational->wor_act2 && $fullyOperational->wor_act3 &&
            // Check if all files are uploaded
            $fullyOperational->approved_MFDP_file &&
            $fullyOperational->imp_act1_file && $fullyOperational->imp_act2_file && $fullyOperational->imp_act3_file &&
            $fullyOperational->pol_prop1_file && $fullyOperational->pol_prop2_file && $fullyOperational->pol_prop3_file &&
            $fullyOperational->rec_act1_file && $fullyOperational->rec_act2_file && $fullyOperational->rec_act3_file &&
            $fullyOperational->rec_iss1_file && $fullyOperational->rec_iss2_file && $fullyOperational->rec_iss3_file &&
            $fullyOperational->part_act1_file && $fullyOperational->part_act2_file && $fullyOperational->part_act3_file &&
            $fullyOperational->part_LGU1_file && $fullyOperational->part_LGU2_file && $fullyOperational->part_LGU3_file &&
            $fullyOperational->sched_regmeet_file &&
            $fullyOperational->wor_act1_file && $fullyOperational->wor_act2_file && $fullyOperational->wor_act3_file
        ) {
            // Update status to completed
            $fullyOperational->status = 'COMPLETED';
        }

        // Save the updated status
        $fullyOperational->save();

        // Check if any changes were made and redirect accordingly
        if ($fullyOperational->wasChanged()) {
            return redirect('/L3Viewform/' . $profileFormId)->with('success', 'Sustainability mechanism updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update. No changes were made.');
        }
    }

    public function editSustainabilityMechanism(Request $request, $profileFormId)
    {
        $validatedData = $request->validate([
            'data_training' => 'nullable',
            'data_fishcatch' => 'nullable',
            'data_regforms' => 'nullable',
            'est_funds' => 'nullable',
            'est_funds_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'othersources1' => 'nullable|string',
            'othersources1_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'othersources2' => 'nullable|string',
            'othersources2_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'othersources3' => 'nullable|string',
            'othersources3_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
        ], [
            'est_funds_file.max' => 'The est_funds_file may not be greater than 5MB.',
            'othersources1_file.max' => 'The othersources1_file may not be greater than 5MB.',
            'othersources2_file.max' => 'The othersources2_file may not be greater than 5MB.',
            'othersources3_file.max' => 'The othersources3_file may not be greater than 5MB.',
        ]);


        $sustainabilityMech = Sustainability_Mechanism_Model::where('profileForm_id', $profileFormId)->firstOrFail();

        // Delete existing files if new files are uploaded
        if ($request->hasFile('est_funds_file')) {
            if ($sustainabilityMech->est_funds_file) {
                Storage::delete($sustainabilityMech->est_funds_file);
            }
            $estfundsFilePath = $request->file('est_funds_file')->store('sustainabilityMechanism/est_funds');
            $sustainabilityMech->est_funds_file = $estfundsFilePath;
        }

        if ($request->hasFile('othersources1_file')) {
            if ($sustainabilityMech->othersources1_file) {
                Storage::delete($sustainabilityMech->othersources1_file);
            }
            $othersources1FilePath = $request->file('othersources1_file')->store('sustainabilityMechanism/othersources1');
            $sustainabilityMech->othersources1_file = $othersources1FilePath;
        }

        if ($request->hasFile('othersources2_file')) {
            if ($sustainabilityMech->othersources2_file) {
                Storage::delete($sustainabilityMech->othersources2_file);
            }
            $othersources2FilePath = $request->file('othersources2_file')->store('sustainabilityMechanism/othersources2');
            $sustainabilityMech->othersources2_file = $othersources2FilePath;
        }

        if ($request->hasFile('othersources3_file')) {
            if ($sustainabilityMech->othersources3_file) {
                Storage::delete($sustainabilityMech->othersources3_file);
            }
            $othersources3FilePath = $request->file('othersources3_file')->store('sustainabilityMechanism/othersources3');
            $sustainabilityMech->othersources3_file = $othersources3FilePath;
        }

        // Update other fields
        $sustainabilityMech->data_training = $validatedData['data_training'] ?? null;
        $sustainabilityMech->data_fishcatch = $validatedData['data_fishcatch'] ?? null;
        $sustainabilityMech->data_regforms = $validatedData['data_regforms'] ?? null;
        $sustainabilityMech->est_funds = $validatedData['est_funds'] ?? null;
        $sustainabilityMech->othersources1 = $validatedData['othersources1'] ?? null;
        $sustainabilityMech->othersources2 = $validatedData['othersources2'] ?? null;
        $sustainabilityMech->othersources3 = $validatedData['othersources3'] ?? null;

        $sustainabilityMech->save();

        // Check if any of the required fields are empty
        $requiredFields = ['data_training', 'data_fishcatch', 'data_regforms', 'est_funds', 'othersources1', 'othersources2', 'othersources3'];
        $allFieldsFilled = true;
        foreach ($requiredFields as $field) {
            if (empty($sustainabilityMech->$field)) {
                $allFieldsFilled = false;
                break;
            }
        }

        // Update status to 'COMPLETED' if all fields are filled
        if ($allFieldsFilled) {
            $sustainabilityMech->status = 'COMPLETED';
        } else {
            $sustainabilityMech->status = 'INCOMPLETE';
        }
        $sustainabilityMech->save();

        // Check if any changes were made and redirect accordingly
        if ($sustainabilityMech->wasChanged()) {
            return redirect('/L4Viewform/' . $profileFormId)->with('success', 'Sustainability mechanism updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update. No changes were made.');
        }
    }

    public function editmodelExcellence(Request $request, $profileFormId)
    {
        $validatedData = $request->validate([
            'rec_list1' => 'nullable',
            'rec_list2' => 'nullable',
            'rec_list3' => 'nullable',
            'rec_attach_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'award_plaq1' => 'nullable|string',
            'award_plaq1_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_plaq2' => 'nullable|string',
            'award_plaq2_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_plaq3' => 'nullable|string',
            'award_plaq3_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'award_cert1' => 'nullable|string',
            'award_cert1_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_cert2' => 'nullable|string',
            'award_cert2_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_cert3' => 'nullable|string',
            'award_cert3_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'award_proj1' => 'nullable|string',
            'award_proj1_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_proj2' => 'nullable|string',
            'award_proj2_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_proj3' => 'nullable|string',
            'award_proj3_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'award_trop1' => 'nullable|string',
            'award_trop1_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_trop2' => 'nullable|string',
            'award_trop2_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'award_trop3' => 'nullable|string',
            'award_trop3_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',

            'iec_broch' => 'nullable|string',
            'iec_broch_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'iec_hand' => 'nullable|string',
            'iec_hand_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'iec_pub' => 'nullable|string',
            'iec_pub_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
            'iec_AVP' => 'nullable|string',
            'iec_AVP_file' => 'nullable|file|max:5242880|mimes:pdf,doc,docx,jpeg,png',
        ], [
            'rec_attach_file.max' => 'The rec_attach_file may not be greater than 5MB.',
            'award_plaq1_file.max' => 'The award_plaq1_file may not be greater than 5MB.',
            'award_plaq2_file.max' => 'The award_plaq2_file may not be greater than 5MB.',
            'award_plaq3_file.max' => 'The award_plaq3_file may not be greater than 5MB.',
            'award_cert1_file.max' => 'The award_cert1_file may not be greater than 5MB.',
            'award_cert2_file.max' => 'The award_cert2_file may not be greater than 5MB.',
            'award_cert3_file.max' => 'The award_cert3_file may not be greater than 5MB.',
            'award_proj1_file.max' => 'The award_proj1_file may not be greater than 5MB.',
            'award_proj2_file.max' => 'The award_proj2_file may not be greater than 5MB.',
            'award_proj3_file.max' => 'The award_proj3_file may not be greater than 5MB.',
            'award_trop1_file.max' => 'The award_trop1_file may not be greater than 5MB.',
            'award_trop2_file.max' => 'The award_trop2_file may not be greater than 5MB.',
            'award_trop3_file.max' => 'The award_trop3_file may not be greater than 5MB.',
            'iec_broch_file.max' => 'The iec_broch_file may not be greater than 5MB.',
            'iec_hand_file.max' => 'The iec_hand_file may not be greater than 5MB.',
            'iec_pub_file.max' => 'The iec_pub_file may not be greater than 5MB.',
            'iec_AVP_file.max' => 'The iec_AVP_file may not be greater than 5MB.',
        ]);

        // $sustainabilityMech = Sustainability_Mechanism_Model::findOrFail($id);

        $modelofExcellence = Model_of_Excellence_Model::where('profileForm_id', $profileFormId)->firstOrFail();

        // Delete existing files if new files are uploaded
        if ($request->hasFile('rec_attach_file')) {
            if ($modelofExcellence->rec_attach_file) {
                Storage::delete($modelofExcellence->rec_attach_file);
            }
            $recattachFilePath = $request->file('rec_attach_file')->store('modelofExcellenceanism/rec_attach');
            $modelofExcellence->rec_attach_file = $recattachFilePath;
        }

        if ($request->hasFile('award_plaq1_file')) {
            if ($modelofExcellence->award_plaq1_file) {
                Storage::delete($modelofExcellence->award_plaq1_file);
            }
            $awardplaq1FilePath = $request->file('award_plaq1_file')->store('modelofExcellenceanism/award_plaq1');
            $modelofExcellence->award_plaq1_file = $awardplaq1FilePath;
        }

        if ($request->hasFile('award_plaq2_file')) {
            if ($modelofExcellence->award_plaq2_file) {
                Storage::delete($modelofExcellence->award_plaq2_file);
            }
            $awardplaq2FilePath = $request->file('award_plaq2_file')->store('modelofExcellenceanism/award_plaq2');
            $modelofExcellence->award_plaq2_file = $awardplaq2FilePath;
        }

        if ($request->hasFile('award_plaq3_file')) {
            if ($modelofExcellence->award_plaq3_file) {
                Storage::delete($modelofExcellence->award_plaq3_file);
            }
            $awardplaq3FilePath = $request->file('award_plaq3_file')->store('modelofExcellenceanism/award_plaq3');
            $modelofExcellence->award_plaq3_file = $awardplaq3FilePath;
        }

        if ($request->hasFile('award_cert1_file')) {
            if ($modelofExcellence->award_cert1_file) {
                Storage::delete($modelofExcellence->award_cert1_file);
            }
            $awardcert1FilePath = $request->file('award_cert1_file')->store('modelofExcellenceanism/award_cert1');
            $modelofExcellence->award_cert1_file = $awardcert1FilePath;
        }

        if ($request->hasFile('award_cert2_file')) {
            if ($modelofExcellence->award_cert2_file) {
                Storage::delete($modelofExcellence->award_cert2_file);
            }
            $awardcert2FilePath = $request->file('award_cert2_file')->store('modelofExcellenceanism/award_cert2');
            $modelofExcellence->award_cert2_file = $awardcert2FilePath;
        }

        if ($request->hasFile('award_cert3_file')) {
            if ($modelofExcellence->award_cert3_file) {
                Storage::delete($modelofExcellence->award_cert3_file);
            }
            $awardcert3FilePath = $request->file('award_cert3_file')->store('modelofExcellenceanism/award_cert3');
            $modelofExcellence->award_cert3_file = $awardcert3FilePath;
        }

        if ($request->hasFile('award_proj1_file')) {
            if ($modelofExcellence->award_proj1_file) {
                Storage::delete($modelofExcellence->award_proj1_file);
            }
            $awardproj1FilePath = $request->file('award_proj1_file')->store('modelofExcellenceanism/award_proj1');
            $modelofExcellence->award_proj1_file = $awardproj1FilePath;
        }

        if ($request->hasFile('award_proj2_file')) {
            if ($modelofExcellence->award_proj2_file) {
                Storage::delete($modelofExcellence->award_proj2_file);
            }
            $awardproj2FilePath = $request->file('award_proj2_file')->store('modelofExcellenceanism/award_proj2');
            $modelofExcellence->award_proj2_file = $awardproj2FilePath;
        }

        if ($request->hasFile('award_proj3_file')) {
            if ($modelofExcellence->award_proj3_file) {
                Storage::delete($modelofExcellence->award_proj3_file);
            }
            $awardproj3FilePath = $request->file('award_proj3_file')->store('modelofExcellenceanism/award_proj3');
            $modelofExcellence->award_proj3_file = $awardproj3FilePath;
        }

        if ($request->hasFile('award_trop1_file')) {
            if ($modelofExcellence->award_trop1_file) {
                Storage::delete($modelofExcellence->award_trop1_file);
            }
            $awardtrop1FilePath = $request->file('award_trop1_file')->store('modelofExcellenceanism/award_trop1');
            $modelofExcellence->award_trop1_file = $awardtrop1FilePath;
        }

        if ($request->hasFile('award_trop2_file')) {
            if ($modelofExcellence->award_trop2_file) {
                Storage::delete($modelofExcellence->award_trop2_file);
            }
            $awardtrop2FilePath = $request->file('award_trop2_file')->store('modelofExcellenceanism/award_trop2');
            $modelofExcellence->award_trop2_file = $awardtrop2FilePath;
        }

        if ($request->hasFile('award_trop3_file')) {
            if ($modelofExcellence->award_trop3_file) {
                Storage::delete($modelofExcellence->award_trop3_file);
            }
            $awardtrop3FilePath = $request->file('award_trop3_file')->store('modelofExcellenceanism/award_trop3');
            $modelofExcellence->award_trop3_file = $awardtrop3FilePath;
        }

        if ($request->hasFile('iec_broch_file')) {
            if ($modelofExcellence->iec_broch_file) {
                Storage::delete($modelofExcellence->iec_broch_file);
            }
            $iecbrochFilePath = $request->file('iec_broch_file')->store('modelofExcellenceanism/iec_broch');
            $modelofExcellence->iec_broch_file = $iecbrochFilePath;
        }

        if ($request->hasFile('iec_hand_file')) {
            if ($modelofExcellence->iec_hand_file) {
                Storage::delete($modelofExcellence->iec_hand_file);
            }
            $iechandFilePath = $request->file('iec_hand_file')->store('modelofExcellenceanism/iec_hand');
            $modelofExcellence->iec_hand_file = $iechandFilePath;
        }

        if ($request->hasFile('iec_pub_file')) {
            if ($modelofExcellence->iec_pub_file) {
                Storage::delete($modelofExcellence->iec_pub_file);
            }
            $iecpubFilePath = $request->file('iec_pub_file')->store('modelofExcellenceanism/iec_pub');
            $modelofExcellence->iec_pub_file = $iecpubFilePath;
        }

        if ($request->hasFile('iec_AVP_file')) {
            if ($modelofExcellence->iec_AVP_file) {
                Storage::delete($modelofExcellence->iec_AVP_file);
            }
            $iecAVPFilePath = $request->file('iec_AVP_file')->store('modelofExcellenceanism/iec_AVP');
            $modelofExcellence->iec_AVP_file = $iecAVPFilePath;
        }

        // Update other fields
        $modelofExcellence->rec_list1 = $validatedData['rec_list1'] ?? null;
        $modelofExcellence->rec_list2 = $validatedData['rec_list2'] ?? null;
        $modelofExcellence->rec_list3 = $validatedData['rec_list3'] ?? null;
        $modelofExcellence->award_plaq1 = $validatedData['award_plaq1'] ?? null;
        $modelofExcellence->award_plaq2 = $validatedData['award_plaq2'] ?? null;
        $modelofExcellence->award_plaq3 = $validatedData['award_plaq3'] ?? null;
        $modelofExcellence->award_cert1 = $validatedData['award_cert1'] ?? null;
        $modelofExcellence->award_cert2 = $validatedData['award_cert2'] ?? null;
        $modelofExcellence->award_cert3 = $validatedData['award_cert3'] ?? null;
        $modelofExcellence->award_proj1 = $validatedData['award_proj1'] ?? null;
        $modelofExcellence->award_proj2 = $validatedData['award_proj2'] ?? null;
        $modelofExcellence->award_proj3 = $validatedData['award_proj3'] ?? null;
        $modelofExcellence->award_trop1 = $validatedData['award_trop1'] ?? null;
        $modelofExcellence->award_trop2 = $validatedData['award_trop2'] ?? null;
        $modelofExcellence->award_trop3 = $validatedData['award_trop3'] ?? null;


        // Save the updated record
        $modelofExcellence->save();

        if (
            // Check if all fields are filled
            $modelofExcellence->rec_list1 && $modelofExcellence->rec_list2 && $modelofExcellence->rec_list3 &&
            $modelofExcellence->award_plaq1 && $modelofExcellence->award_plaq2 && $modelofExcellence->award_plaq3 &&
            $modelofExcellence->award_cert1 && $modelofExcellence->award_cert2 && $modelofExcellence->award_cert3 &&
            $modelofExcellence->award_proj1 && $modelofExcellence->award_proj2 && $modelofExcellence->award_proj3 &&
            $modelofExcellence->award_trop1 && $modelofExcellence->award_trop2 && $modelofExcellence->award_trop3 &&

            // Check if all files are uploaded
            $modelofExcellence->rec_attach_file &&
            $modelofExcellence->award_plaq1_file && $modelofExcellence->award_plaq2_file && $modelofExcellence->award_plaq3_file &&
            $modelofExcellence->award_cert1_file && $modelofExcellence->award_cert2_file && $modelofExcellence->award_cert3_file &&
            $modelofExcellence->award_proj1_file && $modelofExcellence->award_proj2_file && $modelofExcellence->award_proj3_file &&
            $modelofExcellence->award_trop1_file && $modelofExcellence->award_trop2_file && $modelofExcellence->award_trop3_file &&
            $modelofExcellence->iec_broch_file && $modelofExcellence->iec_hand_file && $modelofExcellence->iec_pub_file &&
            $modelofExcellence->iec_AVP_file
        ) {
            // Update status to completed
            $modelofExcellence->status = 'COMPLETED';
        }

        // Save the updated status
        $modelofExcellence->save();

        // Check if any changes were made and redirect accordingly
        if ($modelofExcellence->wasChanged()) {
            return redirect('/L5Viewform/' . $profileFormId)->with('success', 'Sustainability mechanism updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update. No changes were made.');
        }
    }

    //==========================================================================================================================================||
    //================================================== A R C H I V I N G  O F  D A T A ===============================================================||

    public function L1moveToArchived($id)
    {
        $dataEntry = ProfileForm_Model::find($id);

        if ($dataEntry) {
            $dataEntry->status = 'ARCHIVED';
            $dataEntry->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found.');
        }
    }

    public function L2moveToArchived($id)
    {
        $dataEntry = BasicFunction_Model::find($id);

        if ($dataEntry) {
            $dataEntry->status = 'ARCHIVED';
            $dataEntry->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found.');
        }
    }

    public function L3moveToArchived($id)
    {
        $dataEntry = Fully_Operational_Model::find($id);

        if ($dataEntry) {
            $dataEntry->status = 'ARCHIVED';
            $dataEntry->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found.');
        }
    }

    public function L4moveToArchived($id)
    {
        $dataEntry = Sustainability_Mechanism_Model::find($id);

        if ($dataEntry) {
            $dataEntry->status = 'ARCHIVED';
            $dataEntry->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found.');
        }
    }

    public function L5moveToArchived($id)
    {
        $dataEntry = Model_of_Excellence_Model::find($id);

        if ($dataEntry) {
            $dataEntry->status = 'ARCHIVED';
            $dataEntry->save();

            return redirect()->back()->with('success', 'Data moved to archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Data entry not found.');
        }
    }





    //==========================================================================================================================================||
    //================================================== C O U N T  O F  D A T A ===============================================================||



    public function level2Count()
    {
        $data = BasicFunction_Model::get();
        $completedbasic = BasicFunction_Model::where('status', "COMPLETED")->count();
        $incompletebasic = BasicFunction_Model::where('status', "INCOMPLETE")->count();

        //chart for complete
        return view('LoD.Level2.Level2', compact('completedbasic', 'incompletebasic', 'data'));
    }

    public function level3Count()
    {
        $data = Fully_Operational_Model::get();
        $completedfully = Fully_Operational_Model::where('status', "COMPLETED")->count();
        $incompletefully = Fully_Operational_Model::where('status', "INCOMPLETE")->count();

        //chart for complete
        return view('LoD.Level3.Level3', compact('completedfully', 'incompletefully', 'data'));
    }

    public function level4Count()
    {
        $data = Sustainability_Mechanism_Model::get();
        $completedsustain = Sustainability_Mechanism_Model::where('status', "COMPLETED")->count();
        $incompletesustain = Sustainability_Mechanism_Model::where('status', "INCOMPLETE")->count();

        //chart for complete
        return view('LoD.Level4.Level4', compact('completedsustain', 'incompletesustain', 'data'));
    }

    public function level5Count()
    {
        $data = Model_of_Excellence_Model::get();
        $completedmodel = Model_of_Excellence_Model::where('status', "COMPLETED")->count();
        $incompletemodel = Model_of_Excellence_Model::where('status', "INCOMPLETE")->count();

        //chart for complete
        return view('LoD.Level5.Level5', compact('completedmodel', 'incompletemodel', 'data'));
    }


    public function allLevelCount()
    {
        $allcominc1 = ProfileForm_Model::where('status', '!=', 'ARCHIVED')->count();
        $allcominc2 = BasicFunction_Model::where('status', '!=', 'ARCHIVED')->count();
        $allcominc3 = Fully_Operational_Model::where('status', '!=', 'ARCHIVED')->count();
        $allcominc4 = Sustainability_Mechanism_Model::where('status', '!=', 'ARCHIVED')->count();
        $allcominc5 = Model_of_Excellence_Model::where('status', '!=', 'ARCHIVED')->count();

        $completedCount = DB::table('basic_function')
            ->selectRaw('count(*) as count')
            ->where('status', 'COMPLETED')
            ->union(
                DB::table('fully_functional')
                    ->selectRaw('count(*) as count')
                    ->where('status', 'COMPLETED')
            )
            ->union(
                DB::table('sustainability_mechanism')
                    ->selectRaw('count(*) as count')
                    ->where('status', 'COMPLETED')
            )
            ->union(
                DB::table('model_excellence')
                    ->selectRaw('count(*) as count')
                    ->where('status', 'COMPLETED')
            )
            ->sum('count');

        echo $completedCount;


        //chart for complete
        return view('dashboard', compact('allcominc1', 'allcominc2', 'allcominc3', 'allcominc4', 'allcominc5', 'completedCount'));
    }

    //==========================================================================================================================================||
    //================================================== C O U N T  O F  D A T A =============================================================||



}
