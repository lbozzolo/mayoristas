<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ContinenteRepo;
use App\Http\Repositories\PaqueteRepo;

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
        //$data['paquetes'] = $this->paqueteRepo->listAll();
        foreach($data['continentes'] as $id => $continente){
            $data['paquetes'][$continente] = $this->paqueteRepo->getPaquetesByContinente($id);
        }

        return view($vista)->with($data);
    }
}
