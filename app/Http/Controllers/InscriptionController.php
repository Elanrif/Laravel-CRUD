<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    //
    public function formulaire() 
    {
        return view('inscription');
    }
    
    public function traitement()
    { 
          request()->validate([
        'email' =>['required', 'email'],
        'password' => ['required', 'confirmed','min:8'],
        'password_confirmation' => ['required'],
    ],[
        'password.min' => 'Pour des raison de sécurité, votre message doit faire :min caractères. '
    ]);

    
    $utilisateur = \App\Models\Utilisateur::create([
        'email'=> request('email'),
        'mot_de_passe'=> bcrypt(request('password')),
    ]);

    
    return 'Nous avons reçu votre email qui est'. request('email'). ' est votre mot de passe est : '.request('password');

    }
}
