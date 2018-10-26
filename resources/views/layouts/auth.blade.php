<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>CrediApp</title>

	<!-- Bootstrap -->
	<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('css/login.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body id="login">
	<!-- Menú -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand page-scroll" href="{{ url('/') }}"><img src="{{asset('img/logo.png')}}"></a>
			<!-- Brand and toggle get grouped for better mobile display -->

			<!-- Collect the nav links, forms, and other content for toggling -->
		</div><!-- /.container-fluid -->
	</nav>
	
	<!-- Hero -->
	<div class="container-fluid" id="login-form">
		@yield('content')
	</div>

	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					© Crediapp 2018. Todos los Derechos Reservados.
				</div>
				<div class="col-md-6 text-right">
					Powered by <a href="http://graphitech.com.co/es/" target="_blank"><img src="{{ asset('img/graphitech.png')}}">
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>
</html>