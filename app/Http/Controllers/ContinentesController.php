<?php

namespace App\Http\Controllers;

use App\Entities\Continente;
use App\Entities\Paquete;

class ContinentesController extends BaseController
{
    public function index()
    {
        /*$continente = Continente::first();
        if($continente)
            return redirect()->route('continentes.ver', $continente->id);*/
        $homeBase = Continente::where('nombre', 'Home')->first();
        $home = Paquete::where('continente_id', $homeBase->id)->first();

        return view('home')->with('home', $home);
    }

    public function verContinente($id)
    {
        $continente = Continente::find($id);
        return view('continentes.ver-continente', compact('continente'));
    }
}
