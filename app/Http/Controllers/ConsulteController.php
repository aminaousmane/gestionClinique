<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consulte;
use DB;
class ConsulteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consultation');
    }
   
      public function show(Consulte $consulte)
    {
        $consulte = DB::table('consulte')->selectRaw('consulte.id_malade,consulte.id_medecins,consulte.obsevation_consult,consulte.frais_consultation,consulte.date_consultation')->count();
            return view('home',compact('consulte'));
    }

    
}
