<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecins extends Model
{
  protected $fillable = [
    'id_medecins', 'nom_medecins', 'prenom_medecins','sexe_medecins','adr_medecins','tel_medecins', 'fonction_medecins'
  ];
}
