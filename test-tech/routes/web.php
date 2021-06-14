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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/home/etudiant', [App\Http\Controllers\HomeController::class, 'etudiant'])->name('home_etudiant');
Route::get('/home/convention', [App\Http\Controllers\HomeController::class, 'convention'])->name('home_convention');
Route::post('/message', [App\Http\Controllers\HomeController::class, 'message'])->name('message');

Route::post('/attestation', [App\Http\Controllers\AttestationController::class, 'create'])->name('newattestation');
Route::get('/attestation', [App\Http\Controllers\AttestationController::class, 'ShowAll'])->name('attestation');

Route::get('/etudiant', [App\Http\Controllers\EtudiantController::class, 'ShowAll'])->name('etudiant');
Route::get('/etudiant/{id}', [App\Http\Controllers\EtudiantController::class, 'ShowById'])->name('etudiantbyId');
Route::get('/convention/{id}', [App\Http\Controllers\EtudiantController::class, 'StudentForConvention'])->name('convention');
Route::post('/new/etudiant', [App\Http\Controllers\EtudiantController::class, 'Create'])->name('convention');

Route::get('/convention', [App\Http\Controllers\ConventionController::class, 'ShowAll'])->name('convention');
Route::post('/new/convention', [App\Http\Controllers\ConventionController::class, 'Create'])->name('convention');