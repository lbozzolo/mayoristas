<?php

namespace App\Http\Controllers;

use App\Entities\Continente;
use App\Entities\NewsletterEmails;
use App\Entities\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContinentesController extends BaseController
{
    public function index()
    {
        $homeBase = Continente::where('nombre', 'Home')->first();
//        return redirect()->route('continentes.ver', $homeBase->id);
        return view('agencias.home', compact('homeBase'));
    }

    public function indexViejo()
    {
        $homeBase = Continente::where('nombre', 'Home')->first();
        $home = Paquete::where('continente_id', $homeBase->id)->first();

        return view('home')->with('home', $home);
    }

    public function verContinente($id)
    {
        $continente = Continente::find($id);
        return view('agencias.ver-continente', compact('continente'));
        //return view('continentes.ver-continente', compact('continente'));
    }

    public function verPaquete($id)
    {
        $paquete = Paquete::find($id);
        $continente = $paquete->continente;
        return view('agencias.detalle-paquete', compact('paquete', 'continente'));
    }

    public function storeNewsletter(Request $request)
    {
        NewsletterEmails::create(['email' => $request->email_newsletter]);
        return redirect()->back();
    }

    public function contratacion()
    {
        $continente = Continente::where('nombre', 'Africa')->first();
        return view('agencias.contratacion')->with('continente', $continente);
    }

    public function terminosYCondiciones()
    {
        $continente = Continente::where('nombre', 'Africa')->first();
        return view('agencias.terminosycondiciones')->with('continente', $continente);
    }

}
