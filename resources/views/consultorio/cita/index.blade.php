@extends ('layouts.admin')
@section ('contenido')
	<div class="row"> 
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Citas<a href="cita/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('consultorio.cita.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Paciente</th>
						<th>Fecha</th>
						<th>Hora</th>
						<th>Telefono</th>
						<th>Dirección</th>
						<th>Opciones</th>
					</thead>
					@foreach ($ciitas as $cii)
					<tr>
						<td>{{$cii->idcitas}}</td>
						<td>{{$cii->paciente}}</td>
						<td>{{$cii->fecha}}</td>
						<td>{{$cii->hora}}</td>
						<td>{{$cii->telefono}}</td>
						<td>{{$cii->direccion}}</td>
						<td>
							<a href="{{URL::action('CitaController@edit', $cii->idcitas)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$cii->idcitas}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('consultorio.cita.modal')
					@endforeach
				</table>
			</div>
			{{$ciitas->render()}}
		</div>

	</div>
@endsection