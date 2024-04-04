<?php

use App\Http\Controllers\Committee_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FARMC_Authentication\AuthController;
use App\Http\Controllers\FisherfolkRepresentative_Controller;
use App\Http\Controllers\ProfileForm_Controller;

Route::get('/', function () {
    return view('FARMC_Authentication/login');
});
Route::get('/registeracc', function () {
    return view('FARMC_Authentication/register');
});
Route::get('/forgetpass', function () {
    return view('FARMC_Authentication/forgetpass');
});

//AUTHENTICATION
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/reg-account', [AuthController::class, 'register'])->name('register');
Route::post('/forg-account', [AuthController::class, 'resetPassword'])->name('password.reset');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ------------------------------------------------------------------------------

Route::get('/dash', function () {
    return view('dashboard');
});

// ------------------------------------------------------------------------------

// ORGANIZED FARMC
//*LEVELS OF DEVELOPMENT*/

//LevelOne
// Route::view('/level1', 'LoD.Level1.Level1');

Route::view('/L1Incomplete', 'LoD.Level1.L1_Incomplete');
Route::view('/L1Editform', 'LoD.Level1.L1_Editform');
// Route::view('/L1Viewform', 'LoD.Level1.L1_Viewform');



Route::view('/basicStructure', 'LVL1_Profile_Form.Basic_Structure.basic_structure');
Route::view('/officers', 'LVL1_Profile_Form.FARMC_Officers.officers');
Route::view('/mandatedmem', 'LVL1_Profile_Form.Composition_OM.mandated_member');
Route::view('/fisherfolkrep', 'LVL1_Profile_Form.Composition_OM.fisherfolk_representative');
Route::view('/committee', 'LVL1_Profile_Form.MFARMC_Committee.committee');
// Route::view('/secretariat', 'LVL1_Profile_Form.Composition_OS.secretariat');

// Route::get('/edit-profile-form/{id}', [ProfileForm_Controller::class, 'editProfileForm'])->name('edit-profile-form');
// Route::post('/update-profile-form/{id}',  [ProfileForm_Controller::class, 'updateProfileForm'])->name('update-profile-form');


// ------------------------------------------------------------------------------

//LevelTwo
Route::view('/level2', 'LoD.Level2.Level2');
Route::view('/L2Completedtbl', 'LoD.Level2.L2_Completedtbl');
Route::view('/L2Incompletetbl', 'LoD.Level2.L2_Incompletetbl');
Route::view('/L2Incomplete', 'LoD.Level2.L2_Incomplete');
Route::view('/L2Editform', 'LoD.Level2.L2_Editform');

Route::view('/basicFunction', 'LVL2_Basic_Function.basicFunction');




// ------------------------------------------------------------------------------

//LevelThree
Route::view('/level3', 'LoD.Level3.Level3');
Route::view('/L3Completed', 'LoD.Level3.L3_Completed');
Route::view('/L3Incomplete', 'LoD.Level3.L3_Incomplete');

Route::view('/fullyOperational', 'LVL3_Fully_Operational.fullyOperational');

// ------------------------------------------------------------------------------

//LevelFour
Route::view('/level4', 'LoD.Level4.Level4');
Route::view('/L4Completed', 'LoD.Level4.L4_Completed');
Route::view('/L4Incomplete', 'LoD.Level4.L4_Incomplete');

Route::view('/sustainabilityMechanism', 'LVL4_Sustainability_Mechanism.sustainabilityMechanism');

// ------------------------------------------------------------------------------

//LevelFive
Route::view('/level5', 'LoD.Level5.Level5');
Route::view('/L5Completed', 'LoD.Level5.L5_Completed');
Route::view('/L5Incomplete', 'LoD.Level5.L5_Incomplete');

Route::view('/modelExcellence', 'LVL5_Model_of_Excellence.modelofExcellence');

// ------------------------------------------------------------------------------

//FARMC Membership
Route::view('/farmc_membership', 'FARMC_Membership.FARMC_Membership');
Route::view('/personal_info', 'FARMC_Membership.personal_info');
Route::view('/membership', 'FARMC_Membership.membership');
Route::view('/org_membership', 'FARMC_Membership.org_membership');

//--------------------------------------------------------------

//Profile Form
Route::get('/officers-form/{id}', [ProfileForm_Controller::class,'display_officer_form']);
Route::get('/level1', [ProfileForm_Controller::class,'displayAll']);
Route::get('/mandated-officers-form/{id}', [ProfileForm_Controller::class,'display_mandatedOfficer_form']);
Route::get('/L1Viewform/{id}', [ProfileForm_Controller::class,'display_level1_info']);
Route::get('/fisherfolk-rep-form/{id}', [ProfileForm_Controller::class,'display_fisherfolkRep_form']);
Route::get('/secretariat-form', [ProfileForm_Controller::class,'display_sectariat_form']);
Route::post('/add-basic-info', [ProfileForm_Controller::class,'createProfileForm']);
Route::put('/add-officer/{id}', [ProfileForm_Controller::class,'addOfficer']);
Route::put('/add-mandated-officer/{id}', [ProfileForm_Controller::class,'addMandatedOfficer']);
Route::put('/add-secretariat', [ProfileForm_Controller::class,'addSecretariat']);
Route::get('/L1Incompletetbl',[ProfileForm_Controller::class, 'display_level1_incomplete']);
Route::get('/L1Completedtbl',[ProfileForm_Controller::class, 'display_level1_complete']);



//Fisherfolk Representative
Route::post('/add-fisherfolk-rep', [FisherfolkRepresentative_Controller::class,'createFisherfolkRep']);


//Committee
Route::post('/add-committee', [Committee_Controller::class,'createCommittee']);
Route::get('/go-to-committee', [Committee_Controller::class,'display_committee_form']);

//Fisherfolk Organization
Route::view('/FOform1', 'Fisherfolk_Organization.form1');


Route::view('/FOform2GenInfo', 'Fisherfolk_Organization.form2_GenInfo');
Route::view('/FOform2MembershipAsset', 'Fisherfolk_Organization.form2_Membership&Asset');
Route::view('/FOform2Officers', 'Fisherfolk_Organization.form2_Officers');
Route::view('/FOform2OrgStructure', 'Fisherfolk_Organization.form2_OrgStructure');

//Municipal 
Route::view('/FOMunicipal', 'Fisherfolk_Organization.municipal');

