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
    <link rel="stylesheet" href="./css/bootstrap.min.css" />

</head>

<body>

    <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/AppWebPETI" ?>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary ">
        <div class="container">
            
            <a class="navbar-brand active" href="#"> Administrador del sistema</a>

            <a class="navbar-brand nav-link" href="Index.php">inicio</a>

            <a class="navbar-brand nav-link" href="Create_Projects.php">Proyectos</a>

            <a class="navbar-brand nav-link" href="Cerrar.php">Cerrar</a>
        <div class="container-fluid">
    </nav>

    <div class="container">
    <br />
    <br />
    <br />
        
        <div class="row">
            <?php

            $txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
            $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
            $txtObjetivo = (isset($_POST['txtObjetivo'])) ? $_POST['txtObjetivo'] : "";
            $txtProceso = (isset($_POST['txtProceso'])) ? $_POST['txtProceso'] : "";
            $txtCreation_date = (isset($_POST['txtCreation_date'])) ? $_POST['txtCreation_date'] : "";
            $txtDeadline = (isset($_POST['txtDeadline'])) ? $_POST['txtDeadline'] : "";
            $txtStatus = (isset($_POST['txtStatus'])) ? $_POST['txtStatus'] : "";
            $txtuploadedFile = (isset($_FILES['txtuploadedFile']['name'])) ? $_FILES['txtuploadedFile']['name'] : "";
            $txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
            $accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

           // print_r($_POST);

            include("../Config/bd.php");

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

                    //$fecha = new DateTime();
                    function nameFile()
                    {
                        date_default_timezone_set('America/Bogota');
                        $time = time();
                        $nameprog = "evidence_" . date("dmY-His", $time);
                        return $nameprog;
                    }
                    $fecha = nameFile();


                    //$nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
                    $nombreArchivo = ($txtImagen != "") ? $fecha . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";

                    $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

                    if ($tmpImagen != "") {

                        move_uploaded_file($tmpImagen, "./css/img/"  . $nombreArchivo);
                    }


                    $sentenciaSQL->bindParam(':Imagen', $nombreArchivo);
                    $sentenciaSQL->execute();
                    header("Location:Create_Projects.php");
                    break;

                case "Modificar":

                    $sentenciaSQL = $conexion->prepare("UPDATE
                    webpeti SET

                    Nombre_Projects = :Nombre_Projects,
                    Objetivo = :Objetivo,
                    Proceso = :Proceso,
                    Fecha_Creacion = :Fecha_Creacion,
                    Fecha_Limite = :Fecha_Limite,
                    Estado = :Estado,
                    Archivo = :Archivo
                    WHERE id=:id");

                    $sentenciaSQL->bindParam(':Nombre_Projects', $txtNombre);
                    $sentenciaSQL->bindParam(':Objetivo', $txtObjetivo);
                    $sentenciaSQL->bindParam(':Proceso', $txtProceso);
                    $sentenciaSQL->bindParam(':Fecha_Creacion', $txtCreation_date);
                    $sentenciaSQL->bindParam(':Fecha_Limite', $txtDeadline);
                    $sentenciaSQL->bindParam(':Estado', $txtStatus);
                    $sentenciaSQL->bindParam(':Archivo', $txtuploadedFile);

                    $sentenciaSQL->bindParam(':id', $txtID);
                    $sentenciaSQL->execute();

                    if ($txtImagen != "") {

                        $fecha = new DateTime();
                        $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
                        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

                        move_uploaded_file($tmpImagen, "./css/img/ " . $nombreArchivo);

                        $sentenciaSQL = $conexion->prepare("SELECT Imagen FROM webpeti WHERE id=:id");
                        $sentenciaSQL->bindParam(':id', $txtID);
                        $sentenciaSQL->execute();
                        $proyecto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

                        if (isset($proyecto["imagen"]) && ($proyecto["imagen"] != "imagen.jpg")) {

                            if (file_exists("./css/img/" . $proyecto["imagen"])) {

                                unlink("./css/img/" . $proyecto["imagen"]);
                            }
                        }

                        $sentenciaSQL = $conexion->prepare("UPDATE webpeti SET Imagen=:Imagen WHERE id=:id");
                        $sentenciaSQL->bindParam(':Imagen', $nombreArchivo);
                        $sentenciaSQL->bindParam(':id', $txtID);
                        $sentenciaSQL->execute();
                    }

                    header("Location:Create_Projects.php");
                    break;

                case "Cancelar":
                    header("Location:Create_Projects.php");
                    break;

                case "Seleccionar":

                    $sentenciaSQL = $conexion->prepare("SELECT * FROM webpeti WHERE id=:id");
                    $sentenciaSQL->bindParam(':id', $txtID);
                    $sentenciaSQL->execute();
                    $proyecto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

                    $txtNombre = $proyecto['Nombre_Projects'];
                    $txtObjetivo = $proyecto['Objetivo'];
                    $txtProceso = $proyecto['Proceso'];
                    $txtCreation_date = $proyecto['Fecha_Creacion'];
                    $txtDeadline = $proyecto['Fecha_Limite'];
                    $txtStatus = $proyecto['Estado'];
                    $txtuploadedFile = $proyecto['Archivo'];
                    $txtImagen = $proyecto['Imagen'];


                    // echo "Presionado Botón Seleccionar";
                    break;

                case "Borrar":

                    $sentenciaSQL = $conexion->prepare("SELECT Imagen FROM webpeti WHERE id=:id");
                    $sentenciaSQL->bindParam(':id', $txtID);
                    $sentenciaSQL->execute();
                    $proyecto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

                    if (isset($proyecto["imagen"]) && ($proyecto["imagen"] != "imagen.jpg")) {

                        if (file_exists("css/img/" . $proyecto["imagen"])) {

                            unlink("css/img/" . $proyecto["imagen"]);
                        }
                    }
                    $sentenciaSQL = $conexion->prepare("DELETE FROM webpeti WHERE id=:id");
                    $sentenciaSQL->bindParam(':id', $txtID);
                    $sentenciaSQL->execute();

                    header("Location:Create_Projects.php");
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
                                <textarea required class="form-control" value="<?php echo $txtObjetivo; ?>" name="txtObjetivo" id="txtObjetivo" placeholder="Objetivo del proyecto" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="txtProceso">Proceso:</label>
                                <input type="text" required class="form-control" value="<?php echo $txtProceso; ?>" name="txtProceso" id="txtProceso" placeholder="Proceso del proyecto">
                            </div>

                            <div class="Fecha De Creacion">
                                <label for="txtFecha_Creacion">Fecha_Creacion</label>
                                <input type="datetime-local" required class="form-control" name="txtCreation_date" id="txt_fechacreacion_Reg" placeholder="Seleccione la fecha de creacion">
                            </div>
                            <br />
                            <div class="Fecha Limite">
                                <label>Fecha_Limite</label>
                                <input type="datetime-local" required class="form-control" name="txtDeadline" id="txt_fechalimite_Reg" placeholder="Seleccione la fecha limite de creacion">
                            </div>

                            Estado: <br>
                            <select class='mi-selector' name='txtStatus'>
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

                            <div class="form-group"> <label for="archivo" class="col-ms-2 control-label">Archivo</label>

                                <?php if ($txtuploadedFile != "") { ?>
                                    <file class="" src="../Docs/S<?php echo $txtuploadedFile; ?>">
                                    <?php } ?>


                                    <div class="col-sm-15"> <input type="file" class="form-control" id="archivo" name="txtuploadedFile" /> </div>
                            </div>

                            <div class="form-group">
                                <label for="txtImagen">Imagen:</label>

                                <?php if ($txtImagen != "") { ?>

                                    <img class="img-thumbnail rounded" src="css/img/<?php echo $txtImagen; ?>" width="50" alt="" srcset="">

                                <?php } ?>

                                <input type="file" class="form-control" name="txtImagen" id="txtImagen" accept="image/*">
                            </div>

                            <div class="btn-group" role="group" aria-label="">
                                <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?> value="Agregar" class="btn btn-success">Agregar</button>
                                <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
                                <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
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
                                <td> <textarea rows="2" cols="17"><?php echo $webpeti['Objetivo']; ?></textarea></td>
                                <td><?php echo $webpeti['Proceso']; ?></td>
                                <td><?php echo $webpeti['Fecha_Creacion']; ?></td>
                                <td><?php echo $webpeti['Fecha_Limite']; ?></td>
                                <td><?php echo $webpeti['Estado']; ?></td>
                                <td><?php echo $webpeti['Archivo']; ?></td>
                                <td>
                                    <img class="mx-auto d-block rounded" src="css/img/<?php echo $webpeti['Imagen']; ?>" width="50" alt="" srcset="">
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