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

Route::get("/","welcomController@index")->name("/");
Route::get("access", "accessController@index")->name("access");
Route::get("trafic", "allTraficController@index");
Route::get("profil", "profilController@index");
Route::get("login", "loginController@index")->name("login");
Route::get("avis", "avisController@index")->name("avis");

Route::post("store_tag", "accessController@store")->name("store_tag");
Route::post("ckecklog", "loginController@checklogin")->name("ckecklog");
