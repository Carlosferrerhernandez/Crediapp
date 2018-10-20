<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>CrediApp</title>

	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
	<link href="assets/css/mdb.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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
			<a class="navbar-brand page-scroll" href="#inicio"><img src="img/logo.png"></a>
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

	<!-- FORMULARIO SOLICITUD -->
	<div class="container-fluid" id="solicitud">
		<h3>Solicitar crédito</h3>
		<p class="d-none d-sm-block">Ingresa todos los datos solicitados, revisa que la información suministrada sea correcta.</p>

		<form id="datos_prestamo">
			<h4>Datos personales</h4>
			<div class="row">
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="nombres" name="nombres">
						<label for="primerApellido">Nombres<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="apellidos" name="apellidos">
						<label for="apellidos">Apellidos<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="number" class="form-control" id="documento" name="documento">
						<label for="documento">Documento de Identidad<span>*</span></label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="expedicionLugar" name="expedicionLugar">
						<label for="expedicionLugar">Lugar y Fecha de Expedición<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="date" class="form-control" id="expedicionFecha" name="expedicionFecha">
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="email" class="form-control" id="nombres" name="nombres">
						<label for="nombres">Correo electrónico<span>*</span></label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="md-form">
						<input type="tel" class="form-control" id="celular" name="celular">
						<label for="celular">Celular<span>*</span></label>
					</div>
				</div>
				<div class="col-md-8 align-self-end">
					<div class="estadoCivilGroup row">
						<div class="col-md-3 col-lg-2 align-self-end">
							<label for="estadoCivil">Estado Civil<span>*</span></label>
						</div>
						<div class="col-md-9 col-lg-10">
							<div class="form-check form-check-inline">
								<input class="form-check-input radioSelect" type="radio" name="estadoCivil" id="estadoCivilRadio1" value="soltero">
								<label class="form-check-label" for="estadoCivilRadio1">Soltero</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input radioSelect" type="radio" name="estadoCivil" id="estadoCivilRadio2" value="casado" checked>
								<label class="form-check-label" for="estadoCivilRadio2">Casado</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input radioSelect" type="radio" name="estadoCivil" id="estadoCivilRadio3" value="separado">
								<label class="form-check-label" for="estadoCivilRadio3">Separado</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input radioSelect" type="radio" name="estadoCivil" id="estadoCivilRadio4" value="viudo">
								<label class="form-check-label" for="estadoCivilRadio4">Viudo</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input radioSelect" type="radio" name="estadoCivil" id="estadoCivilRadio5" value="unionLibre">
								<label class="form-check-label" for="estadoCivilRadio5">Unión Libre</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input radioSelect" type="radio" name="estadoCivil" id="estadoCivilRadio6" value="otro">
								<label class="form-check-label" for="estadoCivilRadio6">Otro</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="datosConyuge fieldsSpecific" id="casado">
				<h4>Datos del cónyuge</h4>
				<div class="row">
					<div class="col-md-4">
						<div class="md-form">
							<input type="text" class="form-control" id="nombresConyuge" name="nombresConyuge">
							<label for="nombresConyuge">Nombres<span>*</span></label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="md-form">
							<input type="text" class="form-control" id="segundoApellidoConyuge" name="apellidosConyuge">
							<label for="apellidosConyuge">Apellidos<span>*</span></label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="md-form">
							<input type="number" class="form-control" id="documentoConyuge" name="documentoConyuge">
							<label for="documentoConyuge">Documento de Identidad<span>*</span></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="md-form">
							<input type="text" class="form-control" id="nacimientoLugarConyuge" name="nacimientoLugarConyuge">
							<label for="nacimientoLugarConyuge">Lugar y Fecha de Nacimiento<span>*</span></label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="md-form">
							<input type="date" class="form-control" id="nacimientoFechaConyuge" name="nacimientoFechaConyuge">
						</div>
					</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="tel" class="form-control" id="telefonoConyuge" name="telefonoConyuge">
						<label for="telefonoConyuge">Teléfono</label>
					</div>
				</div>
				</div>
			</div>
			<h4>Ubicación</h4>
			<div class="row">
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="direccion" name="direccion">
						<label for="direccion">Dirección<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="barrio" name="barrio">
						<label for="barrio">Barrio<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="ciudad" name="ciudad">
						<label for="ciudad">Ciudad<span>*</span></label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="departamento" name="departamento">
						<label for="departamento">Departamento<span>*</span></label>
					</div>
				</div>
				<div class="col-md-8 align-self-end">
					<div class="viviendaGroup row">
						<div class="col-md-4 col-lg-3 align-self-end">
							<label for="vivienda">Tipo de vivienda:<span>*</span></label>
						</div>
						<div class="col-md-8 col-lg-9">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="vivienda" id="viviendaRadio1" value="propia" checked>
								<label class="form-check-label" for="viviendaRadio1">Propia</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="vivienda" id="viviendaRadio2" value="alquilada">
								<label class="form-check-label" for="viviendaRadio2">Alquilada</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="vivienda" id="viviendaRadio3" value="familiar">
								<label class="form-check-label" for="viviendaRadio3">Familiar</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<h4>Actividad Económica</h4>
			<div class="row">
				<div class="col-md-12 align-self-end">
					<div class="actividadGroup row">
						<div class="col-md-4 col-lg-3 align-self-end">
							<label for="actividad">Ocupación, oficio o profesión:<span>*</span></label>
						</div>
						<div class="col-md-8 col-lg-9">
							<div class="form-check form-check-inline">
								<input class="form-check-input radioSelect2" type="radio" name="actividad" id="actividadRadio1" value="asalariado" checked>
								<label class="form-check-label" for="actividadRadio1">Asalariado</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input radioSelect2" type="radio" name="actividad" id="actividadRadio2" value="independiente">
								<label class="form-check-label" for="actividadRadio2">Independiente</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input radioSelect2" type="radio" name="actividad" id="actividadRadio3" value="pensionado">
								<label class="form-check-label" for="actividadRadio3">Pensionado</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input radioSelect2" type="radio" name="actividad" id="actividadRadio4" value="socio">
								<label class="form-check-label" for="actividadRadio4">Socio</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input radioSelect2" type="radio" name="actividad" id="actividadRadio5" value="otro">
								<label class="form-check-label" for="actividadRadio5">Otro</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row empresaGroup fieldsSpecific2" id="asalariado">
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="empresa" name="empresa">
						<label for="empresa">Empresa donde trabaja<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="cargo" name="cargo">
						<label for="cargo">Cargo<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="tel" class="form-control" id="telefonoEmpresa" name="telefonoEmpresa">
						<label for="telefonoEmpresa">Teléfono de contacto<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="direccionLaboral" name="direccionLaboral">
						<label for="direccionLaboral">Dirección laboral<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="tel" class="form-control" id="ciudadEmpresa" name="ciudadEmpresa">
						<label for="ciudadEmpresa">Ciudad<span>*</span></label>
					</div>
				</div>
			</div>
			<div class="row tipoGroup fieldsSpecific2" id="independiente">
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="actividadIndependiente" name="actividadIndependiente">
						<label for="actividadIndependiente">Ocupación o tipo de actividad<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="direccionIndependiente" name="direccionIndependiente">
						<label for="direccionIndependiente">Dirección<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="ciudadIndependiente" name="ciudadIndependiente">
						<label for="ciudadIndependiente">Ciudad<span>*</span></label>
					</div>
				</div>
			</div>

			<div class="row tipoGroup fieldsSpecific2" id="otro">
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="otroCual" name="otroCual">
						<label for="otroCual">¿Cuál?<span>*</span></label>
					</div>
				</div>
			</div>
			<h4>Referencia familiar</h4>
			<div class="row">
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="nombreReferencia" name="nombreReferencia">
						<label for="nombreReferencia">Nombre Completo<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="direccionReferencia" name="direccionReferencia">
						<label for="direccionReferencia">Dirección<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="tel" class="form-control" id="telefonoReferencia" name="telefonoReferencia">
						<label for="telefonoReferencia">Teléfono<span>*</span></label>
					</div>
				</div>
			</div>
			<h4>Información Bancaria</h4>
			<div class="row infoBanco">
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="nombreReferencia" name="nombreReferencia">
						<label for="nombreReferencia">Banco<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="direccionReferencia" name="direccionReferencia">
						<label for="direccionReferencia">Tipo de Cuenta<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="number" class="form-control" id="cuenta" name="cuenta">
						<label for="cuenta">Número de cuenta<span>*</span></label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<button class="agregarCuenta"><img src="img/agregar-cuenta.png"> Agregar otra cuenta bancaria</button>
				</div>
				<div class="col-md-12">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="terminosCondiciones">
						<label class="custom-control-label" for="terminosCondiciones">Acepto los <button type="button" class="modalTyc" data-toggle="modal" data-target="#tycModal">términos y condiciones</button></label>
					</div>
				</div>
			</div>
			<div class="row submit-row">
				<div class="col-12 text-center">
					<button type="button" class="btn-enviar" data-toggle="modal" data-target="#enviadoModal">Enviar solicitud</button>
				</div>
			</div>
		</form>
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
					<form id="suscribir">
						<input type="email" placeholder="Correo electrónico" id="suscMail" name="suscMail">
						<button type="submit" class="btn">Suscribir</button>
					</form>
				</div>
			</div>
			<div class="row foot-copy">
				<div class="col-md-6">
					© Crediapp 2018. Todos los Derechos Reservados.
				</div>
				<div class="col-md-6 text-right">
					Powered by <a href="http://graphitech.com.co/es/" target="_blank"><img src="img/graphitech.png"></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- Modal -->
	<div class="modal fade" id="tycModal" tabindex="-1" role="dialog" aria-labelledby="tycModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="tycModalLabel">Términos y condiciones</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Autorización de consulta en la base de datos.</h5>
					Declaro que la información que he suministrado es verídica y doy mi consentimiento expreso e irrevocable a (Crediapp), o quien sea en el futuro el acreedor del crédito solicitado, para:<br><br>
					a) Consultar, en cualquier tiempo, en Datacrédito o en cualquier otro operador de información financiera y crediticia, toda la información relevante para adelantar estudios de riesgo crediticio en cualquiera de sus etapas y para la realización de campañas de mercadeo y ofrecimiento de productos.<br><br>
					b) Reportar a Datacrédito o a cualquier central e información de riesgo, datos sobre el cumplimiento o incumplimiento de mis obligaciones crediticias, comerciales o de servicios, o de mis deberes legales de contenido patrimonial, y mis datos de ubicación y contacto.<br><br>
					c) Suministrar a Datacrédito o a cualquier otra central de información de riesgo datos relativos a mis solicitudes de crédito, así como otros atinentes a mis relaciones comerciales, financieras y en general socioeconómicas que yo haya entregado o que consten en registros públicos, bases de datos públicas o documentos públicos.
					<h5>Autorización de descuento de valores.</h5>
					Autorizo a Crediapp o a sus autorizados a descontar del pago total del crédito los valores de los intereses, el seguro, la administración y el uso de la plataforma para dar por concluida mi obligación financiera. Así mismo confirmo haber leído, entendido y aceptado cada uno de los ítems anteriormente señalados.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">No acepto</button>
					<button type="button" class="btn btn-primary" onclick="aceptar()">Acepto</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="enviadoModal" tabindex="-1" role="dialog" aria-labelledby="enviadoModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<img src="img/enviado-check.png"><br>
					<h2>¡Tu solicitud de crédito fue enviada exitosamente!</h2>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac facilisis urnatristique nulla massa, et blandit massa porta laoreet.
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/jquery.easing.min.js"></script>
	<script src="assets/js/scrolling-nav.js"></script>
	<script src="assets/js/mdb.min.js"></script>
</body>
</html>