<!doctype html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row-md7">
            <h3 style="text-align:center">NUEVO PROYECTO</h3>
        </div>
        <form class="form-horizontal" method="POST" action="Register.php" autocomplete="off">
            <div class="form-group">
                <label for="txtNombre" class="col-sm-2 control-label">Nombre del proyecto:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtNombre" name="tNombre" placeholder="Nombre Del Proyecto" required>
                </div>
            </div>

            <div class="form-group">
                <label for="txtObjetivo" class="col-sm-2 control-label">Objetivo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtObjetivo" name="Objetivo" placeholder="Objetivo Del Proyecto" required>
                </div>
            </div>

            <div class="form-group">
                <label for="txtProceso" class="col-sm-2 control-label">Proceso</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtProceso" name="Proceso" placeholder="Proceso Del Proyecto" required>
                </div>
            </div>

            <div class="form-group">
                <label for="txtFecha_Creacion" class="col-sm-2 control-label">Fecha_Creacion</label>
                <div class="col-sm-10">
                    <input class="controls" type="datetime-local" name="Creation_date" id="txt_fechacreacion_Reg" placeholder="Seleccione la fecha de creacion" required>
                </div>
            </div>

            <br />
            <div class="form-group">
                <label for="txtFecha_Limite" class="col-sm-2 control-label">Fecha_Limite</label>
                <div class="col-sm-10">
                    <input class="controls" type="datetime-local" name="tDeadline" id="txt_fechalimite_Reg" placeholder="Seleccione la fecha limite de creacion" required>
                </div>
            </div>

            <div class="col-sm-10">
                Estado: <br>
                <select class='mi-selector' name='Status'>
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

        </form>
        <br />
    </div>
    
    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <div>
            <span class="col-sm-2 control-label">Seleccione un archivo:</span>
            <div class="col-sm-10">
                <input type="file" name="uploadedFile" />
            </div>
        </div>
    </form>

    <div class="form-group">
        <label for="txtImagen" class="col-sm-2 control-label">Imagen:</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="imagen" id="txtimagen" placeholder="nombre de la imagen">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a href="index.php" class="btn btn-default">Regresar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
    </form>
    </div>
</body>

</html>