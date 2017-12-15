<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    protected $table = 'opciones';
    protected $fillable = ['paquete_id', 'descripcion', 'importe', 'impuesto'];

    //Relationships

    public function paquete()
    {
        return $this->belongsTo(Paquete::class);
    }

}
