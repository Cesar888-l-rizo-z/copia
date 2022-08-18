<?php require 'views/templates/header_marc.php' ?>

<div class="container">

    <div class="row justify-content-center">



        <?php
        foreach ($this->vistsituation as $key) {
            // print_r($key);
        ?>
            <table class="table table-bordered" >

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Idicador</th>
                        <th scope="col"> Valor Objetivo </th>
                        <th scope="col"> Valor Inicial </th>
                        <th scope="col"> Fecha Del Valor Inicial </th>
                        <th scope="col"> Fecha Del Valor Objetivo </th>
                        <th scope="col"> Descripción </th>
                        <th scope="col"> Observación </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $key['indicator']; ?></td>
                        <td><?php echo  $key['value_target']; ?></td>
                        <td><?php echo  $key['value_initial']; ?></td>
                        <td><?php echo  $key['initial_value_date']; ?></td>
                        <td><?php echo  $key['target_value_date']; ?></td>
                        <td><textarea rows="2" cols="17"><?php echo  $key['descript']; ?></textarea></td>
                        <td><textarea rows="2" cols="17"><?php echo  $key['observation']; ?></textarea></td>
                    </tr>
                </tbody>

            </table>
        <?php
        } ?>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>