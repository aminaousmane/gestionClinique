<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
  protected $fillable = [
    'id_labo', 'type_examen', 'observation_labo','date_examen','frais_examen','malade_id_malade'
  ];
}
