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
    return view('pages/Home');
});

Route::any('questions',function(){
    return view('pages/questions');
});
Route::any('start',function(){
    return view('pages/start');
});
Route::any('end',function(){
    return view('pages/end');
});
