<?php
require '../Config/bd.php';

$where = "";

if (!empty($_POST)) {
	$valor = $_POST['campo'];
	if (!empty($valor)) {
		$where = "WHERE nombre LIKE '%$valor'";
	}
}
$sql = "SELECT * FROM webpeti $where";

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
		<div class="col-md-12">
			<h2 style="text-align:center">Listado De Proyectos</h2>
		</div>

		<div class="row">
			<a href="NuevoProjects.php" class="btn btn-primary">Nuevo Registro</a>

			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<b>Nombre_Projects: </b><input type="text" id="campo" name="campo" />
				<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
			</form>
		</div>

		<br>

		<div class="row table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre_Projects</th>
						<th>Objetivo</th>
						<th>Proceso</th>
						<th>Fecha_Creacion</th>
						<th>Fecha_Limite</th>
						<th>Resultado</th>
						<th>Archivo</th>
						<th>Imagen</th>
					</tr>
				</thead>

				<tbody>

					<?php
					include("../Config/bd.php");

					$sentenciaSQL = $conexion->prepare("SELECT * FROM webpeti");
					$sentenciaSQL->execute();
					$listaServicios = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

					?>

					<?php foreach ($listaServicios as $webpeti) { ?>
						<tr>
							<td><?php echo $webpeti['id']; ?></td>
							<td><?php echo $webpeti['Nombre_Projects']; ?></td>
							<td><?php echo $webpeti['Objetivo']; ?></td>
							<td><?php echo $webpeti['Proceso']; ?></td>
							<td><?php echo $webpeti['Fecha_Creacion']; ?></td>
							<td><?php echo $webpeti['Fecha_Limite']; ?></td>
							<td><?php echo $webpeti['Resultado']; ?></td>
							<td><?php echo $webpeti['Archivo']; ?></td>
							<td><?php echo $webpeti['Imagen']; ?></td>
							<td><a href="modificar.php?id=<?php echo $webpeti['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
							<td><a href="#" data-href="eliminar.php?id=<?php echo $webpeti['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
				</div>

				<div class="modal-body">
					¿Desea eliminar este registro?
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<a class="btn btn-danger btn-ok">Delete</a>
				</div>
			</div>
		</div>
	</div>

	<script>
		$('#confirm-delete').on('show.bs.modal', function(e) {
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

			$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
		});
	</script>

</body>

</html>