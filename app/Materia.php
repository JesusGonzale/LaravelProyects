<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Materia extends Model
{
    protected $table='materias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre','portada','id_maestro'
    ];

    public static function usuarios_whit_materias(){
    	return DB::table('materias')
    					->join('users','users.id','=','materias.id_maestro')
    					->get();
    }
}
