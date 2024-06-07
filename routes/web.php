<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\RayonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ajouter',[LivreController::class,'ajouter_livre']);
Route::post('traitement_livre',[LivreController::class,'traitement_livre']);
Route::get('afficher',[LivreController::class,'afficher_livre']);
Route::get('categorie',[CategorieController::class,'ajouter_categorie']);
Route::get('rayon',[RayonController::class,'ajouter_rayon']);