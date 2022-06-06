<?php include("template/cabecera.php"); ?>

<?php
include ("administrador/config/bd.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM servicios");
$sentenciaSQL->execute();
$listaServicios=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<?php foreach ($listaServicios as $servicio ) { ?>
<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $servicio ['imagen']; ?>" alt="">

<div class="card-body">
    <h4 class="card-title"><?php echo $servicio ['nombre']; ?></h4>
    <a name="" id="" class="btn btn-primary" href="https://www.si18.com.co/poli/c80/c80p3/c80p3.html" role="button">Ver Mas</a>
</div>

</div>

</div>
<?php }?>


<?php include("template/pie.php"); ?>   