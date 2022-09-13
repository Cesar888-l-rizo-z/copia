<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login - Sistema de Usuarios</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/fonts.googleapis.com.css" />
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/ace.min.css" />
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/ace-rtl.min.css" />

</head>

<body class="login-layout">
    <form action="<?php echo constant('URL') ?>register/createUser" method="POST" enctype="multipart/form-data">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-leaf green"></i>
                                    <span class="red">Registrarse </span>
                                </h1>
                            </div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-coffee green"></i>
                                                Ingresa tu Informacion
                                            </h4>

                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <h4 class="header green lighter bigger">
                                                        <i class="ace-icon fa fa-users blue"></i>
                                                        Registro de Nuevos Usuarios
                                                    </h4>

                                                    <p>Ingresa los datos solicitados acontinuacion: </p>
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

                                                            <button type="submit" name="registrar" class="width-100 pull-right btn btn-sm btn-success">
                                                                <span class="bigger-110">Registrar</span>
                                                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                            </button>
                                                        </div>
                                                    </fieldset>
                                                </div>

                                            </div>

                                        </div>
    </form>

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
    </div>
    </div>
    </div>
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



        //no necesitas esto, solo se usa para cambiar el fondo
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
    </div>
    </div>
    </div>
</body>

</html>