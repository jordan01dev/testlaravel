<?php

use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

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



use App\Http\Controllers\loginController;
use App\Http\Controllers\RegitController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UtilisateurController;
use App\Models\Utilisateur;

Route::get('/inscription', [loginController::class, 'index'])->name('login');
Route::post('/inscription', [UtilisateurController::class, 'inscrire'])->name('register.store');
Route::post('/connexion', [UtilisateurController::class, 'connecter'])->name('connexion.store');
Route::get('/register', [RegitController::class, 'index'])->name('register');
// Route::post('/register', [loginController::class, 'register']);
// Route::get('/layout', [Controller::class, 'index'])->name('layout');
Route::get('/accueil',function(){
    return view('template/layout');
})->name('accueil');

// la route qui permet de recuperer le profil
//Route::get('/profile', 'ProfileController@index')->name('profile');

// la route pour l'agent de bord

Route::get('/Agent', [AgentController::class,'Agent'])->name('Agent');


// route groupe pour gerer les roles des utilsiateurs

/*Route::group(['middleware'=>'auth'],function()
{
    Route::get('/Agent', [AgentController::class,'Agent'])->name('Agent');

}) ;
*/
