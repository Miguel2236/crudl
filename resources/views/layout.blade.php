<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<title>Inicio</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="{{ route('home') }}">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('lista') }}">Mostrar Articulos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('categorias.listar') }}">Mostrar Categoria</a>
					</li>
					{{-- <li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li> --}}
				</ul>
			</div>
		</div>
	</header>

	@yield('contenido')

	<footer class="footer">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-12">
	                <div class="float-left pull-none">
	                    <p class="">{{ date('Y') }} © Copyrigth. Design by <a href="https://coderthemes.com/" target="_blank" class="">Coderthemes.com</a> </p>
	                </div>
	            </div>
	        </div>
	    </div>
	</footer>
</body>
</html>	