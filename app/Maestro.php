<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Maestro as Authenticatable;

class Maestro extends Model{
   	
    protected $table='maestros';
    protected $primaryKey = 'id_maestros';
    protected $fillable = [
        'id_usuario'
    ];
}
