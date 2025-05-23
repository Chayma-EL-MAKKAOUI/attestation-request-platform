<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\demandeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
//Authentification
Auth::routes();
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('admin/home', [HomeController::class,'handleAdmin'])->name('admin.route')->middleware('admin');
//etudiants
Route::get('/user', function () {
    return view('demande');
})->name('homes');


//demande
Route::get('add', [demandeController::class, 'create'])->name('add.create');
Route::post('add', [demandeController::class, 'store'])->name('add.store');
//New attestation
Route::get('addatt', [demandeController::class, 'createatt'])->name('add.createatt');
Route::post('addatt', [demandeController::class, 'newAttestation'])->name('add.newAttestation');


Route::resource('demandes',demandeController::class);

Route::get('attestation', function () {
    return view('demandes.attestation');
})->name('attestation');

Route::get('newattestatio', function () {
    return view('demandes.newattestatio');
})->name('newattestation');


//admin page

Route::resource('users', userController::class);

Route::post('statut',[demandeController::class,'statut']);
