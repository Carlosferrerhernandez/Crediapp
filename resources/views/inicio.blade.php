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
    {{-- {{ asset('') }} --}}

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
            <a class="navbar-brand page-scroll" href="{{ url('/') }}"><img src="{{ asset('img/logo.gif') }}"></a>
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li><a class="nav-link page-scroll" href="#inicio">Inicio</a></li>
                    <li><a class="nav-link page-scroll" href="#requisitos">Requisitos</a></li>
                    <li><a class="nav-link page-scroll" href="#beneficios">Beneficios</a></li>
                    <li><a class="nav-link page-scroll" href="#como">Cómo funciona</a></li>
                    <li><a class="nav-link page-scroll" href="#testimonios">Testimonios</a></li>
                    <li><a class="nav-link page-scroll" href="#pqr">PQR</a></li>
                    <li class="contacto-btn"><a class="nav-link page-scroll" href="#contacto">Contacto</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Hero -->
    <div class="container-fluid hero" id="inicio">
        <div class="row">
            <div class="col-12 col-md-6">
                <p>Solicita tu crédito en línea de manera fácil y segura</p>
            </div>
            <div class="col-12 col-md-6">
                <div class="solicitar">
                    <h3>Calcula tu crédito</h3>
                    <div class="wrapper">
                        <form class="calculator">
                            <div id="valores">
                                
                            </div>
                            <table>
                                <tr>
                                    <td>¿Cuánto dinero necesitas?</td>
                                    <td class="variable var-dinero"><span class="dinero-amount">$300.000</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="slidecontainer">
                                            <input type="range" id="demo-dinero" min="110000" max="750000" value="300000" step="10000" class="calculator__dinero slider" required/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="rango rango-menos">$110.000</td>
                                    <td class="rango rango-mayor">$750.000</td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td>¿Cuándo puedes pagarnos?</td>
                                    <td class="variable var-dias"><span class="dias-amount">20</span> días</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="slidecontainer">
                                            <input type="range" id="demo-dias" min="5" max="30" value="20" step="1" class="calculator__dias slider" required/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="rango rango-menos">5 días</td>
                                    <td class="rango rango-mayor">30 días</td>
                                </tr>
                            </table>
                            <div class="spacer"></div>
                            <table class="valores">
                                <tr>
                                    <td>Valor solicitado</td>
                                    <td><span class="dinero-amount">$300.000</span></td>
                                </tr>
                                <tr>
                                    <td>Gestión de crédito</td>
                                    <td><span class="gestion-amount">$24.000</span></td>
                                </tr>
                                <tr>
                                    <td>Seguro</td>
                                    <td><span class="seguro-amount">$9.000</span></td>
                                </tr>
                                <tr>
                                    <td>Interés</td>
                                    <td><span class="interes-amount">$4.000</span></td>
                                </tr>
                                <tr class="total">
                                    <td>Total a Pagar</td>
                                    <td><span class="calculator__result">$337.000</span></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <a href="{{ route('solicitudes.create')}}">
                    <button>Solicitar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- REQUISITOS -->
    <div class="container-fluid" id="requisitos">
        <h3>Así de sencillo es acceder a tu crédito</h3>
        <h4>Solo debes cumplir con estos requisitos</h4>
        <p class="d-none d-sm-block">Tenemos las mejores tasas en préstamos personales, con crediapp cualquier persona en Colombia puede solicitar su cupo de crédito por internet, desde dónde esté y a cualquier hora.</p>
    </div>

    <div class="container items-requisitos">
        <div class="row">
            <div class="col-md-3 col-6 text-center">
                <img src="{{ asset('img/requisito-1.png') }}">
                <p>Tener una cuenta<br>bancaria</p>
            </div>
            <div class="col-md-3 col-6 text-center">
                <img src="{{ asset('img/requisito-2.png') }}">
                <p>Tener correo<br>electrónico</p>
            </div>
            <div class="col-md-3 col-6 text-center">
                <img src="{{ asset('img/requisito-3.png') }}">
                <p>Ser residente<br>en Colombia</p>
            </div>
            <div class="col-md-3 col-6 text-center">
                <img src="{{ asset('img/requisito-4.png') }}">
                <p>Tener número de<br>celular propio</p>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="beneficios">
        <div class="row">
            <div class="col-12 col-md-6 texto-beneficios order-first order-md-2">
                <h2>Conoce nuestros beneficios</h2>
                <h3>Disfruta más pagando menos</h3>
                <table class="tabla-beneficios">
                    <tr>
                        <td><img src="{{ asset('img/check.png') }}"></td>
                        <td>Calcula tu crédito, tú eliges el monto y la fecha de pago.</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('img/check.png') }}"></td>
                        <td>¡Fácil, rápido, sin filas y sin trámites.</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('img/check.png') }}"></td>
                        <td>No necesitas un codeudor, confiamos en tí.</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('img/check.png') }}"></td>
                        <td>Obtienes respuesta rápida de aprobación de tu crédito.</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('img/check.png') }}"></td>
                        <td>Si eres puntual puedes acceder a mayores beneficios.</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('img/check.png') }}"></td>
                        <td>Confidencialidad absoluta, tu información está segura con nosotros.</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('img/check.png') }}"></td>
                        <td>No necesitas tener historia crediticia.</td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('img/check.png') }}"></td>
                        <td>Somos transparentes. Puedes ver todos los costos de tu crédito.</td>
                    </tr>
                </table>
            </div>
            <div class="col-12 col-md-6 align-self-center">
                <img src="{{ asset('img/home-2.png') }}" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid" id="como">
        <div class="row">
            <div class="col-12 col-md-6 text-como">
                <h2>¿Cómo funciona?</h2>
                <table>
                    <tr>
                        <td>
                            1<br>
                            <img src="{{ asset('img/como-1.png') }}">
                        </td>
                        <td>
                            <h4>Cumple con los requisitos</h4>
                            <p>Para iniciar tu solicitud deberás ser mayor de edad, contar con un correo electrónico, un número de celular y tener una cuenta bancaria (Ahorros o Corriente).</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2<br>
                            <img src="{{ asset('img/como-2.png') }}">
                        </td>
                        <td>
                            <h4>Calcula tu crédito y diligencia el formulario</h4>
                            <p>Define el valor a solicitar, determina la fecha de pago y haz click en solicitar. Ingresa todos los datos solicitados, revisa que la información suministrada sea correcta.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3<br>
                            <img src="{{ asset('img/como-3.png') }}">
                        </td>
                        <td>
                            <h4>Envia la solicitud</h4>
                            <p>Luego de realizar el proceso un asesor de crediapp analizará tu solicitud y se pondrá en contácto contigo para informarte el resultado de tu solicitud.</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-12 col-md-6 align-self-center">
                <img src="{{ asset('img/home-3.png') }}" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid" id="testimonios">
        <div class="row">
            <div class="col-12">
                <h2>Lo que opinan nuestros clientes</h2>
                <div class="owl-carousel">
                    <div class="item">
                        <img src="{{ asset('img/quote.png') }}" class="quote">
                        <p>Gracias!! Lo recomiendo 100% realmente es muy fácil y seguro solicitar un crédito, la atención al cliente es excelente, ahorre mucho tiempo y dinero en pagos extras.</p>
                        <table>
                            <tr>
                                <td><img src="{{ asset('img/test-1.png') }}"></td>
                                <td><p>Cristian Herazo<br>
                                    <span>Barranquilla</span></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/quote.png') }}" class="quote">
                        <p>Gracias!! Lo recomiendo 100% realmente es muy fácil y seguro solicitar un crédito, la atención al cliente es excelente, ahorre mucho tiempo y dinero en pagos extras.</p>
                        <table>
                            <tr>
                                <td><img src="{{ asset('img/test-2.png') }}"></td>
                                <td><p>Andrés López<br>
                                    <span>Barranquilla</span></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/quote.png') }}" class="quote">
                        <p>Gracias!! Lo recomiendo 100% realmente es muy fácil y seguro solicitar un crédito, la atención al cliente es excelente, ahorre mucho tiempo y dinero en pagos extras.</p>
                        <table>
                            <tr>
                                <td><img src="{{ asset('img/test-3.png') }}"></td>
                                <td><p>Miriam Gómez<br>
                                    <span>Barranquilla</span></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="pqr">
        <div class="row">
            <div class="col">
                <h2>Preguntas Frecuentes</h2>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-chevron-up"></i>¿Qué necesito para solicitar un préstamo en Crediapp?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Ser mayor de 18 años - Diligenciar el formulario - Tener un correo electrónico personal - Tener un número celular propio - Tener cuenta de ahorros o corriente.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-chevron-up"></i>¿Hay que tener historial crediticio?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                No. Pero es una buena oportunidad para empezarla de una manera positiva.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-chevron-up"></i>¿Cuál es la tasa de interes?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Es variable dependiendo los cambios gubernamentales.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fas fa-chevron-up"></i>¿Qué es gestión del crédito?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                Es el cobro que se hace sobre el monto del crédito por concepto del uso de la plataforma virtual, las verificaciones en las diferentes centrales de riesgo, costos por transferencias,  la viabilidad y tramite. Este valor será pagado al final del crédito junto con el capital.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fas fa-chevron-up"></i>¿Cuánto tiempo tarda en aporbar un crédito?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                En horario laboral en horas. En horario nocturno al día siguiente, y fin de semana al siguiente día hábil.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <i class="fas fa-chevron-up"></i>¿Dónde puedo realizar el pago de mi crédito?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                En nuestra cuenta bancaria. Próximamente por PSE, tarjetas débito o crédito o puntos Efecty y demás corresponsales.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="contacto">
        <div class="row">
            <div class="col-lg-9">
                <form id="homeForm" method="POST" action="{{ route('mail.store') }}" id="suscribir">
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Contáctanos</h2>
                            <p>¡Es un gusto poder ayudarte!  responderemos tus dudas e inquietudes en el menor tiempo posible.</p>
                            <div class="md-form">
                                <input type="text" class="form-control" id="homeName" name="nombre_mail">
                                <label for="homeName">Nombre completo</label>
                            </div>
                            <div class="md-form">
                                <input type="email" class="form-control" id="homeMail" name="dir_email">
                                <label for="homeMail">Correo electrónico</label>
                            </div>
                            <div class="md-form">
                                <input type="tel" class="form-control" id="homeCell" name="tel_mail">
                                <label for="homeCell">Celular</label>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-end">
                            <div class="md-form">
                                <textarea onkeyup="auto_grow(this)" class="form-control align-self-end" id="homeMsg" name="mensaje_mail" rows="1"></textarea>
                                <label for="homeMsg">Mensaje</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 align-self-center">
                <div class="contact-box">
                    <img src="{{ asset('img/contacto.png') }}">
                    <p class="contacto-titulo">Atención al cliente</p>
                    <p class="contacto-contenido">316 906 3779</p>
                    <p class="contacto-titulo">Escríbenos</p>
                    <p class="contacto-contenido">servicioalcliente@crediapp.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="enviadoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('img/enviado-check.png')}}"><br>
                    <h2>¡El correo de contacto fue enviado exitosamente!</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mostrarmodalsolicitud" tabindex="-1" role="dialog" aria-labelledby="enviadoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('img/enviado-check.png')}}"><br>
                    <h2>¡Tu solicitud de crédito fue enviada exitosamente!</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mostrarmodalsuscripcion" tabindex="-1" role="dialog" aria-labelledby="enviadoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('img/enviado-check.png')}}"><br>
                    <h2>¡Te has suscribido exitosamente!</h2>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="row foot-info">
                <div class="col d-none d-md-block">
                    <a href="#inicio">Inicio</a><br>
                    <a href="#requisitos">Requisitos</a><br>
                    <a href="#beneficios">Beneficios</a>
                </div>
                <div class="col d-none d-md-block">
                    <a href="#como">Cómo funciona</a><br>
                    <a href="#testimonios">Testimonios</a><br>
                    <a href="#pqr">PQR</a>
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

    @if(!empty(Session::get('success_contacto')) && Session::get('success_contacto') == 5)
        <script type="text/javascript">
            $(document).ready(function()
                {
                    $("#mostrarmodal").modal("show");
                });
        </script>
    @endif

    @if(!empty(Session::get('success_solicitud')) && Session::get('success_solicitud') == 5)
        <script type="text/javascript">
            $(document).ready(function()
                {
                    $("#mostrarmodalsolicitud").modal("show");
                });
        </script>
    @endif
    
    @if(!empty(Session::get('success_suscripcion')) && Session::get('success_suscripcion') == 5)
        <script type="text/javascript">
            $(document).ready(function()
                {
                    $("#mostrarmodalsuscripcion").modal("show");
                });
        </script>
    @endif

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
</body>
</html>