@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Registro</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{$errors}}</li>
				@endforeach
			</ul>
			</div>
			@endif
			</div>
			</div>

			{!!Form::open(array('url'=>'datos/registro','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
			{{Form::token()}}

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
				<label for="tipo">Servicio</label>
				<input type="text" name="tipo" required value="{{old('tipo')}}" class="form-control" placeholder="Servicio...">
				</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
				<label for="muni">Municipio</label>
				<input type="text" name="muni" required value="{{old('muni')}}" class="form-control" placeholder="Municipio...">
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
			

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			</div>

			</div>

			
			{!!Form::close()!!}
		
@endsection