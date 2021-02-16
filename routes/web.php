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
Route::get('/firstYear', function () {
    return view('firstYear');
});
Route::get('/secondYear', function () {
    return view('secondYear');
});
Route::get('/group', function () {
    return view('group');
});
