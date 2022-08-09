<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <div class="row justify-content-center">



        <?php
        foreach ($this->vistmarco as $key) {
            // print_r($key);
        ?>

            <div class=" card text-white bg-dark mb-3 " style="max-width: 18rem;">
                <div class="card-header">
                    <!-- <img src="<?php echo constant('URL') . 'public/images/' ?>" class="card-img-top" alt=""> -->
                    <h4 class="card-title"><?php echo $key['norma_ley']; ?></h4>
                    <p class="card-text"><?php echo  $key['resumen']; ?></p>
                    <p class="card-text"><?php echo  $key['link']; ?></p>
                    <p class="card-text"><?php echo  $key['observacion']; ?></p>
                </div>

            </div>
        <?php
        } ?>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>