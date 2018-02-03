@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Escena <a href="{{URL::action('EscenaController@edit',$idhistoria)}}">><button class="btn btn-success">Terminar de Adicionar Escenas</button></a>

			</h3>
		
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'adminhistorias/escena','method'=>'POST','autocomplete'=>'off','files'=> true))!!}
            {{Form::token()}}

             <div class="form-group">
            	<label for="idhistoria">idhistoria</label>
            	<input type="text" name="idhistoria" class="form-control" value="{{$idhistoria}}" placeholder="idhistoria...">
            </div>
            <div class="form-group">
            	<label for="titulo">Titulo</label>
            	<input type="text" name="titulo" class="form-control" placeholder="Titulo...">
            </div>
            <div class="form-group">
            	<label for="imagen">Imagen</label>
            	<input type="file" name="imagen" class="form-control">
            </div>


            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection
