<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medecins;
use DB;

class medecinsController extends Controller
{
    public function index()
    {
        return view('medecins');
    }

    public function show(Medecins $medecins)
    {
        $medecins=DB::table('medecins')->selectRaw('medecins.nom_medecins','medecins.prenom_medecins','medecins.sexe_medecins',
                            'medecins.adr_medecins','medecins.tel_medecins','medecins.fonction_medecins');
        return view('home', compact('medecins'));
    }

    public function store(Request $request)
    {
        $data = ['nom_medecins'=>$request->nom,
                 'prenom_medecins'=>$request->prenom,
                 'sexe_medecins'=>$request->sexe,
                 'adr_medecins'=>$request->adr,
                 'tel_medecins'=>$request->tel,
                 'fonction_medecins'=>$request->fonction
                ];
                $ins_malade = DB::table('medecins')->insert($data);


        return back()->with('msg', 'Ajout avec succes');
    }
}
