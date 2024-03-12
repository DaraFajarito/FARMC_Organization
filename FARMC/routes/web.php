<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('FARMC_Authentication/login');
});

Route::get('/registeracc', function () {
    return view('FARMC_Authentication/register');
});
Route::get('/forgetpass', function () {
    return view('FARMC_Authentication/forgetpass');
});  


Route::view('/', 'dashboard');
Route::view('/level1', 'LoD.Level_One.Level1');
Route::view('/basicStructure', 'LVL1_Profile_Form.Basic_Structure.basic_structure');
