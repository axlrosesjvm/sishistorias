@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Dialogo <a href="{{URL::action('DialogoController@edit',$idhistoria)}}">><button class="btn btn-success">Terminar de Adicionar Dialogos</button></a>
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

			{!!Form::open(array('url'=>'adminhistorias/dialogo','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

        <div class="form-group">
            	<label for="idhistoria">idhistoria</label>
            	<input type="text" name="idhistoria" class="form-control" value="{{$idhistoria}}" placeholder="idhistoria...">
            </div>

                    <div class="form-group">
            	<label for="idescena">idescena</label>
            	<input type="text" name="idescena" class="form-control" value="{{$idescena}}" placeholder="idescena...">
            </div>

             <div class="form-group">
            	<label for="idpersonaje">Personaje</label>
            	<select name="idpersonaje" class="form-control">
            		@foreach($personajes as $cat)
            			<option value="{{$cat->idpersonaje}}">{{$cat->nombre}}</option>
            			@endforeach            		
            	</select> 
            </div>
                    <div class="form-group">
            	<label for="texto">texto</label>
            	<input type="text" name="texto" class="form-control"  placeholder="texto...">
            </div>

            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection
