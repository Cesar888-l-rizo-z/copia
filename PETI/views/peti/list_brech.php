<?php require 'views/templates/header_2.php' ?>

<div class="container-fluid">

    <?php
    echo $this->mensaje;
    ?>

    <table class="table table-hover table-sm table-responsive">
        <thead class="table-active">
            <tr>
                <th class="table-R200 G215 B205">ID</th>
                <th class="table-R200 G215 B205">Nombre_Rupturas </th>
                <th class="table-R200 G215 B205">Descripcion</th>
                <th class="table-R200 G215 B205">Estrategia</th>
                <th class="table-R200 G215 B205">Estrategia</th>
                <th class="table-R200 G215 B205">Estrategia</th>
                <th class="table-R200 G215 B205">Estrategia</th>
                <th class="table-R200 G215 B205">Estrategia</th>
                <th class="table-R200 G215 B205">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->vist as $key) {
                //  print_r($key);
            ?>
                <tr>
                    <td class="table-Black 40%"><?php echo $key['idbrechasTI']; ?></td>
                    <td class="table-Black 40%y"><?php echo $key['nombre_rupturas']; ?></td>
                    <td class="table-Black 40%"> <textarea rows="2" cols="17"><?php echo $key['ruptura']; ?></textarea></td>
                    <td class="table-Black 40%"><?php echo $key['estrategia1']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['estrategia2']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['estrategia3']; ?></td>
                    <td class="table-Black 40%t"><?php echo $key['estrategia4']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['estrategia5']; ?></td>
                    
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