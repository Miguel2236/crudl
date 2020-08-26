@extends('layout')

@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col-4">
				<a href="{{ route('item') }}" class="btn btn-light">Nuevo Articulo</a>
			</div>
			<div class="col-4"></div>
			<div class="col-4"></div>
		</div>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<h2>Listado de productos</h2>
				<br>
				<div id="tbl">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre Producto</th>
								<th>Precio</th>
								<th>Stock</th>
								<th>Acctiones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($articulos as $items)
								<tr>
									<td>{{ $items->id }}</td>
									<td>{{ $items->name }}</td>
									<td>{{ $items->price }}</td>
									<td>{{ $items->stock }}</td>
									<td>
										<a href="{{ route('item.info',['id' => $items->id]) }}" class="btn btn-info">Info</a>
										<a href="{{ route('item.edit',['id' => $items->id]) }}" class="btn btn-success">Editar</a>
										<form action="POST" action="{{ route('item.destroy', ['id' => $items->id]) }}">
											{{csrf_field()}}
											{{method_field('DELETE')}}
											<button type="submit" class="btn btn-danger">Eliminar</button>
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
@stop