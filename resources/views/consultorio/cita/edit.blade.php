@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Cita:  {{$ciitas->nombre}}</h3>
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

            {{Form::open(array('action'=>array('CitaController@update',$ciitas->idcitas),'method'=>'patch'))}}
            {{Form::token()}}
    <div class="row">
          

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                <label >Paciente</label>
                <select name="idcategoria" class="form-control">
                    @foreach ($personas as $per)
                        <option value="{{$per->idpersona}}">{{$per->nombre}} </option>
                    @endforeach
                </select>
            </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" required value="{{$ciitas->fecha}}" class="form-control">
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" name="hora" required value="{{$ciitas->hora}}" class="form-control">
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