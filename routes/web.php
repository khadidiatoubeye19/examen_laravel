<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

 Auth::routes();
Route::get('/', function () {
    return view('auth/login');
});

// Route::get('/register', [App\Http\Controllers\HomeController::class, 'vu'])->name('register');
Route::get('/home', [FormationController::class, 'index'])->name('home');
Route::get('/formation', [FormationController::class, 'vuformation']);
Route::post('/registerformation',  [FormationController::class, 'enregistrer']);
Route::get('/candidat', [CandidatController::class, 'vucandidat']);
Route::post('/registercandidat', [CandidatController::class, 'enregistrer']);
Route::get('/liste', [FormationController::class, 'liste']);
Route::get('/listecandidat', [CandidatController::class, 'liste']);
// Route::get('/choix', [CandidatController::class, 'listechoix']);
Route::post('/validechoix',  [CandidatController::class, 'choixcandidat']);
Route::get('/type', [TypeController::class, 'vutype']);
Route::post('/typeregiste',  [TypeController::class, 'enregistrer']);
Route::get('/listetype', [TypeController::class, 'liste']);
Route::get('/referenciel', [ReferencielController::class, 'vureferenciel']);
Route::post('/referenciel',  [ReferencielController::class, 'enregistrer']);
Route::get('/listereferenciel', [ReferencielController::class, 'liste']);
Route::post('/supprimertype',  [TypeController::class, 'destroy']);
Route::post('/supprimercan',  [CandidatController::class, 'destroy']);
Route::post('/supprimerforma',  [FormationController::class, 'destroy']);
Route::post('/supprimerref',  [ReferencielController::class, 'destroy']);
Route::get('/deconnexion',  [HomeController::class, 'deconexion']);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
