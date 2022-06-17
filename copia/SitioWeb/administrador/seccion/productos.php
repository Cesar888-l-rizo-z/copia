<?php include("../template/cabecera.php"); ?>
<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/bd.php");


switch($accion){

        case "Agregar":

            $sentenciaSQL= $conexion->prepare("INSERT INTO servicios (nombre,imagen) VALUES (:nombre,:imagen);");

            $sentenciaSQL->bindParam(':nombre',$txtNombre);
            $fecha= new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

            if($tmpImagen!=""){

                    move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
            }

            $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
            $sentenciaSQL->execute();
            break;

        case "Modificar":

            $sentenciaSQL= $conexion->prepare("UPDATE servicios SET nombre=:nombre WHERE id=:id");
            $sentenciaSQL->bindParam(':nombre',$txtNombre);
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();

            if ($txtImagen!=""){

                $fecha= new DateTime();
                $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
                $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

                move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);

                $sentenciaSQL= $conexion->prepare("SELECT imagen FROM servicios WHERE id=:id");
                $sentenciaSQL->bindParam(':id',$txtID);
                $sentenciaSQL->execute();
                $servicio=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

                if ( isset($servicio["imagen"]) &&($servicio["imagen"]!="imagen.jpg") ){

                    if(file_exists("../../img/".$servicio["imagen"])){

                        unlink("../../img/".$servicio["imagen"]);
                    }
                }

                $sentenciaSQL= $conexion->prepare("UPDATE servicios SET imagen=:imagen WHERE id=:id");
                $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
                $sentenciaSQL->bindParam(':id',$txtID);
                $sentenciaSQL->execute();
            }

            break;

        case "Cancelar":
            echo "Presionado Botón Cancelar";
             break;

        case "Seleccionar":
            
            $sentenciaSQL= $conexion->prepare("SELECT * FROM servicios WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            $servicio=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            $txtNombre=$servicio['nombre'];
            $txtImagen=$servicio['imagen'];

            // echo "Presionado Botón Seleccionar";
             break;

        case "Borrar":

            $sentenciaSQL= $conexion->prepare("SELECT imagen FROM servicios WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            $servicio=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if ( isset($servicio["imagen"]) &&($servicio["imagen"]!="imagen.jpg") ){

                if(file_exists("../../img/".$servicio["imagen"])){

                    unlink("../../img/".$servicio["imagen"]);
                }
            }

            /* https://www.youtube.com/watch?v=IZHBMwGIAoI   (2:28:58) por hay va el video y voy yo   */ 
            $sentenciaSQL= $conexion->prepare("DELETE FROM servicios WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute(); 
            
            // echo "Presionado Botón Borrar";
             break;

}

$sentenciaSQL= $conexion->prepare("SELECT * FROM webpeti");
$sentenciaSQL->execute();
$listaServicios=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Datos del servicio
        </div>

        <div class="card-body">
            
        <form method="POST" enctype="multipart/form-data" >

    <div class = "form-group">
    <label for="txtID">ID:</label>
    <input type="text" class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtNombre">Nombre:</label>
    <input type="text" class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre del servicio">
    </div>

    <div class = "form-group">
    <label for="txtNombre">imagen:</label>

   

    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="nombre de la imagen">
    </div>

        <div class="btn-group" role="group" aria-label="">
            <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
            <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
            <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
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
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaServicios as $servicios) { ?>
            <tr>
                <td><?php echo $servicios['id']; ?></td>
                <td><?php echo $servicios['nombre']; ?></td>

                <td>

                <img src="../../img/<?php echo $servicios['imagen']; ?>" width="50" alt="" srcset="">
            
            
                </td>

                <td>
                <form  method="post">

                    <input type="hidden" name="txtID" id="txtID" value="<?php echo $servicios['id']; ?>" />

                    <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>

                    <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/>

                </form>
                
                
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

<?php include("../template/pie.php"); ?>

