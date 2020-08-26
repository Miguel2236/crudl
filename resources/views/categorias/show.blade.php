@extends('layout')

@section('contenido')
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<h1>Informacion del Catalogo</h1>
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
								<th>ID</th>
								<th>Nombre</th>
								<th>Descripción</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{{ $catalogos->id }}</td>
								<td>{{ $catalogos->name }}</td>
								<td>{{ $catalogos->description }}</td>
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