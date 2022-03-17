<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur ; 
use \App\Http\Controllers\UtilisateursController ;


class SuivisController extends Controller
{
    public function nouveau() 
    { 
        $utilisateurQuiVaSuivre = auth()->user() ; 
        $utilisateurQuiVaEtreSuivi = Utilisateur::where('email' , request('email'))->firstOrFail() ;
       
        
        $utilisateurQuiVaSuivre->suivis()->attach($utilisateurQuiVaEtreSuivi) ;

        return back(); 
    }
    public function enlever() 
    { 
        $utilisateurQuiSuit = auth()->user() ; 
        $utilisateurQuiVaEstSuivi = Utilisateur::where('email' , request('email'))->firstOrFail() ;
       
        
        $utilisateurQuiSuit->suivis()->detach($utilisateurQuiVaEstSuivi) ;

        return back();
    }
}
