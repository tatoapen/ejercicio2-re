@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Municipio: {{$municipio->nombre }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{$errors}}</li>
				@endforeach
			</ul>
			</div>
			@endif

		{{Form::open(array('action'=>array('MunicipioController@update',$municipio->idmunicipio),'method'=>'patch'))}}
			{{Form::token()}}
			<div class="form-group">
				<label for="codigo">Código</label>
				<input type="text" name="codigo" class="form-control" value="{{$municipio->codigo}}" placeholder="Código...">
			</div>
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" value="{{$municipio->nombre}}" placeholder="Nombre...">
			</div>
			<div class="form-group">
				<label for="poblacion">Población</label>
				<input type="text" name="poblacion" class="form-control" value="{{$municipio->poblacion}}"placeholder="Población...">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
@endsection