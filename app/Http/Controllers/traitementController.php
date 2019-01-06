<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traitement;
use DB;

class traitementController extends Controller
{
    public function index()
    {
        return view('traitement');
    }

    public function show(Traitement $traitement)
    {
        $traitement=DB::table('traitement')->selectRaw('traitement.nom_maladie','traitement.date_debut_trait','traitement.date_fin_trait',
                              'traitement.frais_trait','traitement.etat_patient','traitement.medicament_prescrit','traitement.malade_id_malade')->get();
        return view('home',compact('traitement'));
    }

    public function store(Request $request)
    {
        $data = ['nom_maladie'=>$request->nom_maladie,
                 'date_debut_trait'=>$request->date_debut,
                 'date_fin_trait'=>$request->date_fin,
                 'frais_trait'=>$request->frais,
                 'etat_patient'=>$request->etat,
                 'medicament_prescrit'=>$request->medicament,
                 'malade_id_malade'=>$request->malade
                ];
                $ins_malade = DB::table('traitement')->insert($data);


        return back()->with('msg', 'Ajout avec succes');
    }
}
