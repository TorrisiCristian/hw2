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

//Visaliazzare la dashboard principale
Route::get('main','App\Http\Controllers\MainController@page');

//Visualizza la pagina di registrazione
Route::get('register','App\Http\Controllers\RegisterController@register_page');
//Route per la restrazione
Route::post('register','App\Http\Controllers\RegisterController@sign');


//Visualizza la pagina di registrazione
Route::get('login',"App\Http\Controllers\RegisterController@login_page");
//Route per effettuare il Login
Route::post('login',"App\Http\Controllers\RegisterController@login");
//Route per il Logout
Route::get('logout', 'App\Http\Controllers\RegisterController@logout'); 

//Route per visualizzare la pagina di ricerca
Route::get('cerca', "App\Http\Controllers\SearchController@cerca_page");
//Route per l'aggiunta della canzone a preferiti
Route::get('cerca/{text}', "App\Http\Controllers\SearchController@cerca")->name('cerca');
Route::post('/cerca/aggiungi/', "App\Http\Controllers\SearchController@aggiungi")->name('aggiungi');


//Route per visualizzare la pagina Profilo utente
Route::get('profile','App\Http\Controllers\ProfileController@profile_page');
//Route per la visualizzazione delle canzoni preferite
Route::get('profile/stampa','App\Http\Controllers\ProfileController@stampa_preferiti');
Route::get('profile/rimuovi/{canzone}', "App\Http\Controllers\ProfileController@rimuovi")->name('rimuovi');



//Route CRUD
Route::resource('admin','App\Http\Controllers\AdminController');


