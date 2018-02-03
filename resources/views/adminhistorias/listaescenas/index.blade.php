@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<a href="{{url('adminhistorias/historia')}}"><button class="btn btn-success">Terminar llenado</button></a>
		<h3>Agregar Condicion</h3>
		<h3>Listado de Escenas</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>				
					<th>Titulo</th>
					<th>Opciones</th>
				</thead>
               @foreach ($escenas as $cat)
				<tr>
					<td>{{ $cat->titulo}}</td>
			
					<td>
					<a href="{{URL::action('ListaescenasController@edit',$cat->idescena)}}"><button class="btn btn-info">Editar</button></a>

				</tr>				
				@endforeach
			</table>
		</div>

	</div>
</div>

@endsection