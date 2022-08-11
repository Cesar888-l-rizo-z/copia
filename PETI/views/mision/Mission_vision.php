<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <div class="row justify-content-center">



        <?php
        foreach ($this->vistMission_vision as $key) {
            // print_r($key);
        ?>

            
                <div class="card text-center" style="width: 60rem;">
                    <div class="card-body">
                        <div class="card-header">
                            <h1 class="card-title"><?php echo $key['nombren_Mission_vision']; ?></h1>
                            <p class="card-text"><?php echo  $key['description_Mission_vision']; ?></p>
                        </div>

                    </div>
                <?php
            } ?>

                </div>
    </div>
</div>

<?php require 'views/templates/footer.php' ?>