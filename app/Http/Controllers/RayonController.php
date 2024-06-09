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

         public function supprimer_rayon($id){
        $rayon=Rayon::find($id);
        $rayon->delete();
       return redirect()->back();
     }


    public function modifier_rayon($id){
        $rayon=Rayon::find($id);
        return view();
    }

    public function sauve_rayon(Request $request, $id){

        $request->validate([
            'libelle'=>'required',
            'partie'=>'required',
        ]);

        $rayon=Rayon::find($id);
        $rayon->update($request->all());
        return redirect('afficher_rayon');
    }
}
