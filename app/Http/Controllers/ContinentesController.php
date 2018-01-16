<?php

namespace App\Http\Controllers;

use App\Entities\Continente;

class ContinentesController extends BaseController
{
    public function index()
    {
        $continente = Continente::first();
        if($continente)
            return redirect()->route('continentes.ver', $continente->id);

        return view('home');
    }

    public function verContinente($id)
    {
        $continente = Continente::find($id);
        return view('continentes.ver-continente', compact('continente'));
    }
}
