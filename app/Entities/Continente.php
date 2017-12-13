<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Continente extends Model
{
    protected $table = 'continentes';
    protected $fillable = ['nombre', 'descripcion'];

    //Relationships
    public function paquetes()
    {
        return $this->hasMany(Paquete::class);
    }

}