<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location:Login.php");
} else {

    if ($_SESSION['usuario'] == "ok") {
        $nombreUsuario = $_SESSION["nombreUsuario"];
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/AppWebPETI" ?>

    <nav class="navbar navbar-expand navbar-light bg-light" <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#"> Administrador del sistema</a>

        <a class="nav-item nav-link" href="Index.php">inicio</a>

        <a class="nav-item nav-link" href="Create_Projects.php">Servicio</a>

        <a class="nav-item nav-link" href="Cerrar.php">Cerrar</a>

        </div>
    </nav>

    <div class="container">
        <br />
        <div class="row">
            <?php
            //WebPETI
            $txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
            $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
            $txtObjetivo = (isset($_POST['txtObjetivo'])) ? $_POST['txtObjetivo'] : "";
            $txtProceso = (isset($_POST['txtProceso'])) ? $_POST['txtProceso'] : "";
            $txtCreation_date = (isset($_POST['txtCreation_date'])) ? $_POST['txtCreation_date'] : "";
            $txtDeadline = (isset($_POST['txtDeadline'])) ? $_POST['txtDeadline'] : "";
            $txtStatus = (isset($_POST['txtStatus'])) ? $_POST['txtStatus'] : "";
            $txtuploadedFile = (isset($_POST['txtuploadedFile'])) ? $_POST['txtuploadedFile'] : "";
            $txtImagen = (isset($_FILES['Imagen']['name'])) ? $_FILES['Imagen']['name'] : "";
            $accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

            include("../Config/bd.php");

            /*
                INSERT INTO `webpeti` (`id`, `Nombre_Projects`, `Objetivo`, `Proceso`, `Fecha_Creacion`,
                `Fecha_Limite`, `Resultado`, `Archivo`, `Imagen`) VALUES (NULL, 'App Web PETI', 
                'Finalizar con el proceso de produccion', 'Tecnologico', '2022-05-24 23:45:42.000000', 
                '2023-05-31 16:45:42', 'En Curso', '', 'imagen.jpg');
            */
            switch ($accion) {

                case "Agregar":

                    $sentenciaSQL = $conexion->prepare(
                        "INSERT INTO webpeti(
                                    Nombre_Projects,
                                    Objetivo,
                                    Proceso,
                                    Fecha_Creacion,
                                    Fecha_Limite,
                                    Estado,
                                    Archivo,
                                    Imagen
                                )
                                VALUES(
                                    :Nombre_Projects,
                                    :Objetivo,
                                    :Proceso,
                                    :Fecha_Creacion,
                                    :Fecha_Limite,
                                    :Estado,
                                    :Archivo,
                                    :Imagen
                                );"
                    );

                    $sentenciaSQL->bindParam(':Nombre_Projects', $txtNombre);
                    $sentenciaSQL->bindParam(':Objetivo', $txtObjetivo);
                    $sentenciaSQL->bindParam(':Proceso', $txtProceso);
                    $sentenciaSQL->bindParam(':Fecha_Creacion', $txtCreation_date);
                    $sentenciaSQL->bindParam(':Fecha_Limite', $txtDeadline);
                    $sentenciaSQL->bindParam(':Estado', $txtStatus);
                    $sentenciaSQL->bindParam(':Archivo', $txtuploadedFile);
                    $sentenciaSQL->bindParam(':Imagen', $txtImagen);
                    $fecha = new DateTime();
                    $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
                    $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

                    if ($tmpImagen != "") {

                        move_uploaded_file($tmpImagen, "css/img" . $nombreArchivo);
                    }

                    $sentenciaSQL->bindParam(':Imagen', $nombreArchivo);
                    $sentenciaSQL->execute();
                    break;

                case "Modificar":

                    $sentenciaSQL = $conexion->prepare("UPDATE webpeti SET Nombre_Projects=:Nombre_Projects WHERE id=:id");
                    $sentenciaSQL = $conexion->prepare("UPDATE webpeti SET Objetivo=:Objetivo WHERE id=:id");
                    $sentenciaSQL = $conexion->prepare("UPDATE webpeti SET Proceso=:Proceso WHERE id=:id");
                    $sentenciaSQL = $conexion->prepare("UPDATE webpeti SET Fecha_Creacion=:Fecha_Creacion WHERE id=:id");
                    $sentenciaSQL = $conexion->prepare("UPDATE webpeti SET Fecha_Limite=:Fecha_Limite WHERE id=:id");
                    $sentenciaSQL = $conexion->prepare("UPDATE webpeti SET Estado=:Estado WHERE id=:id");
                    $sentenciaSQL = $conexion->prepare("UPDATE webpeti SET Archivo=:Archivo WHERE id=:id");
                    $sentenciaSQL = $conexion->prepare("UPDATE webpeti SET Imagen=:Imagen WHERE id=:id");
                    $sentenciaSQL->bindParam(':Nombre_Projects', $txtNombre);
                    $sentenciaSQL->bindParam(':Objetivo', $txtObjetivo);
                    $sentenciaSQL->bindParam(':Proceso', $txtProceso);
                    $sentenciaSQL->bindParam(':Fecha_Creacion', $txtCreation_date);
                    $sentenciaSQL->bindParam(':Fecha_Limite', $txtDeadline);
                    $sentenciaSQL->bindParam(':Estado', $txtStatus);
                    $sentenciaSQL->bindParam(':Archivo', $txtuploadedFile);
                    $sentenciaSQL->bindParam(':Imagen', $txtImagen);
                    $sentenciaSQL->bindParam(':id', $txtID);
                    $sentenciaSQL->execute();

                    if ($txtImagen != "") {

                        $fecha = new DateTime();
                        $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
                        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

                        move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);

                        $sentenciaSQL = $conexion->prepare("SELECT Imagen FROM servicios WHERE id=:id");
                        $sentenciaSQL->bindParam(':id', $txtID);
                        $sentenciaSQL->execute();
                        $servicio = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

                        if (isset($servicio["imagen"]) && ($servicio["imagen"] != "imagen.jpg")) {

                            if (file_exists("../../img/" . $servicio["imagen"])) {

                                unlink("../../img/" . $servicio["imagen"]);
                            }
                        }

                        $sentenciaSQL = $conexion->prepare("UPDATE servicios SET imagen=:imagen WHERE id=:id");
                        $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
                        $sentenciaSQL->bindParam(':id', $txtID);
                        $sentenciaSQL->execute();
                    }

                    break;

                case "Cancelar":
                    echo "Presionado Botón Cancelar";
                    break;

                case "Seleccionar":

                    $sentenciaSQL = $conexion->prepare("SELECT * FROM webpeti WHERE id=:id");
                    $sentenciaSQL->bindParam(':id', $txtID);
                    $sentenciaSQL->execute();
                    $servicio = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

                    $sentenciaSQL->bindParam(':Nombre_Projects', $txtNombre);
                    $sentenciaSQL->bindParam(':Objetivo', $txtObjetivo);
                    $sentenciaSQL->bindParam(':Proceso', $txtProceso);
                    $sentenciaSQL->bindParam(':Fecha_Creacion', $txtCreation_date);
                    $sentenciaSQL->bindParam(':Fecha_Limite', $txtDeadline);
                    $sentenciaSQL->bindParam(':Estado', $txtStatus);
                    $sentenciaSQL->bindParam(':Archivo', $txtuploadedFile);
                    $sentenciaSQL->bindParam(':Imagen', $txtImagen);

                    // echo "Presionado Botón Seleccionar";
                    break;

                case "Borrar":

                    $sentenciaSQL = $conexion->prepare("SELECT imagen FROM servicios WHERE id=:id");
                    $sentenciaSQL->bindParam(':id', $txtID);
                    $sentenciaSQL->execute();
                    $servicio = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

                    if (isset($servicio["imagen"]) && ($servicio["imagen"] != "imagen.jpg")) {

                        if (file_exists("../../img/" . $servicio["imagen"])) {

                            unlink("../../img/" . $servicio["imagen"]);
                        }
                    }

                    /* https://www.youtube.com/watch?v=IZHBMwGIAoI   (2:28:58) por hay va el video y voy yo   */
                    $sentenciaSQL = $conexion->prepare("DELETE FROM servicios WHERE id=:id");
                    $sentenciaSQL->bindParam(':id', $txtID);
                    $sentenciaSQL->execute();

                    // echo "Presionado Botón Borrar";
                    break;
            }

            $sentenciaSQL = $conexion->prepare("SELECT * FROM webpeti");
            $sentenciaSQL->execute();
            $listaServicios = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

            ?>


            <div class="col-md-5">

                <div class="card">
                    <div class="card-header">
                        Datos del proyecto
                    </div>

                    <div class="card-body">

                        <form method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="txtID">ID:</label>
                                <input type="text" required readonly class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
                            </div>

                            <div class="form-group">
                                <label for="txtNombre">Nombre del proyecto:</label>
                                <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre del proyecto">
                            </div>

                            <div class="form-group">
                                <label for="txtObjetivo">Objetivo:</label>
                                <input type="text" required class="form-control" value="" name="txtObjetivo" id="txtObjetivo" placeholder="Objetivo del proyecto">
                            </div>

                            <div class="form-group">
                                <label for="txtProceso">Proceso:</label>
                                <input type="text" required class="form-control" value="" name="txtProceso" id="txtProceso" placeholder="Proceso del proyecto">
                            </div>

                            <div class="Fecha De Creacion">
                                <label for="txtFecha_Creacion">Fecha_Creacion</label>
                                <input class="controls" type="datetime-local" name="txtCreation_date" id="txt_fechacreacion_Reg" placeholder="Seleccione la fecha de creacion">
                            </div>
                            <br />
                            <div class="Fecha Limite">
                                <label>Fecha_Limite</label>
                                <input class="controls" type="datetime-local" name="txtDeadline" id="txt_fechalimite_Reg" placeholder="Seleccione la fecha limite de creacion">
                            </div>

                            <!-- <form action="select_multiple.php" method="POST"> -->

                            Estado: <br>
                            <select class='mi-selector' name=''>
                                <option value=''>Selecciona el resultado</option>
                                <option value='Abierto'>Iniciado</option>
                                <option value='Pendiente'>Pendiente</option>
                                <option value='En Curso'>En Curso</option>
                                <option value='Terminado'>Terminado</option>
                                <option value='En Revision'>En Revision</option>
                                <option value='Aceptado'>Aceptado</option>
                                <option value='Rechazado'>Rechazado</option>
                                <option value='Cerrado'>Cerrado</option>
                            </select>
                            <!-- </form> -->
                            <br />


                            <!-- <form method="POST" action="upload.php" enctype="multipart/form-data"> -->
                            <div>
                                <span>Seleccione un archivo:</span>
                                <input type="file" name="txtuploadedFile" />
                            </div>
                            <!-- </form> -->

                            <div class="form-group">
                                <label for="txtImagen">Imagen:</label>

                                <?php if ($txtImagen != "") { ?>

                                    <img class="img-thumbnail rounded" src="css/img<?php echo $txtImagen; ?>" width="50" alt="" srcset="">

                                <?php } ?>

                                <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="nombre de la imagen">
                            </div>

                            <div class="btn-group" role="group" aria-label="">
                                <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?> value="Agregar" class="btn btn-success">Agregar</button>
                                <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
                                <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
                            </div>

                        </form>

                    </div>

                </div>


            </div>
            <div class="col-md-7">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre_Projects </th>
                            <th>Objetivo</th>
                            <th>Proceso</th>
                            <th>Fecha_Creacion</th>
                            <th>Fecha_Limite</th>
                            <th>Estado</th>
                            <th>Archivo</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaServicios as $webpeti) { ?>
                            <tr>
                                <td><?php echo $webpeti['id']; ?></td>
                                <td><?php echo $webpeti['Nombre_Projects']; ?></td>
                                <td><?php echo $webpeti['Objetivo']; ?></td>
                                <td><?php echo $webpeti['Proceso']; ?></td>
                                <td><?php echo $webpeti['Fecha_Creacion']; ?></td>
                                <td><?php echo $webpeti['Fecha_Limite']; ?></td>
                                <td><?php echo $webpeti['Estado']; ?></td>
                                <td><?php echo $webpeti['Archivo']; ?></td>
                                <td><?php echo $webpeti['Imagen']; ?></td>

                                <td>

                                    <img class="mx-auto d-block rounded" src="../../img/<?php echo $webpeti['Imagen']; ?>" width="50" alt="" srcset="">

                                </td>

                                <td>
                                    <form method="post">

                                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $webpeti['id']; ?>" />

                                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />

                                        <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />

                                    </form>


                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</body>

</html>