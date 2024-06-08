<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\RayonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Gestion Livres

Route::get('ajouter',[LivreController::class,'ajouter_livre']);
Route::post('traitement_livre',[LivreController::class,'traitement_livre']);
Route::get('afficher',[LivreController::class,'afficher_livre']);


//Gestion Catégories

Route::get('ajouter_categorie',[CategorieController::class,'ajouter_categorie']);
Route::post('traitement_categorie',[CategorieController::class,'traitement_categorie']);
Route::get('afficher_categorie',[CategorieController::class,'afficher_categorie']);


