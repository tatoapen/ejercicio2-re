<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Municipio;
use Illuminate\Support\Facades\redirect;
use App\Http\Requests\MunicipioFormRequest;
use DB;

class MunicipioController extends Controller
{
    public function _construct(){

    }
    public function index(Request $request){
    	if ($request){
    		$query=trim($request->get('searchText'));
    		$municipios=DB::table('municipio01')->where('nombre','LIKE','%'.$query.'%')
    		->where('condicion','=','1')
    		->orderby('idmunicipio')
    		->paginate(7);
    		return view("almacen.municipio.index",["municipios"=>$municipios, "searchText"=>$query]);
    	}
    }


    public function create(){
    	return view("almacen.municipio.create");
    }

    public function store(MunicipioFormRequest $request){
    	$municipio=new Municipio;
    	$municipio->codigo=$request->get('codigo');
    	$municipio->nombre=$request->get('nombre');
    	$municipio->poblacion=$request->get('poblacion');
    	$municipio->condicion='1';
    	$municipio->save();
    	return redirect::to('almacen/municipio');
    }

    public function show($id){
    	return view("almacen.municipio.show",["municipio"=>Municipio::findOrFail($id)]);
    }

    public function edit($id){
    	return view("almacen.municipio.edit",["municipio"=>Municipio::findOrFail($id)]);
    }
    public function update(MunicipioFormRequest $request, $id){
    	$municipio=Municipio::findOrFail($id);
    	$municipio->codigo=$request->get('codigo');
    	$municipio->nombre=$request->get('nombre');
    	$municipio->poblacion=$request->get('poblacion');
    	$municipio->save();
    	return redirect::to('almacen/municipio');
    }

    public function destroy($id){
    	$municipio=Municipio::findOrFail($id);
    	$municipio->condicion='0';
    	$municipio->update();
    	return Redirect::to('almacen/municipio');
    }
}
