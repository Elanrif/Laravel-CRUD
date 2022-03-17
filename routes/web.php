<?php

use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateursController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\SuivisController;
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



Route::view('/elanrif','elanrif');

Route::get('/inscription',[InscriptionController::class ,'formulaire']);
Route::post('/inscription',[InscriptionController::class ,'traitement']);

Route::get('/', [UtilisateursController::class ,'liste']);

Route::get('/connexion' , [ConnexionController::class , 'formulaire']);
Route::post('/connexion' , [ConnexionController::class ,'traitement']);


Route::group([

    'middleware' => 'App\Http\Middleware\Auth',

] , function() { 

    Route::post('/modification-mot-de-passe',[CompteController::class, 'modificationMotDePasse']);
    Route::get('/mon-compte',[CompteController::class ,'acceuil']);
    Route::post('/messages' ,[MessagesController::class , 'nouveau']) ; 
    Route::get('/deconnexion' , [CompteController::class ,'deconnexion']) ;

    Route::post('/{email}/suivis' , [SuivisController::class , 'nouveau']); 
    Route::delete('/{email}/suivis' , [SuivisController::class, 'enlever']);
});


Route::get('/{email}', [UtilisateursController::class , 'voir']); 