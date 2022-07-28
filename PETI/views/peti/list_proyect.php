<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <div class="row">



        <?php
        foreach ($this->list as $key) {
            //print_r($key);
        ?>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="public/images/<?php echo $list['Imagen']; ?>" alt="">

                    <div class="card-body">

                        <h4 class="card-title"><?php echo $key['Nombre_Projects']; ?></h4>
                        <h4 class="card-title"><?php echo  $key['Fecha_Creacion']; ?></h4>
                        <h4 class="card-title"><?php echo  $key['Estado']; ?></h4>
                        <h4 class="card-title"><?php echo  $key['Archivo']; ?></h4>
                        <a name="" id="" class="btn btn-primary" href="" role="button">Ver Mas</a>
                    </div>

                </div>

            </div>
        <?php
        } ?>
    </div>
</div>

<?php require 'views/templates/footer.php' ?>