<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/styles.css" />
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/estilo.css" />
    

    <!-- JS -->
    <script type="text/javascript" src="<?php echo constant('URL'); ?>public/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo constant('URL'); ?>public/js/bootstrap.min.js"></script>
    <title>Ejercicio</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Administrador</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo constant('URL'); ?>index">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo constant('URL'); ?>index/agregar">Agregar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo constant('URL'); ?>listado/salir">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>