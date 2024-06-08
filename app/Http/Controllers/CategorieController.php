<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function ajouter_categorie(){
        return view('categories.ajouter_categorie');
    }
    
    public function traitement_categorie(Request $request){
    
        $request->validate([
            'libelle' => 'required',
            'description'=> 'required',
    
        ]);
        
        Categorie::create($request->all());
    
        return redirect('ajouter_categorie');
    }

public function afficher_categorie(){
    $categories=Categorie::all();

    return view('categories.afficher_categorie',compact('categories'));

}


public function modifier_categorie($id){
    $categorie=Categorie::find($id);
    return view('categories.modifier_categorie',compact('categorie'));

}

public function sauve_modification(Request $request, $id){

    $request->validate([
        'libelle'=>'required',
        'description'=>'required',
    ]);

    $categorie=Categorie::find($id);
    $categorie->update($request->all());
    return redirect('categories.afficher_categorie');
}

public function supprimer_categorie($id){

    $categorie=Categorie::find($id);
    $categorie->delete();

    return redirect()->back();
}

}
