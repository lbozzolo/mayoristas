<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $table = 'paquetes';
    protected $fillable = ['continente_id', 'nombre','descripcion', 'contenido', 'pdf_file'];

    //Relationships
    public function continente()
    {
        return $this->belongsTo(Continente::class);
    }

    public function opciones()
    {
        return $this->hasMany(Opcion::class);
    }

    public function images()
    {
        return $this->morphMany('App\Entities\Image', 'imageable');
    }

}
