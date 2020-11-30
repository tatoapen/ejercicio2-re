<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table='servicio';

    protected $primaryKey="idservicio";

    public $timestamps=false;

    protected $fillable =[
    	'servicio',
    	'descrepcion',
    	'condicion'

    ];

    protected $guarded =[
    	

    ];
}
