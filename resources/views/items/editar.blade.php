@extends('layout')

@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col-sm">
		    </div>
		    <div class="col-sm">
		    	<h1>Editar Registro</h1>
		    </div>
		    <div class="col-sm">
		    </div>
		</div>
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<form action="{{ route('item.update', $item->id) }}" method="POST">
					{{method_field('PUT')}}
					{{csrf_field()}}
					<div class="row">
						<div class="col-6">
						    <label for="nombre">Nombre</label>
						    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Artículo" value="{{ $item->name }}" autocomplete="off">
						</div>
						<div class="col-6">
						    <label for="precio">Precio</label>
						    <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value="{{ $item->price }}">
						</div>
					</div>
					<div class="row">
						<div class="col-6">
						    <label for="stock">Stock</label>
						    <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock" value="{{ $item->stock }}" autocomplete="off">
						</div>
						<div class="col-6">
						    <label for="categoria">Categoria</label>
						    <select name="categoria" id="categoria" class="form-control">
						    	<option value="0">Selecciona</option>
						    	<option value="1" {{$item->id_category == 1 ? 'selected' : ''}}>Físico</option>
						    	<option value="2" {{$item->id_category == 2 ? 'selected' : ''}}>Digital</option>
						    </select>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<br>
							<input type="submit" class="btn btn-primary" value="Enviar">
						</div>
					</div>
					
				</form>
			</div>
			<div class="col-3"></div>
		</div>
	</div>
@stop