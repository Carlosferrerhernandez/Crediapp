<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>CrediApp - Panel de control</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<!-- CSS Files -->
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset('demo/demo.css') }}" rel="stylesheet" />

	<link href="{{ asset('css/admin_style.css') }}" rel="stylesheet" />
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-color="white" data-active-color="green">
			<div class="logo text-center" style="padding-top: 16px;">
				<img src="{{ asset('logo.png')}}" alt="" width="147" height="39,81">
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="{{ Request::is('panel') ? 'active' : '' }}">
						<a href="{{ route('home')}}">
							<i class="nc-icon nc-layout-11"></i>
							<p>Panel de control</p>
						</a>
					</li>
					<li class="{{ Request::is('solicitudes') ? 'active' : '' || Request::is('solicitudes/*') ? 'active' : '' }}">
						<a href="{{ route('solicitudes.index')}}">
							<i class="nc-icon nc-tile-56"></i>
							<p>Solicitudes</p>
						</a>
					</li>
					<li class="{{ Request::is('suscripciones') ? 'active' : '' }}">
						<a href="{{ route('suscripciones.index')}}">
							<i class="nc-icon nc-email-85"></i>
							<p>Suscripciones</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="main-panel">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<div class="navbar-toggle">
							<button type="button" class="navbar-toggler">
								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</button>
						</div>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<ul class="navbar-nav">
							<li class="nav-item btn-rotate dropdown">
								<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="nc-icon nc-single-02"></i>
									<p>
										<span class="d-lg-none d-md-block">Some Actions</span>
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									{{-- <a class="dropdown-item" href="#">Mi perfil</a> --}}

									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
									document.getElementById('logout-form').submit();">
									Salir <i class="ti-shift-right"></i>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</a>

							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		@include('sweetalert::alert')

		<div class="content">
			@yield('content')
		</div>
	</div>
</div>

<!--   Core JS Files   -->
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>

<!-- Chart JS -->
<script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/paper-dashboard.min.js?v=2.0.0') }}" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('demo/demo.js') }}"></script>

<script src="{{ asset('demo/jquery.sharrre.js') }}"></script>

<!-- Datatables JS -->
<script src="{{ asset('js/datatables/1.10.16jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/datatables.js')}}"></script>
<script src="{{ asset('js/responsivetables.js')}}"></script>

<script>
	$(document).ready(function() {
		$('#table').DataTable();
	} );
</script>

</body>

</html>