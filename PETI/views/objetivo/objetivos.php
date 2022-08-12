<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <div class="row justify-content-center">



        <?php
        foreach ($this->visttarget as $key) {
            // print_r($key);
        ?>

            <div class=" text-center" style="width: 60rem;">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $key['nombre_objectives']; ?></h4>
                    <br/>
                    <p class="card-text"><?php echo  $key['description_objectives']; ?></p>
                    <p class="card-text"><?php echo  $key['description_objectives2']; ?></p>
                    <p class="card-text"><?php echo  $key['description_objectives3']; ?></p>
                    <p class="card-text"><?php echo  $key['description_objectives4']; ?></p>
                    <p class="card-text"><?php echo  $key['description_objectives5']; ?></p>
                    <p class="card-text"><?php echo  $key['description_objectives6']; ?></p>
                    <p class="card-text"><?php echo  $key['description_objectives7']; ?></p>
                    <p class="card-text"><?php echo  $key['description_objectives8']; ?></p>
                    <p class="card-text"><?php echo  $key['description_objectives9']; ?></p>
                    <p class="card-text"><?php echo  $key['description_objectives10']; ?></p>

                </div>

            </div>
        <?php
        } ?>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>