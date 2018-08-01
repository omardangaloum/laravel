<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route pour creer un etudiant
Route::post('etudiants/add' , 'EtudiantController@add')->name('addEtudiant');

//Affichage d'un etudiant selon l'id
Route::get('etudiants/showinfo/{id}' , 'EtudiantController@showinfo')->name('showinfoEtudiant')->where('id' , '[0-9]+');

// Modifier une etudiant selon l'id
Route::get('etudiants/edit/{id}' , 'EtudiantController@edit')->name('editEtudiant')->where('id' , '[0-9]+');

// modifier valider modification d'un etudiant
Route::put('etudiants/update/{id}' , 'EtudiantController@update')->name('updateEtudiant')->where('id' , '[0-9]+');


Route::get('etudiants/delete/{id}' , 'EtudiantController@delete')->name('showEtudiant')->where('id' , '[0-9]+');

