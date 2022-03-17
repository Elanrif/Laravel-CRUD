<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateur extends Model implements Authenticatable
{

    use HasFactory;
    use BasicAuthenticatable;
   protected  $fillable = ['email', 'mot_de_passe'];

   public function messages() { 

    return  $this->hasMany(Message::class)->latest() ;
   }

   public function suivis()
   { 
       return $this->belongsToMany(Utilisateur::class , 'suivis' , 'suiveur_id' , 'suivi_id') ; 
   }

   public function suit($utilisateur)
   { 
       return $this->suivis()->where('suivi_id', $utilisateur->id)->exists() ;
   }
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }
  
}
