<?php namespace App\Http\Repositories;

use App\Entities\Paquete;

class PaqueteRepo extends BaseRepo
{

    public function getModel()
    {
        return new Paquete;
    }

    public function listAll()
    {
        return $this->model
            ->orderBy('descripcion')
            ->lists('descripcion', 'id');
    }

    public function getPaquetesByContinente($id)
    {
        return $this->model->where('continente_id', '=', $id)->get();
    }

}