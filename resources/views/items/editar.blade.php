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
				<form action="{{ route('item.update', $data['item']->id) }}" method="POST">
					{{method_field('PUT')}}
					{{csrf_field()}}
					<div class="row">
						<div class="col-6">
						    <label for="nombre">Nombre</label>
						    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Artículo" value="{{ $data['item']->name }}" autocomplete="off">
						</div>
						<div class="col-6">
						    <label for="precio">Precio</label>
						    <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value="{{ $data['item']->price }}">
						</div>
					</div>
					<div class="row">
						<div class="col-6">
						    <label for="stock">Stock</label>
						    <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock" value="{{ $data['item']->stock }}" autocomplete="off">
						</div>
						<div class="col-6">
						    <label for="categoria">Categoria</label>
						    <select name="categoria" id="categoria" class="form-control">
								<option value="0">- Selecciona -</option>
								@foreach ($data['cat'] as $c)
									<option value="{{$c->id}}" {{$data['item']->id_category == $c->id ? 'selected' : ''}}>{{$c->name}}</option>
								@endforeach
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