<?php

$ldap = ldap_connect( '192.168.0.195' );
if ( $ldap ) {
	$bind = ldap_bind( $ldap, 'CN=Administrator,CN=Users,DC=si18,DC=com,DC=co', '*S1Adm1n99*' );
	if ( !$bind ) {
		echo 'Failed to connect to LDAP server!';
		exit;
	}

// ejemplo de autenticación
// $ldaprdn  = 'CN=Administrator,CN=Users,DC=si18,DC=com,DC=co';     // ldap rdn or dn
// $ldappass = '*S1Adm1n99*';  // associated password

// conexión al servidor LDAP
$ldapconn = ldap_connect("192.168.0.195")
	or die("Could not connect to LDAP server.");

	if ( !$bind ) {
		echo 'Failed to connect to LDAP server!';
		exit;
	}

	
	
	$dn = 'uid=1,dc=1234,DC=si18,DC=com,DC=co';
	
	$entry = array();
	$entry['objectClass']     = array( 'top', 'person', 'organizationalPerson', 'inetOrgPerson', 'hCard' );
	$entry['cn']              = array( 'César L. Rizo Zabaleta' ); // Common Name
	$entry['sn']              = array( 'Rizo Zabaleta' ); // Surname/Family Name
	$entry['gn']              = array( 'César' ); // Given Name
	$entry['displayName']     = array( 'César L. Rizo Zabaleta' ); // Nickname

	$r = ldap_add($ldapconn, "CN=César L. Rizo Zabaleta,OU=USUARIOS,OU=PROGRAMACION Y TI,OU=GERENCIA FINANCIERA,OU=SI18-CS,DC=si18,DC=com,DC=co", $entry);
	
	ldap_close($ldapconn);
// 	} else {
// 		echo "No se pudo conectar al servidor LDAP";
// 	}
	
	ldap_close( $ldap );
}


// if ($ldapconn) {



// 	// realizando la autenticación
// 	$ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

// 	// verificación del enlace
// 	if ($ldapbind) {
// 		 echo "LDAP bind successful...";
// 	} else {
// 		echo "LDAP bind failed...";
// 	}
// 	if ($ldapconn) {

// 		$info["cn"] = "César L. Rizo Zabaleta";
// 		$info["sn"] = "Rizo Zabaleta";
// 		$info["objectclass"] = "person";
	
// 		// Agregar datos al directorio
// 		$r = ldap_add($ldapconn, "CN=César L. Rizo Zabaleta,OU=USUARIOS,OU=PROGRAMACION Y TI,OU=GERENCIA FINANCIERA,OU=SI18-CS,DC=si18,DC=com,DC=co", $info);
	
// 		ldap_close($ldapconn);
// 	} else {
// 		echo "No se pudo conectar al servidor LDAP";
// 	}
// }

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Login - Sistema de Usuarios</title>

	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->

	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/ace.min.css" />

	<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/ace-rtl.min.css" />

	<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="login-layout">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container">
						<div class="center">
							<h1>
								<i class="ace-icon fa fa-leaf green"></i>
								<span class="red">Inicia sesión con tu cuenta </span>
							</h1>
						</div>

						<div class="space-6"></div>

						<div class="position-relative">
							<div id="login-box" class="login-box visible widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header blue lighter bigger">
											<i class="ace-icon fa fa-coffee green"></i>
											Ingresa tu Informacion
										</h4>

										<div class="space-6"></div>

										<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
											<fieldset>
												<label class="block clearfix" for="username">
													<span class="block input-icon input-icon-right">
														<input id="username" type="text" name="username" placeholder="Usuario" class="form-control" />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>

												<label class="block clearfix" for="password">
													<span class="block input-icon input-icon-right">
														<input id="password" type="password" name="password" class="form-control" placeholder="Contraseña" />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>

												<div class="space"></div>

												<div class="clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> Recordarme</span>
													</label>

													<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
														<i class="ace-icon fa fa-key"></i>
														<span class="bigger-110">Ingresar</span>
													</button>


												</div>

												<div class="space-4"></div>
											</fieldset>
										</form>

									</div><!-- /.widget-main -->

									<div class="toolbar clearfix">
										<div>
											<a href="#" data-target="#forgot-box" class="forgot-password-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Olvide mi contraseña
											</a>
										</div>

										<div>
											<a href="#" data-target="#signup-box" class="user-signup-link">
												Nuevo Registro
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.login-box -->

							<div id="forgot-box" class="forgot-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header red lighter bigger">
											<i class="ace-icon fa fa-key"></i>
											Recuperar Contraseña
										</h4>

										<div class="space-6"></div>
										<p>
											Ungresa tu correo electronico para recibir las instrucciones
										</p>

										<form>
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="email" class="form-control" placeholder="Email" />
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>
												<div class="clearfix">
													<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
														<i class="ace-icon fa fa-lightbulb-o"></i>
														<span class="bigger-110">Enviar</span>
													</button>
												</div>
											</fieldset>
										</form>
									</div><!-- /.widget-main -->

									<div class="toolbar center">
										<a href="#" data-target="#login-box" class="back-to-login-link">
											Regresar al Login
											<i class="ace-icon fa fa-arrow-right"></i>
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.forgot-box -->

							<div id="signup-box" class="signup-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header green lighter bigger">
											<i class="ace-icon fa fa-users blue"></i>
											Registro de Nuevos Usuarios
										</h4>
										<div class="space-6"></div>
										<p>Ingresa los datos solicitados acontinuacion: </p>
										<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required />
														<i class="ace-icon fa fa-users"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="email" class="form-control" name="correo" placeholder="Email" required />
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" class="form-control" name="user" placeholder="Usuario" required />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" class="form-control" name="pass" placeholder="Password" required />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" class="form-control" name="passr" placeholder="Repetir password" />
														<i class="ace-icon fa fa-retweet"></i>
													</span>
												</label>

												<label class="block">
													<input type="checkbox" class="ace" />
													<span class="lbl">
														Acepto los
														<a href="#">Terminos de Uso</a>
													</span>
												</label>
												<div class="space-24"></div>
												<div class="clearfix">
													<button type="reset" class="width-30 pull-left btn btn-sm">
														<i class="ace-icon fa fa-refresh"></i>
														<span class="bigger-110">Reset</span>
													</button>

													<button type="submit" name="registrar" class="width-65 pull-right btn btn-sm btn-success">
														<span class="bigger-110">Registrar</span>
														<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
													</button>
												</div>
											</fieldset>
										</form>
									</div>

									<div class="toolbar center">
										<a href="#" data-target="#login-box" class="back-to-login-link">
											<i class="ace-icon fa fa-arrow-left"></i>
											Regresar al Login
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.signup-box -->
						</div><!-- /.position-relative -->

						<div class="navbar-fixed-top align-right">
							<br />
							&nbsp;
							<a id="btn-login-dark" href="#">Oscuro</a>
							&nbsp;
							<span class="blue">/</span>
							&nbsp;
							<a id="btn-login-blur" href="#">Azul</a>
							&nbsp;
							<span class="blue">/</span>
							&nbsp;
							<a id="btn-login-light" href="#">Claro</a>
							&nbsp; &nbsp; &nbsp;
						</div>
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="<?php echo constant('URL'); ?>public/js/jquery-2.1.4.min.js"></script>

	<!-- <![endif]-->

	<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
	<script type="text/javascript">
		if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo constant('URL'); ?>public/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
	</script>

	<!-- inline scripts related to this page -->
	<script type="text/javascript">
		jQuery(function($) {
			$(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible'); //hide others
				$(target).addClass('visible'); //show target
			});
		});



		//you don't need this, just used for changing background
		jQuery(function($) {
			$('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			});
			$('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			});
			$('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			});

		});
	</script>
</body>

</html>