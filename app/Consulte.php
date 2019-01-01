<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulte extends Model
{
    protected $fillable = [
        'id_malade', 'id_medecins', 'obsevation_consult','frais_consultation','date_consultation',
    ];
}
