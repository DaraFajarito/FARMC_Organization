<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FARMC_Authentication\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



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

Route::get('/dash', function () {
    return view('dashboard');
});


Route::post('/forg-account', [AuthController::class, 'resetPassword'])->name('password.reset');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





Route::view('/level1', 'LoD.Level_One.Level1');
Route::view('/basicStructure', 'LVL1_Profile_Form.Basic_Structure.basic_structure');
