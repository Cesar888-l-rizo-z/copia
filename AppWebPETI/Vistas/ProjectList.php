<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css" />

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="nav navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="#">Sistema De Informacíon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Create_Projects.php">Servicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="nosotros.php">Nosotros</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <br />
        <div class="row">

            <?php
            include("../Config/bd.php");

            $sentenciaSQL = $conexion->prepare("SELECT * FROM webpeti");
            $sentenciaSQL->execute();
            $listaServicios = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

            ?>

            <?php foreach ($listaServicios as $servicio) { ?>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="./img/<?php echo $servicio['Imagen']; ?>" alt="">

                        <div class="card-body">
                            <h4 class="card-title"><?php echo $servicio['Nombre_Projects']; ?></h4>
                            <h4 class="card-title"><?php echo $servicio['Fecha_Creacion']; ?></h4>
                            <h4 class="card-title"><?php echo $servicio['Resultado']; ?></h4>
                            <a name="" id="" class="btn btn-primary" href="https://www.si18.com.co/poli/c80/c80p3/c80p3.html" role="button">Ver Mas</a>
                        </div>

                    </div>

                </div>
            <?php } ?>

        </div>
    </div>

</body>

</html>