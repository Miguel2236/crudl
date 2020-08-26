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
										<a href="{{ route('item.info',['id' => $items->id]) }}" class="btn btn-outline-dark"><i class="fas fa-info-circle"></i></a>
										<a href="{{ route('item.edit',['id' => $items->id]) }}" class="btn btn-outline-dark"><i class="fas fa-pencil-alt"></i></a>
										<form method="POST" action="{{ route('item.destroy', $items->id) }}">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-outline-dark"><i class="far fa-trash-alt"></i></button>
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