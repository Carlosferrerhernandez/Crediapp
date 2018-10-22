<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CrediApp</title>

    <!-- Bootstrap -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand page-scroll" href="#inicio"><img src="{{ asset('img/logo.gif') }}"></a>
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li><a class="nav-link page-scroll" href="{{ url('/')}}">Inicio</a></li>
                    <li><a class="nav-link page-scroll" href="{{ url('/')}}#requisitos">Requisitos</a></li>
                    <li><a class="nav-link page-scroll" href="{{ url('/')}}#beneficios">Beneficios</a></li>
                    <li><a class="nav-link page-scroll" href="{{ url('/')}}#como">Cómo funciona</a></li>
                    <li><a class="nav-link page-scroll" href="{{ url('/')}}#testimonios">Testimonios</a></li>
                    <li><a class="nav-link page-scroll" href="{{ url('/')}}#pqr">PQR</a></li>
                    <li class="contacto-btn"><a class="nav-link page-scroll" href="{{ url('/')}}#contacto">Contacto</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>

    <footer>
        <div class="container-fluid">
            <div class="row foot-info">
                <div class="col d-none d-md-block">
                    <a href="{{ url('/')}}">Inicio</a><br>
                    <a href="{{ url('/')}}#requisitos">Requisitos</a><br>
                    <a href="{{ url('/')}}#beneficios">Beneficios</a>
                </div>
                <div class="col d-none d-md-block">
                    <a href="{{ url('/')}}#como">Cómo funciona</a><br>
                    <a href="{{ url('/')}}#testimonios">Testimonios</a><br>
                    <a href="{{ url('/')}}#pqr">PQR</a>
                </div>
                <div class="col-md col-sm-12">
                    Síguenos en redes sociales<br>
                    <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-sm-12 col-md-4">
                    Suscríbete a nuestro newsletter
                    <form  role="form" method="POST" action="{{ route('suscripciones.store') }}" id="suscribir">
                        {{ csrf_field() }}
                        <input type="email" placeholder="Correo electrónico" id="suscMail" name="suscMail" value="{{ $errors->has('suscMail') ? ' is-invalid' : '' }}">
                        @if ($errors->has('suscMail'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('suscMail') }}</strong>
                            </span>
                        @endif
                        <button type="submit" class="btn">Suscribir</button>
                    </form>
                </div>
            </div>
            <div class="row foot-copy">
                <div class="col-md-6">
                    © Crediapp 2018. Todos los Derechos Reservados.
                </div>
                <div class="col-md-6 text-right">
                    Powered by <a href="http://graphitech.com.co/es/" target="_blank"><img src="{{ asset('img/graphitech.png') }}">
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</body>
</html>