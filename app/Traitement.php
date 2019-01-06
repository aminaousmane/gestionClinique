<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
  protected $fillable = [
    'id_trai', 'nom_maladie', 'date_debut_trait','date_fin_trait','frais_trait','etat_patient', 'malade_id_malade', 'medicament_prescrit'
  ];
}
