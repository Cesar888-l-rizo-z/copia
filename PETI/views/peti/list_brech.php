<?php require 'views/templates/header_2.php' ?>

<div class="container-fluid">

    <?php
    echo $this->mensaje;
    ?>

    <table class="table table-hover table-sm table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre_Rupturas </th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estrategia</th>
                <th scope="col">Estrategia</th>
                <th scope="col">Estrategia</th>
                <th scope="col">Estrategia</th>
                <th scope="col">Estrategia</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->vist as $key) {
                //  print_r($key);
            ?>
                <tr>
                    <td><?php echo $key['idbrechasTI']; ?></td>
                    <td><?php echo $key['nombre_rupturas']; ?></td>
                    <td> <textarea rows="2" cols="17"><?php echo $key['ruptura']; ?></textarea></td>
                    <td><?php echo $key['estrategia1']; ?></td>
                    <td><?php echo $key['estrategia2']; ?></td>
                    <td><?php echo $key['estrategia3']; ?></td>
                    <td><?php echo $key['estrategia4']; ?></td>
                    <td><?php echo $key['estrategia5']; ?></td>
                    
                    <td>
                        <a class="btn btn-primary" id="btn_<?php echo $key['idbrechasTI']; ?>" href="<?php echo constant('URL') . 'index/select_brechas/' . $key['idbrechasTI']; ?>">Seleccionar</a>
                        <a class="btn btn-danger" id="btn_<?php echo $key['idbrechasTI']; ?>" href="<?php echo constant('URL') . 'index/delete_brechas/' . $key['idbrechasTI']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php
            } ?>

        </tbody>
    </table>
</div>

<?php require 'views/templates/footer.php' ?>