<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratoire;
use DB;

class laboratoireController extends Controller
{
    public function index()
    {
        return view('laboratoire');
    }

    public function show(Laboratoire $laboratoire)
    {
        $laboratoire=DB::table('laboratoire')->selectRaw('laboratoire.type_examen','laboratoire.observation_labo','laboratoire.date_examen',
                               'laboratoire.frais_examen','laboratoire.malade_id_malade')->get();
        return view('home',compact('laboratoire'));
    }

    public function store(Request $request)
    {
        $data = ['type_examen'=>$request->examen,
                 'observation_labo'=>$request->observation,
                 'date_examen'=>$request->date,
                 'frais_examen'=>$request->frais,
                 'malade_id_malade'=>$request->malade
                ];
                $ins_malade = DB::table('laboratoire')->insert($data);


        return back()->with('msg', 'Ajout avec succes');
    }
    


}
