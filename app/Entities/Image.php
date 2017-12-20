<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = ['path', 'imageable_id', 'imageable_type', 'principal'];

    //Relationships
    public function imageable()
    {
        return $this->morphTo();
    }

}
