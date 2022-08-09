<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <div class="row justify-content-center">



        <?php
        foreach ($this->vist as $key) {
            // print_r($key);
        ?>

            <div class=" card text-white bg-dark mb-3 " style="max-width: 18rem;">
                <div class="card-header">
                    <!-- <img src="<?php echo constant('URL') . 'public/images/' ?>" class="card-img-top" alt=""> -->
                    <h4 class="card-title"><?php echo $key['nombre_rupturas']; ?></h4>
                    <p class="card-text"><?php echo  $key['ruptura']; ?></p>
                    <p class="card-text"><?php echo  $key['estrategia1']; ?></p>
                    <p class="card-text"><?php echo  $key['estrategia2']; ?></p>
                    <p class="card-text"><?php echo  $key['estrategia3']; ?></p>
                    <p class="card-text"><?php echo  $key['estrategia4']; ?></p>
                    <p class="card-text"><?php echo  $key['estrategia5']; ?></p>
                </div>

            </div>
        <?php
        } ?>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>