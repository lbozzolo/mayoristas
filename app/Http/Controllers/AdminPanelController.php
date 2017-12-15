<?php

namespace App\Http\Controllers;

use App\Entities\Continente;
use App\Entities\Paquete;
use App\Entities\Opcion;
use App\Http\Repositories\ContinenteRepo;
use App\Http\Repositories\PaqueteRepo;
use Illuminate\Http\Request;

class AdminPanelController extends BaseController
{
    protected $continenteRepo;

    public function __construct(ContinenteRepo $continenteRepo, PaqueteRepo $paqueteRepo)
    {
        $this->continenteRepo = $continenteRepo;
        $this->paqueteRepo = $paqueteRepo;
    }

    public function index($seccion)
    {
        $vista = 'admin/'.$seccion;
        $data['continentes'] = $this->continenteRepo->listAll();
        $data['continents'] = Continente::with('paquetes')->get();

        return view($vista)->with($data);
    }

    public function opciones($idContinente)
    {
        $data['continente'] = Continente::find($idContinente);
        $data['continentes'] = $this->continenteRepo->listAll();
        $data['paquetes'] = $this->paqueteRepo->getPaquetesByContinente($idContinente);

        return view('admin.opciones')->with($data);
    }

    //Continentes
    public function storeContinente(Request $request)
    {
        $this->continenteRepo->create($request->input());
        return redirect()->route('admin.panel', 'continentes')->with('msgOk', 'Continente creado con éxito');
    }

    public function editarContinente($id)
    {
        dd($id);
    }

    public function updateContinente(Request $request, $id)
    {
        dd($request->input());
    }

    public function eliminarContinente($id)
    {
        dd($id);
    }

    //Paquetes
    public function storePaquete(Request $request)
    {
        $paquete = $this->paqueteRepo->create($request->input());

        if($request->file('pdf_file')){
            $file = $request->file('pdf_file');
            $nombre = $file->getClientOriginalName();
            \Storage::disk('local')->put($nombre,  \File::get($file));

            $paquete->pdf_file = $nombre;
            $paquete->save();
        }

        return redirect()->route('admin.panel', 'paquetes')->with('msgOk', 'Paquete creado con éxito');
    }

    public function editarPaquete($id)
    {
        $paquete = Paquete::find($id);
        return view('admin.editar-paquete', compact('paquete'));
    }

    public function updatePaquete(Request $request, $id)
    {
        dd($request->input());
    }

    public function eliminarPaquete($id)
    {
        dd($id);
    }

    //Opciones
    public function editarOpcion($id)
    {
        $opcion = Opcion::find($id);
        return view('admin.editar-opcion', compact('opcion'));
    }

    public function updateOpcion(Request $request, $id)
    {
        $opcion = Opcion::find($id);
        $continente = $opcion->paquete->continente->id;
        $opcion->descripcion = $request->descripcion;
        $opcion->importe = $request->importe;
        $opcion->impuesto = $request->impuesto;
        $opcion->save();

        //return redirect()->route('admin.panel', 'opciones')->with('msgOk', 'Opción editada con éxito');
        return redirect()->route('admin.continente.seleccion', $continente)->with('msgOk', 'Opción editada con éxito');
    }

    public function eliminarOpcion($id)
    {
        dd($id);
    }

    public function verPdf($file)
    {
        //return response()->make(\Illuminate\Support\Facades\File::get(public_path($file)),200)
        return response()->make(\Illuminate\Support\Facades\File::get(storage_path("app\\".$file)),200)
            ->header('Content-Type', 'application/pdf');
    }
}
