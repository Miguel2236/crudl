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
				<form action="{{ route('items.store') }}" method="POST">
					@csrf
					<div class="row">
						<div class="col-6">
						    <label for="nombre">Nombre</label>
						    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Artículo" autocomplete="off">
						</div>
						<div class="col-6">
						    <label for="precio">Precio</label>
						    <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" autocomplete="off">
						</div>
					</div>
					<div class="row">
						<div class="col-6">
						    <label for="stock">Stock</label>
						    <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock" autocomplete="off">
						</div>
						<div class="col-6">
						    <label for="categoria">Categoria</label>
						    <select name="categoria" id="categoria" class="form-control">
								<option value="0">- Seleccionar -</option>
								@isset($cat)
									@foreach ($cat as $c)
										<option value="{{$c->id}}">{{$c->name}}</option>
									@endforeach
								@endisset
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