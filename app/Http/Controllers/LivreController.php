<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Rayon;
use App\Models\Categorie;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function ajouter_livre(){
        $categories=Categorie::all();
        $rayons=Rayon::all();
        return view('livres.ajouter',compact('categories','rayons'));
    }

    public function traitement_livre(Request $request){
        $request->validate([
            'titre' => 'required',
            'url_image' => 'required',
            'categorie_id' => 'required',
            'rayon_id' => 'required',
            'date_de_publication' => 'required',
            'nombre_de_pages' => 'required',
            'auteur' => 'required',
            'isbn' => 'required',
            'editeur' => 'required',
            ]);

        Livre::create($request->all());
        return redirect()->back()->with('status','Le livre a été ajouté avec succés');

    }

public function afficher_livre(){
    $livres= Livre::all();
    $categorie=Categorie::all();
    $rayon=Rayon::all();
    
    return view('livres.afficher',compact('livres','categorie','rayon'));
}

    public function detail_livre($id) {

        $livre= Livre::find($id);

        return view('livres.detail', compact('livre'));

    }

public function modifier_livre($id){
    $livre=Livre::findorfail($id);
    $categories=Categorie::all();
    $rayons=Rayon::all();
    
    return view('livres.modifier', compact('livre','categories','rayons'));
}

public function sauve_livre(Request $request,$id){
   

    $livre= Livre::findorfail($id);
    $livre->titre = $request->titre;
    $livre->url_image = $request->url_image;
    $livre->categorie_id = $request->categorie_id;
    $livre->rayon_id = $request->rayon_id;
    $livre->date_de_publication = $request->date_de_publication;
    $livre->nombre_de_pages = $request->nombre_de_pages;
    $livre->auteur = $request->auteur;
    $livre->isbn = $request->isbn;
    $livre->editeur = $request->editeur;


   
    $livre->update($request->all());

    return view('livres.afficher');

}



    public function supprimer_livre($id)
{
    $livre= Livre::findorfail($id);
    $livre->delete();
    return redirect()->back();
}

}


