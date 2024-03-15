<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FARMC_Authentication\AuthController;
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
Route::view('/level1', 'LoD.Level1.Level1');
Route::view('/L1Completed', 'LoD.Level1.L1_Completed');
Route::view('/L1Incomplete', 'LoD.Level1.L1_Incomplete');


Route::view('/basicStructure', 'LVL1_Profile_Form.Basic_Structure.basic_structure');
Route::view('/officers', 'LVL1_Profile_Form.FARMC_Officers.officers');
Route::view('/mandatedmem', 'LVL1_Profile_Form.Composition_OM.mandated_member');
Route::view('/fisherfolkrep', 'LVL1_Profile_Form.Composition_OM.fisherfolk_representative');
Route::view('/committee', 'LVL1_Profile_Form.MFARMC_Committee.committee');
Route::view('/secretariat', 'LVL1_Profile_Form.Composition_OS.secretariat');

// ------------------------------------------------------------------------------

//LevelTwo
Route::view('/level2', 'LoD.Level2.Level2');
Route::view('/L2Completed', 'LoD.Level2.L2_Completed');
Route::view('/L2Incomplete', 'LoD.Level2.L2_Incomplete');

// ------------------------------------------------------------------------------

//LevelThree
Route::view('/level3', 'LoD.Level3.Level3');
Route::view('/L3Completed', 'LoD.Level3.L3_Completed');
Route::view('/L3Incomplete', 'LoD.Level3.L3_Incomplete');

// ------------------------------------------------------------------------------

//LevelFour
Route::view('/level4', 'LoD.Level4.Level4');
Route::view('/L4Completed', 'LoD.Level4.L4_Completed');
Route::view('/L4Incomplete', 'LoD.Level4.L4_Incomplete');

// ------------------------------------------------------------------------------

//LevelFive
Route::view('/level5', 'LoD.Level5.Level5');
Route::view('/L5Completed', 'LoD.Level5.L5_Completed');
Route::view('/L5Incomplete', 'LoD.Level5.L5_Incomplete');

// ------------------------------------------------------------------------------

//FARMC Membership

Route::view('/farmc_membership', 'FARMC_Membership.FARMC_Membership');
Route::view('/personal_info', 'FARMC_Membership.personal_info');
Route::view('/membership', 'FARMC_Membership.membership');
Route::view('/org_membership', 'FARMC_Membership.org_membership');


//Profile Form
Route::get('/officers-form/{id}', [ProfileForm_Controller::class,'display_officer_form']);
Route::get('/mandated-officers-form/{id}', [ProfileForm_Controller::class,'display_mandatedOfficer_form']);
Route::get('/fisherfolk-rep-form/{id}', [ProfileForm_Controller::class,'display_fisherfolkRep_form']);
Route::post('/add-basic-info', [ProfileForm_Controller::class,'createProfileForm']);
Route::put('/add-officer/{id}', [ProfileForm_Controller::class,'addOfficer']);
Route::put('/add-mandated-officer/{id}', [ProfileForm_Controller::class,'addMandatedOfficer']);
