<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table='users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre','email','apellido',
        'password','codigoEquipo','tipoUsuario'
    ];
    
    public function setPasswordAttribute($valor){
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
}
