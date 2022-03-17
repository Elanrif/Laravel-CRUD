<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Models\Message;


use Illuminate\Http\Request;

class UtilisateursController extends Controller
{
    //
    public function liste()
    {
      $utilisateurs = Utilisateur::all();  

      return view('utilisateur', [
          'utilisateurs' =>$utilisateurs,
      ]);

    }

    public function voir() 
    { 
      $email = request('email');

      $utilisateur = Utilisateur::where('email', $email)->firstOrFail() ;  
      $messages = $utilisateur->messages; 

      return view('utilisateurs' , [ 
        'utilisateur' => $utilisateur ,
      ]); 
   
    }
}
