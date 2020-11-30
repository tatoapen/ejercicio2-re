@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Paciente</h3>
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

		{{Form::open(array('action'=>array('PacienteController@update',$persona->idpersona),'method'=>'patch'))}}
			{{Form::token()}}
			
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre"  value="{{$persona->nombre}}" class="form-control" placeholder="Nombre...">
			</div>

				</div>
			
			
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
				<label for="direccion">Direccion</label>
				<input type="text" name="direccion"  value="{{$persona->direccion}}" class="form-control" placeholder="Direccion...">
			</div>
			</div>
			
			
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
				<label >Documento</label>
				<SELECT name="tipo_documento" class="form-control">
				@if ($persona->tipo_documento=='DPI')
						<option value="DPI" selected="">DPI</option>
						<option value="NIT">NIT</option>
						<option value="PAS">PAS</option>
				@elseif($persona->tipo_documento=='NIT')
						<option value="DPI">DPI</option>
						<option value="NIT" selected>NIT</option>
						<option value="PAS">PAS</option>
				@else 
						<option value="DPI">DPI</option>
						<option value="NIT">NIT</option>
						<option value="PAS" selected>PAS</option>
				@endif
						</SELECT>
				</div>
				</div>
				
			
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
				<label for="num_documento">Numero de documento</label>
				<input type="text" name="num_documento"  value="{{$persona->num_documento}}" class="form-control" placeholder="Numero de Documento...">
			</div>
			</div>
			
			
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono"  value="{{$persona->telefono}}" class="form-control" placeholder="Telefono del Cliente...">
			</div>
			</div>
			
			
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email"  value="{{$persona->email}}" class="form-control" placeholder="Email del Cliente...">
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