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
            'status' => 'required'
        ]);

        Rayon::create($request->all());
        return redirect('afficher_rayon');
    }

    public function afficher_rayon(){
        $rayons=Rayon::all();
        return view('rayons.afficher_rayon',compact('rayons'));
    }

        public function supprimer_rayon($id) {
        $rayon=Rayon::findorfail($id);
        $rayon->delete();
       
        return redirect()->back();
     }


    public function modifier_rayon($id){
        $rayon=Rayon::find($id);
        return view('rayons.modifier_rayon', compact('rayon'));
    }

    public function sauve_rayon(Request $request) {
        $rayon= Rayon::findorfail($request->id);
        $rayon->libelle = $request->libelle;
        $rayon->partie = $request->partie;
        $rayon->status = $request->status;

       
        $rayon->update($request->all());
        return redirect('afficher_rayon');
    }
}
