<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <div class="row justify-content-center">



        <?php
        foreach ($this->vistlist_context as $key) {
            // print_r($key);
        ?>

<div class=" card text-white bg-dark mb-3 " style="max-width: 18rem;">
                <div class="card-body">
                    <!-- <img src="<?php echo constant('URL') . 'public/images/' ?>" class="card-img-top" alt=""> -->
                    <h4 class="card-title"><?php echo $key['nombre_context']; ?></h4>
                    <p class="card-text"><?php echo  $key['descripcion']; ?></p>
                    <p class="card-text"><?php echo  $key['No1']; ?></p>
                    <p class="card-text"><?php echo  $key['No2']; ?></p>
                    <p class="card-text"><?php echo  $key['No3']; ?></p>
                    <p class="card-text"><?php echo  $key['No4']; ?></p>
                    <p class="card-text"><?php echo  $key['No5']; ?></p>
                    <p class="card-text"><?php echo  $key['No6']; ?></p>
                    <p class="card-text"><?php echo  $key['No7']; ?></p>
                    <p class="card-text"><?php echo  $key['No8']; ?></p>
                    <p class="card-text"><?php echo  $key['No9']; ?></p>
                    <p class="card-text"><?php echo  $key['No10']; ?></p>
                    <p class="card-text"><?php echo  $key['No11']; ?></p>
                    <p class="card-text"><?php echo  $key['No12']; ?></p>
                    <p class="card-text"><?php echo  $key['No13']; ?></p>
                    <p class="card-text"><?php echo  $key['No14']; ?></p>
                    <p class="card-text"><?php echo  $key['No15']; ?></p>
                </div>

            </div>
        <?php } ?>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>