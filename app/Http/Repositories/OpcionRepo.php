<?php namespace App\Http\Repositories;

use App\Entities\Opcion;

class OpcionRepo extends BaseRepo
{

    public function getModel()
    {
        return new Opcion;
    }

}