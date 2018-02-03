@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Personaje <a href="{{URL::action('PersonajeController@edit',$idhistoria)}}">><button class="btn btn-success">Terminar de Adicionar Personajes</button></a>

			</h3>
					<h3> {{ $idhistoria}}</h3>				
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'adminhistorias/personaje','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

             <div class="form-group">
            	<label for="idhistoria">idhistoria</label>
            	<input type="text" name="idhistoria" class="form-control" value="{{$idhistoria}}" placeholder="idhistoria...">
            </div>
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" placeholder="Nombre...">
            </div>

            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection
