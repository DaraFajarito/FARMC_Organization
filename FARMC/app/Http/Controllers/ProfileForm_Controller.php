<?php

namespace App\Http\Controllers;

use App\Models\BasicFunction_Model;
use App\Models\Committee_Model;
use App\Models\FisherfolkRepresentative_Model;
use App\Models\ProfileForm_Model;
use App\Models\Fully_Operational_Model;
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
        $basics = BasicFunction_Model::where('profileForm_id', $id)->get();

        return view('LoD.Level2.L2_Viewform', compact('data', 'basics'));
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
 
    // ------------------------------------------------------------//
    // ----------------------LEVEL III------------------------------//
    // ------------------------------------------------------------//
    
    public function display_level3($id)
    {
        // $data = ProfileForm_Model::where('id', $id)->first();
        $basics = BasicFunction_Model::where('id', $id)->first();
        return view('LVL3_Fully_Operational.fullyOperational', compact('basics',));
    }
    
    public function display_level3_info($id)
    {
        $basics = BasicFunction_Model::select('id')->where('id', $id)->get();
        $fullyOp = Fully_Operational_Model::where('profileForm_id', $id)->get();

        return view('LoD.Level3.L3_Viewform', compact('basics', 'fullyOp'));
    }

    public function display_level3_incomplete()
    {
        $basics = Fully_Operational_Model::where('status', 'INCOMPLETE')->get();
        return view('LoD.Level3.L3_Incompletetbl', compact('basics'));
    }
    public function display_level3_complete()
    {
        $basics = Fully_Operational_Model::where('status', 'COMPLETED')->get();
        return view('LoD.Level.3L3_Completedtbl', compact('basics'));
    }
 

    


    //=======================================   ===================================================================================================||
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
            return view('LoD.Level1.L1_Completed');
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
    

        ], [
            'copy1_file.max' => 'The copy1_file may not be greater than 5MB.',
            'mindoc1_file.max' => 'The mindoc1_file may not be greater than 5MB.',
            'copy2_file.max' => 'The copy2_file may not be greater than 5MB.',
            'mindoc2_file.max' => 'The mindoc2_file may not be greater than 5MB.',
            'bantaydt_file.max' => 'The bantaydt_file may not be greater than 5MB.',
            'actfarmcbt_file.max' => 'The actfarmcbt_file may not be greater than 5MB.',
            'appfarmcbt_file.max' => 'The appfarmcbt_file may not be greater than 5MB.',
            'caseestablished_file.max' => 'The caseestablished_file may not be greater than 5MB.',
        ]);

        $approvedMFDPFilePath = $request->file('copy1_file') ? $request->file('copy1_file')->move(public_path('basic-function/copy1')) : null;
        $impact1FilePath = $request->file('mindoc1_file') ? $request->file('mindoc1_file')->move(public_path('basic-function/mindoc1')) : null;
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
        $basicFunction->copy1_file = $approvedMFDPFilePath ? '/basic-function/copy1/' . $approvedMFDPFilePath->getFilename() : null;
        $basicFunction->mindoc1_file = $impact1FilePath ? '/basic-function/mindoc1/' . $impact1FilePath->getFilename() : null;
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
        $basicFunction->regmeet = $request->has('regmeet') ? $validatedData['regmeet'] : 'N/A';
        $basicFunction->minatt_file = $minattFilePath   ? '/basic-function/minatt/' . $minattFilePath->getFilename() : ($request->has('minatt_file') ? 'N/A' : null);
        $basicFunction->photodoc_file = $photodocFilePath ? '/basic-function/photodoc/' . $photodocFilePath->getFilename() : ($request->has('photodoc_file') ? 'N/A' : null);

     
        // Save the basicFunction record
        $basicFunction->save();

        // Check if any fields have null values
        $basicNull = $basicFunction->hasNullValues();

        // Determine the status based on null values
        $status = $basicNull ? 'INCOMPLETE' : 'COMPLETED';

        // Update the status field in the database
        $basicFunction->status = $status;
        $basicFunction->save();

        // Retrieve fields with null values
        $basicFunctionNull = $basicFunction->getNullFields();

        // Redirect if null values are present, otherwise display the incomplete view
        if ($basicNull) {
            return redirect('/level2')->with('success', 'Success!');
        } else {
            return view('LoD.Level2.L2_Incomplete', ['basicFunctionNull' => $basicFunctionNull]);
        }
    }

    public function addFullyOperational (Request $request, $id)
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

            'sched_regmeet.max' => 'The part_LGU3_file may not be greater than 5MB.',

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
        $fullyNull =$fullyOperational->hasNullValues();

        // Determine the status based on null values
        $status = $fullyNull ? 'INCOMPLETE' : 'COMPLETED';

        // Update the status field in the database
       $fullyOperational->status = $status;
       $fullyOperational->save();

        // Retrieve fields with null values
       $fullyOperationalNull =$fullyOperational->getNullFields();

        // Redirect if null values are present, otherwise display the incomplete view
        if ($fullyNull) {
            return redirect('/level3')->with('success', 'Success!');
        } else {
            return view('LoD.Level3.L3_Incomplete', ['fullyOperationalNull' =>$fullyOperationalNull]);
        }
    }

    //==========================================================================================================================================||
    //================================================== C O U N T  O F  D A T A =============================================================||

    public function level2Count()
    {
        $data = BasicFunction_Model::get();
        $completed = BasicFunction_Model::where('status', "COMPLETED")->count();
        $incomplete = BasicFunction_Model::where('status', "INCOMPLETE")->count();

        //chart for complete
        return view('LoD.Level2.Level2', compact('completed', 'incomplete', 'data'));
    }

    public function level3Count()
    {
        $data = Fully_Operational_Model::get();
        $completed = Fully_Operational_Model::where('status', "COMPLETED")->count();
        $incomplete = Fully_Operational_Model::where('status', "INCOMPLETE")->count();

        //chart for complete
        return view('LoD.Level3.Level3', compact('completed', 'incomplete', 'data'));
    }

    //==========================================================================================================================================||
    //================================================== C O U N T  O F  D A T A =============================================================||



}
