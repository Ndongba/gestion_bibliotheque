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
Route::get('supprimer/{id}',[CategorieController::class,'supprimer_categorie']);
Route::get('modifier/{id}',[CategorieController::class,'modifier_categorie']);
Route::post('modifier/{id}',[CategorieController::class,'sauve_modification']);


// Gestion Rayons

Route::get('ajouter_rayon',[RayonController::class,'ajouter_rayon']); 
Route::POST('traitement_rayon',[RayonController::class,'traitement_rayon']); 
Route::get('afficher_rayon',[RayonController::class,'afficher_rayon']); 
Route::get('supprimer_rayon/{id]',[RayonController::class,'supprimer_rayon']); 
Route::get('modifier_rayon/{id}',[CategorieController::class,'modifier_categorie']);
Route::post('modifier_rayon/{id}',[CategorieController::class,'sauve_modification']);
