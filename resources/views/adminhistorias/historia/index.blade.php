@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Historias <a href="historia/create"><button class="btn btn-success">Adicionar Nueva Historia</button></a></h3>
		@include('adminhistorias.historia.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
               @foreach ($historias as $cat)
				<tr>
					<td>{{ $cat->idhistoria}}</td>
					<td>{{ $cat->nombre}}</td>			
					<td>
                        <a href="" data-target="#modal-delete-{{$cat->idhistoria}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('adminhistorias.historia.modal')
				
				@endforeach
			</table>
		</div>
		{{$historias->render()}}
	</div>
</div>

@endsection