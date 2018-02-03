@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Escena: {{ $escena->titulo}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($escena,['method'=>'PATCH','route'=>['adminhistorias.listaescenas.update',$escena->idescena]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="condiciontexto">condicion</label>
            	<input type="text" name="condiciontexto" class="form-control" placeholder="Nombre...">
            </div>
            
             <div class="form-group">
            	<label for="condiciona">condicion A</label>
            	<select name="condiciona" class="form-control">
            		@foreach($escenas as $cat)
            			<option value="{{$cat->idescena}}">{{$cat->titulo}}</option>
            			@endforeach            		
            	</select> 
            </div>
                         <div class="form-group">
            	<label for="condiciona">condicion B</label>
            	<select name="condiciona" class="form-control">
            		@foreach($escenas as $cat)
            			<option value="{{$cat->idescena}}">{{$cat->titulo}}</option>
            			@endforeach            		
            	</select> 
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection