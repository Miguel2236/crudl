@extends('layout')

@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col-4">
				<a href="{{ route('categorias.crear') }}" class="btn btn-light">Nueva Categoria</a>
			</div>
			<div class="col-4"></div>
			<div class="col-4"></div>
		</div>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<h2>Listado de Categorias</h2>
				<br>
				<div id="tbl">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre Categoria</th>
								<th>Observación</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($catalogos as $cat)
								<tr>
									<td>{{ $cat->id }}</td>
									<td>{{ $cat->name }}</td>
									<td>{{ $cat->description }}</td>
									<td>
										<a href="{{ route('categorias.edit',['id' => $cat->id]) }}" class="btn btn-info">Edit</a>
										<button class="btn btn-outline-success" title="Nuevo">+</button>
										<button class="btn btn-outline-danger" title="Eliminar">-</button>
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