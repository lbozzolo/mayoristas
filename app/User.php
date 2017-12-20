<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido', 'telefono', 'domicilio', 'legajo', 'estado', 'rol', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public function getFullnameAttribute()
    {
        return $this->attributes['nombre'].' '.$this->attributes['apellido'];
    }

    public function getFechaAltaAttribute()
    {
        return date('d/m/Y', strtotime($this->attributes['created_at']));
    }

    public function getEstadoTagAttribute()
    {
        if($this->attributes['estado'] == 0){
            return '<span class="text-danger" title="deshabilitado"><i class="fa fa-ban"></i> </span>';
        }else{
            return '<span class="text-success" title="habilitado"><i class="fa fa-check"></i> </span>';
        }
    }

    public function getRolNameAttribute()
    {
        if($this->attributes['rol'] == 1){
            return '<span class="label label-primary">administrador</span>';
        }elseif($this->attributes['rol'] == 2){
            return '<span class="label label-warning">mayorista</span>';
        }
    }

}
