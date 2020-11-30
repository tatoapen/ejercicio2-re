@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Registro:  {{$registro->nombre}}</h3>
            @if (count($errors)>0)                
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach                    
                </ul>
            </div>
            @endif
        </div>
    </div> 

            {{Form::open(array('action'=>array('RegistroController@update',$registro->idregistro),'method'=>'patch'))}}
            {{Form::token()}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                <label >Servicio</label>
                <select name="idservicio" class="form-control">
                    @foreach ($servicios as $ser)
                        <option value="{{$ser->idservicio}}">{{$ser->servicio}} </option>
                    @endforeach
                </select>
            </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                <label >Municipio</label>
                <select name="idmunicipio" class="form-control">
                    @foreach ($municipios as $muni)
                        <option value="{{$muni->idmunicipio}}">{{$muni->nombre}} </option>
                    @endforeach
                </select>
            </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                <label for="codigo">Coordenada</label>
                <input type="text" name="coordenadas" required value="{{old('coordenadas')}}" class="form-control" placeholder="Coordenada...">
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                <label for="stock">Nombre</label>
                <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
            </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                <label for="stock">Codigo</label>
                <input type="text" name="codigo" required value="{{old('codigo')}}" class="form-control" placeholder="Codigo...">
            </div>
            </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
    </div> 

     </div>   
    {!!Form::close()!!} 
    

@endsection