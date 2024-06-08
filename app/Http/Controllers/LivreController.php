<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Categorie;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function ajouter_livre(){
        return view('livres.ajouter');
    }

    public function traitement_livre(Request $request){
        $request->validate([
            'titre' =>'required',
            'date_de_publication' =>'required',
            'nombre_de_pages' =>'required',
            'auteur' =>'required',
            'isbn' => 'required',
            'editeur' =>'required',
            ]);

        Livre::create($request->all());
        return redirect('livres.ajouter')->with('status','Le livre a été ajouté avec succés');

    }

public function afficher_livre(){
    $livres= Livre::all();
    return view('livres.afficher',compact('livres'));
}


public function modifier_livre(){

}

public function supprimer_livre(){

}



}
