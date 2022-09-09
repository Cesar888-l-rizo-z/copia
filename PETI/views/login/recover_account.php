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

</head>

<body class="login-layout">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container">
						<div class="position-relative">
							<br>
							<br>
							<br>
							<br>
							<br>

							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header red lighter bigger">
										<i class="ace-icon fa fa-key"></i>
										Recuperar Contraseña
									</h4>

									<div class="space-6"></div>
									<p>
										Ingresa tu correo electronico para recibir las instrucciones
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

							</div><!-- /.widget-body -->
							<div class="position-relative">
								<!-- /.forgot-box -->


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

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.main-content -->
				</div>
				<script src="<?php echo constant('URL'); ?>public/js/jquery-2.1.4.min.js"></script>

				<script type="text/javascript">
					if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo constant('URL'); ?>public/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
				</script>

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