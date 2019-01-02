<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Malade;
use DB;

class maladeController extends Controller
{
    public function index()
    {
        return view('malade');
    }
    public function show(Malade $malade)
    {
        $malade = DB::table('malade')->selectRaw('malade.id_malade,malade.nom_malade,malade.prenom_malade')->get();
        $medecin = DB::table('medecins')->selectRaw('medecins.id_medecins,medecins.nom_medecins,medecins.prenom_medecins')->get();
        return view('consultation',compact('malade'),compact('medecin'));
    }
   
    public function store(Request $request)
    {
        $data = ['nom_malade'=>$request->nom,
                 'prenom_malade'=>$request->prenom,
                 'sexe_malade'=>$request->sexe,
                 'adr_malade'=>$request->adr,
                 'temperature'=>$request->temperature,
                 'poids'=>$request->poid
                ];
                $ins_malade = DB::table('malade')->insert($data);
        
        
        return back()->with('msg', 'Ajout avec succes');
    }
  
       

}
