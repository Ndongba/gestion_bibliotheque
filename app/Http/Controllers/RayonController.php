<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    
    public function ajouter_rayon(){
        return view('rayons.ajouter_rayon');
    }

    public function traitement_rayon(Request $request){
        $request->validate([
            'libelle'=>'required',
            'partie'=>'required',
        ]);

        Rayon::create($request->all());
        return redirect('afficher_rayon');
    }

    public function afficher_rayon(){
        $rayons=Rayon::all();
        return view('rayons.afficher_rayon',compact('rayons'));
    }

    
}
