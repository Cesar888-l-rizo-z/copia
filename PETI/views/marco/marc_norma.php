<?php require 'views/templates/header_marc.php' ?>

<div class="container">

    <div class="row justify-content-center">



        <?php
        foreach ($this->vistmarco as $key) {
            // print_r($key);
        ?>
            <table class="table table-bordered table-responsive">

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Resumen</th>
                        <th scope="col">Link Descarga</th>
                        <th scope="col">Observacion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $key['norma_ley']; ?></td>
                        <td><?php echo  $key['resumen']; ?></td>
                        <td><?php echo  $key['link']; ?></td>
                        <td><?php echo  $key['observacion']; ?></td>
                    </tr>
                </tbody>

            </table>
        <?php
        } ?>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>