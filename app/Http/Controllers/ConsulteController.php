<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consulte;
use DB;
class ConsulteController extends Controller
{
    
    public function index()
    {
        return view('consultation');
    }
   
      public function show(Consulte $consulte)
    {
        $consulte = DB::table('consulte')->selectRaw('consulte.id_malade,consulte.id_medecins,consulte.obsevation_consult,consulte.frais_consultation,consulte.date_consultation')->count();
            return view('home',compact('consulte'));
    }
 
    public function store(Request $request)
    {
        $data = ['id_malade'=>$request->malade,
                 'id_medecins'=>$request->medecins,
                 'obsevation_consult'=>$request->observation,
                 'frais_consultation'=>$request->frais,
                 'date_consultation'=>$request->date,
                ];
                DB::table('consulte')->insert($data);
        
        
        return back()->with('msg', 'Ajout avec succes');
    }

    
}
