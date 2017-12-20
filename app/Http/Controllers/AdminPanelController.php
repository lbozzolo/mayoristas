<?php

namespace App\Http\Controllers;

use App\Entities\Continente;
use App\Entities\Paquete;
use App\Entities\Opcion;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Repositories\ContinenteRepo;
use App\Http\Repositories\PaqueteRepo;
use App\Http\Repositories\UserRepo;
use Illuminate\Http\Request;

class AdminPanelController extends BaseController
{
    protected $continenteRepo;

    public function __construct(ContinenteRepo $continenteRepo, PaqueteRepo $paqueteRepo, UserRepo $userRepo)
    {
        $this->continenteRepo = $continenteRepo;
        $this->paqueteRepo = $paqueteRepo;
        $this->userRepo = $userRepo;
    }

    public function index($seccion)
    {
        $vista = 'admin/'.$seccion;
        $data['continentes'] = $this->continenteRepo->listAll();
        $data['continents'] = Continente::with('paquetes')->get();
        if($seccion == 'usuarios'){
            $data['usuarios'] = User::all();
        }

        return view($vista)->with($data);
    }

    //Usuarios
    public function enableUser($id)
    {
        $usuario = User::find($id);
        $usuario->estado = 1;
        $usuario->save();

        return redirect()->route('admin.panel', 'usuarios');
    }

    public function disableUser($id)
    {
        if(Auth::user()->id == $id)
            return redirect()->back()->withErrors('No se puede deshabilitar a sí mismo');

        $usuario = User::find($id);
        $usuario->estado = 0;
        $usuario->save();

        return redirect()->route('admin.panel', 'usuarios');
    }

    public function adminUser($id)
    {
        $usuario = User::find($id);
        $usuario->rol = 1;
        $usuario->save();

        return redirect()->route('admin.panel', 'usuarios');
    }

    public function mayoristaUser($id)
    {
        $usuario = User::find($id);
        $usuario->rol = 2;
        $usuario->save();

        return redirect()->route('admin.panel', 'usuarios');
    }

    public function editUser($id)
    {
        $usuario = User::find($id);
        return view('users.editar-user', compact('usuario'));
    }

    public function updateUser(Request $request, $id)
    {
        $usuario = User::find($id);

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->legajo = $request->legajo;
        $usuario->telefono = $request->telefono;
        $usuario->domicilio = $request->domicilio;
        $usuario->email = $request->email;

        $usuario->save();

        return redirect()->route('admin.panel', 'usuarios')->with('msgOk', 'El usuario ha sido editado con éxito');
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
        $continente = Continente::find($id);
        return view('admin.editar-continente', compact('continente'));
    }

    public function updateContinente(Request $request, $id)
    {
        $continente = Continente::find($id);
        $continente->nombre = $request->nombre;
        $continente->descripcion = $request->descripcion;
        $continente->save();

        return redirect()->route('admin.panel', 'continentes')->with('msgOk', 'Continente editado con éxito');
    }

    public function eliminarContinente($id)
    {
        $continente = Continente::find($id);
        $continente->delete();

        return redirect()->route('admin.panel', 'continentes')->with('msgOk', 'Continente eliminado con éxito');
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
        $paquete = Paquete::find($id);
        $paquete->descripcion = $request->descripcion;

        if($request->file('pdf_file')){
            $file = $request->file('pdf_file');
            $nombre = $file->getClientOriginalName();
            \Storage::disk('local')->put($nombre,  \File::get($file));

            $paquete->pdf_file = $nombre;
        }

        $paquete->save();

        return redirect()->route('admin.panel', 'paquetes')->with('msgOk', 'Paquete editado con éxito');
    }

    public function eliminarPaquete($id)
    {
        $paquete = Paquete::find($id);
        $paquete->delete();

        return redirect()->route('admin.panel', 'paquetes')->with('msgOk', 'Paquete eliminado con éxito');
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
