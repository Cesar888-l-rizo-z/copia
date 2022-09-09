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

                                        <form action="<?php echo constant('URL') ?>register/createUser" method="POST">
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