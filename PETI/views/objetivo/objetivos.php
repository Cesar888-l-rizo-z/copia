<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <div class="row justify-content-center">



        <?php
        foreach ($this->visttarget as $key) {
            // print_r($key);
        ?>

            <div class=" card text-white bg-dark mb-3 " style="max-width: 18rem;">
                <div class="card-header">
                    <h4 class="card-title"><?php echo $key['nombre_objectives']; ?></h4>
                    <p class="card-text"><?php echo  $key['description_objectives']; ?></p>
                </div>

            </div>
        <?php
        } ?>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>