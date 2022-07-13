<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Styles -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css" />
	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file -->
	<script src="<?php echo constant('URL'); ?>public/js/sweetalert2.min.js"></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/jquery.mCustomScrollbar.css">

	<!-- General Styles -->
	<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


	<!-- JS -->
	<script type="text/javascript" src="<?php echo constant('URL'); ?>public/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?php echo constant('URL'); ?>public/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<title>Ejercicio</title>

</head>

<body>

	<?php if (isset($mensaje)) { ?>

		<div class="alert alert-danger" role="alert">
			<?php echo $mensaje; ?>
		</div>
	<?php } ?>

	<div class="login-container">
		<div class="login-content">
			<p class="text-center">
				<i class="fas fa-user-circle fa-5x"></i>
			</p>
			<p class="text-center">
				Inicia sesión con tu cuenta
			</p>
			<form action="<?php echo constant('URL') ?>login/ingresar" method="POST" autocomplete="off">
				<div class="form-group">
					<label for="UserName" class="bmd-label-floating"><i class="fas fa-user-secret"></i> &nbsp; Usuario</label>
					<input type="text" class="form-control" id="UserName" name="usuario" pattern="[a-zA-Z0-9]{1,35}" maxlength="35" required="">
				</div>
				<div class="form-group">
					<label for="UserPassword" class="bmd-label-floating"><i class="fas fa-key"></i> &nbsp; Contraseña</label>
					<input type="password" class="form-control" id="UserPassword" name="clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="">
				</div>
				<button type="submit" class="btn-login text-center">LOG IN</button>
			</form>
		</div>
	</div>

	<footer class="footer" style="position: fixed;
    bottom: 0px;
    width: 100%;
    z-index: 10">
		<div class="footer-copyright text-center py-1" style="background-color: #ccc;">
			<div class="container">
				<div class="center" style="line-height: 15px;">
					<small>
						<small>
							Señor usuario: Recuerde, si desea realizar alguna sugerencia, por favor tramitarla a través del
							correo tic@si18.com.co

						</small>
					</small>
				</div>

				<b>
					© 2020 Copyright:<a href="https://www.si18.com.co/"> www.si18.com.co</a>
				</b>
			</div>
		</div>

		<script>
			window.onload = function() {
				history.replaceState("", "", "<?php echo constant('URL'); ?>index");
			}
		</script>

	</footer>

</body>

</html>