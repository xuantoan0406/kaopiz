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
Route::get("vd1", function () {
    return view("b1");
});
// Route::post("home", "authController@login");
Route::post("home", "authController@dien");
Route::get('response', function () {
    return response('Hello World', 200)
        ->header('Content-Type', 'text/plain');
});
