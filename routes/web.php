<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\NilaiController;

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
    return view('isidashboard');
})->name('dashboard');

//Tarif
Route::get('/tarif', [TarifController::class, "index"])->name('tarif');
Route::get('/addtarif', function() {return view('addtarif');})->name('addtarif');
Route::post('/savetarif', [TarifController::class, "store"])->name('savetarif');
Route::get('/edittarif/{id}', [TarifController::class, "show"])->name('edittarif');
Route::post('/updatetarif/{id}', [TarifController::class, "update"])->name('updatetarif');
Route::get('/deletetarif/{id}', [TarifController::class, "destroy"])->name('deletetarif');

//Nilai
Route::get('/nilai', [NilaiController::class, "index"])->name('nilai');
Route::get('/addnilai', function() {return view('addnilai');})->name('addnilai');
Route::post('/savenilai', [NilaiController::class, "store"])->name('savenilai');
Route::get('/editnilai/{id}', [NilaiController::class, "show"])->name('editnilai');
Route::post('/updatenilai/{id}', [NilaiController::class, "update"])->name('updatenilai');
Route::get('/deletenilai/{id}', [NilaiController::class, "destroy"])->name('deletenilai');




