<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table='municipio01';

    protected $primaryKey="idmunicipio";

    public $timestamps=false;

    protected $fillable =[
    	'codigo',
    	'nombre',
    	'poblacion'

    ];

    protected $guarded =[
    	

    ];
}
