 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\Authentification;
use App\Http\Controllers\CategorieController;
use Faker\Guesser\Name;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/', function () {
    return view('welcome');
});

//Gestion Livres

Route::get('ajouter',[LivreController::class,'ajouter_livre']);
Route::post('traitement_livre',[LivreController::class,'traitement_livre']);
Route::get('afficher',[LivreController::class,'afficher_livre']);
Route::get('livres/detail/{id}', [LivreController::class, 'detail_livre']);
Route::get('livres/supprimer/{id}',[LivreController::class,'supprimer_livre']);
Route::get('livres/modifier_livre/{id}',[LivreController::class,'modifier_livre']);
Route::post('livres/sauve_livre/{id}',[LivreController::class,'sauve_livre']);


//Gestion Catégories

Route::get('ajouter_categorie',[CategorieController::class,'ajouter_categorie']);
Route::post('traitement_categorie',[CategorieController::class,'traitement_categorie']);
Route::get('afficher_categorie',[CategorieController::class,'afficher_categorie']);
Route::get('/categories/supprimer/{id}',[CategorieController::class,'supprimer_categorie']);
Route::get('categories/modifier/{id}',[CategorieController::class,'modifier_categorie']);
Route::post('categories/sauve_modification/{id}',[CategorieController::class,'sauve_modification']);


// Gestion Rayons

Route::get('ajouter_rayon',[RayonController::class,'ajouter_rayon']); 
Route::POST('traitement_rayon',[RayonController::class,'traitement_rayon']); 
Route::get('afficher_rayon',[RayonController::class,'afficher_rayon']); 
Route::get('/rayons/supprimer_rayon/{id}',[RayonController::class,'supprimer_rayon']); 
Route::get('rayons/modifier_rayon/{id}',[RayonController::class,'modifier_rayon']);
Route::post('rayons/sauve_rayon/{id}',[RayonController::class,'sauve_rayon']);



//Authentification

Route::get('login',[Authentification::class,'login'])->name('login');
Route::post('authentification',[Authentification::class,'authentification'])->name('authentification');
Route::post('logout',[Authentification::class,'logout'])->name('logout');
Route::get('register',[Authentification::class,'creer'])->name('register');
Route::post('register',[Authentification::class,'enregistrer'])->name('register');

// Recherche
Route::get('rechercher', [LivreController::class, 'rechercher']);
