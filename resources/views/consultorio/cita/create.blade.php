@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Cita</h3>
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

			{!!Form::open(array('url'=>'consultorio/cita','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}

			<div class="row">
				
			
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
				<label >Paciente</label>
				<select name="idpersona" class="form-control">
					@foreach ($personas as $per)
						<option value="{{$per->idpersona}}">{{$per->nombre}} </option>
					@endforeach
				</select>
			</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" name="fecha" required value="{{old('fecha')}}" class="form-control">
				</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
				<label for="hora">Hora</label>
				<input type="time" name="hora" required value="{{old('hora')}}" class="form-control">
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