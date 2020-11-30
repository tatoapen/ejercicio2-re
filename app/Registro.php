<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table='registro01';

    protected $primaryKey="idregistro";

    public $timestamps=false;

    protected $fillable =[
    	
        'tipo',
    	'muni',
    	'coordenadas',
    	'nombre',
    	'codigo'

    ];

    protected $guarded =[
    	

    ];
}
