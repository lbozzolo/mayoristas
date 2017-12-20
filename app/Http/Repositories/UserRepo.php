<?php namespace App\Http\Repositories;

use App\USer;

class UserRepo extends BaseRepo
{

    public function getModel()
    {
        return new User;
    }

    public function listAll()
    {
        return $this->model
            ->orderBy('nombre')
            ->lists('nombre', 'id');
    }

}