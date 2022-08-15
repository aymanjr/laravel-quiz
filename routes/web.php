<?php

use App\Http\Controllers\QuestionController;
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


Route::any('start',function(){
    return view('pages/start');
});
Route::any('end',function(){
    return view('pages/end');
});
Route::any('ansDesk', function () {
    return view('pages.answerDesk');
});

Route::post('/add', [QuestionController::class, 'create']);
Route::get('/questions', [QuestionController::class, 'show']);
Route::post('/update', [QuestionController::class, 'update']);
Route::post('/delete', [QuestionController::class, 'delete']);
Route::any('/startquiz', [QuestionController::class, 'startquiz']);
Route::any('/submitans', [QuestionController::class, 'submitans']);





