@extends ('layouts.admin')
@section ('contenido')
	<div class="row"> 
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Municipios <a href="municipio/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('almacen.municipio.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Poblacion Estimada</th>
						
						<th>Opciones</th>
					</thead>
					@foreach ($municipios as $muni)
					<tr>
						<td>{{$muni->idmunicipio}}</td>
						<td>{{$muni->codigo}}</td>
						<td>{{$muni->nombre}}</td>
						<td>{{$muni->poblacion}}</td>
						<td>
							<a href="{{URL::action('MunicipioController@edit',$muni->idmunicipio)}}"><button class="btn btn-info">Editar</button> </a>
							<a href="" data-target="#modal-delete-{{$muni->idmunicipio}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('almacen.municipio.modal')
					@endforeach
				</table>
			</div>
			{{$municipios->render()}}
		</div>

	</div>
@endsection