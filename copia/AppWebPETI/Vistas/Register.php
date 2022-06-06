<?php

require '../Config/bd.php';

$Nombre = (isset($_POST['Nombre'])) ? $_POST['Nombre'] : "";
$Objetivo = (isset($_POST['Objetivo'])) ? $_POST['Objetivo'] : "";
$Proceso = (isset($_POST['Proceso'])) ? $_POST['Proceso'] : "";
$Creation_date = (isset($_POST['Creation_date'])) ? $_POST['Creation_date'] : "";
$Deadline = (isset($_POST['Deadline'])) ? $_POST['Deadline'] : "";
$Status = (isset($_POST['Status'])) ? $_POST['Status'] : "";
$uploadedFile = (isset($_POST['uploadedFile'])) ? $_POST['uploadedFile'] : "";
$imagen = (isset($_FILES['imagen']['name'])) ? $_FILES['imagen']['name'] : "";


$sql = "INSERT INTO  webpeti (Nombre_Projects,Objetivo,Proceso,Fecha_Creacion,Fecha_Limite,Resultado,
	Archivo,Imagen) VALUES ('Nombre_Projects', 'Objetivo', 'Proceso', 'Fecha_Creacion', 'Fecha_Limite',
	 'Archivo', 'Imagen')";

$sentenciaSQL = $conexion->prepare("SELECT * FROM webpeti");
$sentenciaSQL->execute();
$listaServicios = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

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
			<div class="row-md7" style="text-align:center">
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

				<a href="index.php" class="btn btn-primary">Regresar</a>

			</div>
		</div>
	</div>
</body>

</html>