<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
     protected $table='usuario';

    protected $primaryKey="idusuario";

    public $timestamps=false;

    protected $fillable =[
    	'nombre',
    	'contrasena',
    	'puesto',
    	'estado'

    ];

    protected $guarded =[
    	

    ];//
}
