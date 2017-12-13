<?php

namespace App\Http\Controllers;

use App\Entities\Continente;

class ContinentesController extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function verContinente($id)
    {
        $continente = Continente::find($id);
        return view('continentes.ver-continente', compact('continente'));
    }
}
