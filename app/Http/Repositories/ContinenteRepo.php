<?php namespace App\Http\Repositories;

use App\Entities\Continente;

class ContinenteRepo extends BaseRepo
{

    public function getModel()
    {
        return new Continente;
    }

    public function listAll()
    {
        return $this->model
            ->orderBy('nombre')
            ->lists('nombre', 'id');
    }

}