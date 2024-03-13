<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FARMC_Authentication\AuthController;

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

//*LEVELS OF DEVELOPMENT*/

//LevelOne
Route::view('/level1', 'LoD.Level1.Level1');
Route::view('/L1Completed', 'LoD.Level1.L1_Completed');
Route::view('/L1Incomplete', 'LoD.Level1.L1_Incomplete');

Route::view('/basicStructure', 'LVL1_Profile_Form.Basic_Structure.basic_structure');
Route::view('/basicStructure', 'LVL1_Profile_Form.Basic_Structure.basic_structure');

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
