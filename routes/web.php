<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/addstd',[StudentController::class,'addstd']);
Route::post('/savedata',[StudentController::class,'storestd']);

Route::get('/allstd',[StudentController::class,'allstd']);

Route::get('/editstd/{id}',[StudentController::class,'editstd']);
Route::post('/updatedata',[StudentController::class,'updatestd']);

Route::get('/delstd/{id}',[StudentController::class,'deletestd']);

