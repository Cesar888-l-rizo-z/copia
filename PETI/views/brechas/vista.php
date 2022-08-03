<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <div class="row">



        <?php
        foreach ($this->vist as $key) {
            // print_r($key);
        ?>
            <div class="col-md-3">
                <div class="card">

                    <div class="card-body">

                        <h4 class="card-title"><?php echo $key['nombre_rupturas']; ?></h4>
                        <h4 class="card-title"><?php echo  $key['ruptura']; ?></h4>
                        <h4 class="card-title"><?php echo  $key['estrategia1']; ?></h4>
                        <h4 class="card-title"><?php echo  $key['estrategia2']; ?></h4>
                        <h4 class="card-title"><?php echo  $key['estrategia3']; ?></h4>
                        <h4 class="card-title"><?php echo  $key['estrategia4']; ?></h4>
                        <h4 class="card-title"><?php echo  $key['estrategia5']; ?></h4>
                    </div>

                </div>

            </div>
        <?php
        } ?>
    </div>
</div>

<?php require 'views/templates/footer.php' ?>