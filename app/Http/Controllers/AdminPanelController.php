<?php

namespace App\Http\Controllers;

use App\Entities\Continente;
use App\Entities\Image;
use App\Entities\Paquete;
use App\Entities\Opcion;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Repositories\ContinenteRepo;
use App\Http\Repositories\PaqueteRepo;
use App\Http\Repositories\OpcionRepo;
use App\Http\Repositories\UserRepo;
use Illuminate\Http\Request;

class AdminPanelController extends BaseController
{
    protected $continenteRepo;
    protected $paqueteRepo;
    protected $userRepo;
    protected $opcionRepo;

    public function __construct(ContinenteRepo $continenteRepo, PaqueteRepo $paqueteRepo, UserRepo $userRepo, OpcionRepo $opcionRepo)
    {
        $this->continenteRepo = $continenteRepo;
        $this->paqueteRepo = $paqueteRepo;
        $this->userRepo = $userRepo;
        $this->opcionRepo = $opcionRepo;
    }

    public function index($seccion)
    {
        $vista = 'admin/'.$seccion;
        $homeBase = Continente::where('nombre', 'home')->first();
        $data['continentes'] = $this->continenteRepo->listAll();
        $data['continents'] = Continente::with('paquetes', 'images')->get();
        $data['homeContinents'] = Paquete::with('images')->where('continente_id', $homeBase->id)->get();


        if($seccion == 'usuarios') {
            $data['usuarios'] = User::all();
        }

        if($seccion == 'home'){
            $home = Continente::where('nombre', '=', 'Home')->first();
            $paquete = $home->paquetes()->first();
            $data['paquete'] = $paquete;
            $data['home'] = $home;
            //return redirect()->route('admin.paquete.editar', $paquete->id);
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

    public function seeProfile($id)
    {
        $usuario = User::find($id);
        return view('users.see-profile', compact('usuario'));
    }

    //Continentes
    public function storeContinente(Request $request)
    {
        $continente = $this->continenteRepo->create($request->input());

        if($request->file('img')){
            $file = $request->file('img');
            $nombre = $file->getClientOriginalName();
            Storage::disk('local')->put($nombre,  File::get($file));

            $imagen = new \App\Entities\Image(['path' => $nombre, 'principal' => 1]);
            $continente->images()->save($imagen);
        }

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

        if($request->file('img')){
            $file = $request->file('img');
            $nombre = $file->getClientOriginalName();
            Storage::disk('local')->put($nombre,  File::get($file));

            $imagen = new \App\Entities\Image(['path' => $nombre, 'principal' => 1]);
            $continente->images()->save($imagen);
        }

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
        //dd($request->all());
        $paquete = $this->paqueteRepo->create($request->input());

        if($request->file('pdf_file')){
            $file = $request->file('pdf_file');
            $nombre = $file->getClientOriginalName();
            Storage::disk('local')->put($nombre,  File::get($file));

            $paquete->pdf_file = $nombre;
            $paquete->save();
        }

        $homeBase = Continente::where('nombre', 'home')->first();

        if($paquete->continente_id == $homeBase->id){
            $url = redirect()->route('admin.panel', 'home')->with('msgOk', 'Home creada con éxito');
        }else{
            $url = redirect()->route('admin.panel', 'paquetes')->with('msgOk', 'Paquete creado con éxito');
        }

        return $url;
    }

    public function editarPaquete($id)
    {
        $paquete = Paquete::find($id);

        if($paquete->continente->nombre == 'Home'){
            $url = view('admin.editar-home', compact('paquete'));
        }else{
            $url = view('admin.editar-paquete', compact('paquete'));
        }

        return $url;
    }

    public function updatePaquete(Request $request, $id)
    {
        $paquete = Paquete::find($id);
        $paquete->nombre = $request->nombre;
        $paquete->descripcion = $request->descripcion;
        $paquete->contenido = $request->contenido;

        if($request->file('pdf_file')){
            $file = $request->file('pdf_file');
            $nombre = $file->getClientOriginalName();
            Storage::disk('local')->put($nombre,  File::get($file));

            $paquete->pdf_file = $nombre;
        }

        $paquete->save();

        if($paquete->continente->nombre == 'Home'){
            $url = redirect()->route('admin.panel', 'home')->with('msgOk', 'Home editada con éxito');
        }else{
            $url = redirect()->route('admin.panel', 'paquetes')->with('msgOk', 'Paquete editado con éxito');
        }

        return $url;
    }

    public function eliminarPaquete($id)
    {
        $paquete = Paquete::find($id);
        $paquete->delete();

        if($paquete->continente->nombre == 'Home'){
            $url = redirect()->route('admin.panel', 'home')->with('msgOk', 'Variante eliminada con éxito');
        }else{
            $url = redirect()->route('admin.panel', 'paquetes')->with('msgOk', 'Paquete eliminado con éxito');
        }

        return $url;
    }

    //Opciones
    public function opciones($idContinente)
    {
        $data['continente'] = Continente::find($idContinente);
        $data['continentes'] = $this->continenteRepo->listAll();
        $data['paquetes'] = $this->paqueteRepo->getPaquetesByContinente($idContinente);
        $data['paquetesSelect'] = $data['paquetes']->lists('nombre', 'id');

        return view('admin.opciones')->with($data);
    }

    public function crearOpcion(Request $request)
    {
        $opcion = $this->opcionRepo->create($request->input());
        $continente = $opcion->paquete->continente->id;
        return redirect()->route('admin.continente.seleccion', $continente)->with('msgOk', 'Opción editada con éxito');
    }

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

        return redirect()->route('admin.continente.seleccion', $continente)->with('msgOk', 'Opción editada con éxito');
    }

    public function eliminarOpcion($id)
    {
        $opcion = Opcion::find($id);
        $continente = $opcion->paquete->continente->id;
        $opcion->delete();
        return redirect()->route('admin.continente.seleccion', $continente)->with('msgOk', 'Opción eliminada con éxito');
    }

    //Visualizar archivos
    public function verPdf($file)
    {
        return response()->make(\Illuminate\Support\Facades\File::get(storage_path("app/".$file)),200)
            ->header('Content-Type', 'application/pdf');
    }

    public function verImage($file)
    {
        return response()->make(\Illuminate\Support\Facades\File::get(storage_path("app/".$file)),200)
            ->header('Content-Type', 'image/jpg');
    }

    public function storeImage(Request $request, $id)
    {
        //dd($request->all());
        if($request->seccion){
            $continente = Paquete::find($id);
        }else{
            $continente = Continente::find($id);
        }

        if($request->file('img')){
            $file = $request->file('img');
            $nombre = $file->getClientOriginalName();
            Storage::disk('local')->put($nombre,  File::get($file));

            $imagen = new \App\Entities\Image(['path' => $nombre, 'principal' => 0]);
            $continente->images()->save($imagen);
        }

        return redirect()->back();
    }

    public function principalImage($id, $seccion = null)
    {
        $image = Image::find($id);

        if($seccion != null && $seccion = 'home' || $seccion != null && $seccion = 'paquete'){
            $continente = Paquete::find($image->imageable->id);
        }else{
            $continente = Continente::find($image->imageable->id);
        }

        foreach($continente->images as $imagen){
            $imagen->principal = 0;
            $imagen->save();
        }
        $image->principal = 1;
        $image->save();

        return redirect()->back();
        //return redirect()->route('admin.panel', 'imagenes');
    }

    public function deleteImage($id)
    {
        $image = Image::find($id);
        $image->delete();

        return redirect()->back()->withErrors('Imagen eliminada con éxito');
    }
}
