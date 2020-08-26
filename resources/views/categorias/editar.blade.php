@extends('layout')

@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col-sm">
		    </div>
		    <div class="col-sm">
		    	<h1>Página de Inicio</h1>
		    </div>
		    <div class="col-sm">
		    </div>
		</div>
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
                <form action="{{ route('categorias.update', $cat->id) }}" method="POST">
                    {{method_field('PUT')}}
					{{csrf_field()}}
					<div class="row">
						<div class="col-12">
						    <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$cat->name}}" autocomplete="off">
						</div>
					</div>
					<div class="row">
						<div class="col-12">
						    <label for="description">Descripción</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$cat->description}}</textarea>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<br>
						    <input type="submit" class="btn btn-primary" value="Guardar">
						</div>
					</div>
				</form>
			</div>
			<div class="col-3"></div>
		</div>
	</div>
@stop