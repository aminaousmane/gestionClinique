<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malade extends Model
{
    protected $fillable = [
        'id_malade', 'nom_malade', 'prenom_malade','sexe_malade','adr_malade','temperature','poids'
    ];
}
