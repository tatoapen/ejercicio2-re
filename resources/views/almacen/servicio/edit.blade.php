@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Servicio: {{$servicio->servicio }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{$errors}}</li>
				@endforeach
			</ul>
			</div>
			@endif

		{{Form::open(array('action'=>array('ServicioController@update',$servicio->idservicio),'method'=>'patch'))}}
			{{Form::token()}}
			
			<div class="form-group">
				<label for="servicio">Nombre</label>
				<input type="text" name="servicio" class="form-control" value="{{$servicio->servicio}}" placeholder="Nombre...">
			</div>
			<div class="form-group">
				<label for="descrepcion">Descripción</label>
				<input type="text" name="descrepcion" class="form-control" value="{{$servicio->descrepcion}}"placeholder="Descripción...">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
@endsection