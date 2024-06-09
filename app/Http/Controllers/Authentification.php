<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Authentification extends Controller
{
    public function login(){

        return view('authentifications.login');
    }

    public function authentification(Request $request){

        $request->validate([

            'email'=> 'required|email',
            'password'=> 'required',

        ]);

        if(auth()->attempt($request->only('email', 'password'))){
            return redirect('afficher');
        }

        return redirect()->back()->withErrors('les identifiants ne correspondent pas');
    }

    
    public function logout(){

        auth()->logout();


        return redirect('login');

    }



    public function creer(){
        return view('authentifications.register');
    }

    public function enregistrer(Request $request){

        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password' => 'required',
        ]);

        $user= User::create($request->all());

        auth()->login($user);
        return redirect('login');

    }
}


