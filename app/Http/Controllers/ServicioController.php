<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Servicio;
use Illuminate\Support\Facades\redirect;
use App\Http\Requests\ServicioFormRequest;
use DB;

class ServicioController extends Controller
{
    
     public function _construct(){

    }
    public function index(Request $request){
    	if ($request){
    		$query=trim($request->get('searchText'));
    		$servicios=DB::table('servicio')->where('servicio','LIKE','%'.$query.'%')
    		->where('condicion','=','1')
    		->orderby('idservicio')
    		->paginate(7);
    		return view("almacen.servicio.index",["servicios"=>$servicios, "searchText"=>$query]);
    	}
    }


    public function create(){
    	return view("almacen.servicio.create");
    }

    public function store(ServicioFormRequest $request){
    	$servicio=new Servicio;
    	$servicio->servicio=$request->get('servicio');
    	$servicio->descrepcion=$request->get('descrepcion');
    	$servicio->condicion='1';
    	$servicio->save();
    	return redirect::to('almacen/servicio');
    }

    public function show($id){
    	return view("almacen.servicio.show",["servicio"=>Servicio::findOrFail($id)]);
    }

    public function edit($id){
    	return view("almacen.servicio.edit",["servicio"=>Servicio::findOrFail($id)]);
    }
    public function update(ServicioFormRequest $request, $id){
    	$servicio=Servicio::findOrFail($id);
    	$servicio->servicio=$request->get('servicio');
    	$servicio->descrepcion=$request->get('descrepcion');
    	$servicio->save();
    	return redirect::to('almacen/servicio');
    }

    public function destroy($id){
    	$servicio=Servicio::findOrFail($id);
    	$servicio->condicion='0';
    	$servicio->update();
    	return Redirect::to('almacen/servicio');
    }
}
