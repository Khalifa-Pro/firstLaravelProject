<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormationController;

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

Route::get('/', function () {
    return view('welcome');
});

// route des apprenants en creant juste une fonction
Route::get('/apprenants',function(){
    return view('apprenant');
});

// Liste des apppenants en passant par le controller (ApprenantController)
Route::get('/liste-apprenants',[ApprenantController::class,'index']);

// Liste des formations en passant par le controller (FormationController)
Route::get('/liste-formations',[FormationController::class,'index']);
    