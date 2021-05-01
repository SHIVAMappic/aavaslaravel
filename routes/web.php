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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members','App\Http\Controllers\MemberController@index');
Route::get('/members/add','App\Http\Controllers\MemberController@add');
Route::post('/members/profile_upload','App\Http\Controllers\MemberController@profileUpload');

Route::get('/customers/pdf','App\Http\Controllers\CustomerController@export_pdf');
