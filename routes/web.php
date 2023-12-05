<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::controller(formController ::class)->group(function () {
//     Route::get('/','form')->name('view');
//     Route::get('/dlt{id}','delete')->name('dlt');
// });

// form view routes :

Route::get('/form',[formController::class,'form']);
Route::post('/form',[formController::class, 'data']);
Route::get('/form',[formController::class, 'user_view']);
Route::get('/form/{id}',[formController::class, 'user_dlt']);




