<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Malade;
use DB;

class maladeController extends Controller
{
    public function show()
    {
        return view('malade');
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
