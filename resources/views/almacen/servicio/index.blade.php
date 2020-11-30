@extends ('layouts.admin')
@section ('contenido')
	<div class="row"> 
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Servicios <a href="servicio/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('almacen.servicio.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Servicio</th>
						<th>Descripción</th>
						<th>Opciones</th>
					</thead>
					@foreach ($servicios as $ser)
					<tr>
						<td>{{$ser->idservicio}}</td>
						<td>{{$ser->servicio}}</td>
						<td>{{$ser->descrepcion}}</td>
						<td>
							<a href="{{URL::action('ServicioController@edit',$ser->idservicio)}}"><button class="btn btn-info">Editar</button> </a>
							<a href="" data-target="#modal-delete-{{$ser->idservicio}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('almacen.servicio.modal')
					@endforeach
				</table>
			</div>
			{{$servicios->render()}}
		</div>

	</div>
@endsection