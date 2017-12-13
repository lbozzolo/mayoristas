<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $table = 'paquetes';
    protected $fillable = ['continente_id', 'descripcion', 'pdf_file'];

    //Relationships
    public function continente()
    {
        return $this->belongsTo(Continente::class);
    }

}