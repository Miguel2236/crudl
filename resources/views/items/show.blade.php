@extends('layout')

@section('contenido')
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<h1>Informacion del articulo</h1>
			</div>
			<div class="col-3"></div>
		</div>
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Producto</h5>
				    <table class="table">
				    	<thead>
							<tr>
								<th>Nombre</th>
								<th>Precio</th>
								<th>Stock</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{{ $item->name }}</td>
								<td>{{ $item->price }}</td>
								<td>{{ $item->stock }}</td>
							</tr>
						</tbody>
				    </table>
				  </div>
				</div>
			</div>
			<div class="col-4"></div>
		</div>
	</div>
@stop