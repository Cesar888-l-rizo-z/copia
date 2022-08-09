<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    ?>

    <div class="card">
        <div class="card-header">
            CONTEXTO ESTRATÉGICO
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/crearcontexto" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtNombre">Nombre De La Matriz:</label>
                    <input type="text" class="form-control" value="" name="txtNombre" id="txtNombre" placeholder="Nombre De La Matriz">
                </div>

                <div class="form-group">
                    <label for="txtOportunidad">Descripción y Oportunidades:</label>
                    <input type="text" class="form-control" value="" name="txtOportunidad" id="txtOportunidad" placeholder="Nombre De La Matriz">
                </div>

                <div class="lista-producto float-clear" style="clear:both;">
                    <label for="txtdescription">Numero De Oprtunidades:</label>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <input type="text" class="form-control" name="txtNo1" id="txtNo1" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo2" id="txtNo2" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo3" id="txtNo3" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo4" id="txtNo4" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo5" id="txtNo5" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo6" id="txtNo6" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo7" id="txtNo7" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo8" id="txtNo8" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo9" id="txtNo9" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo10" id="txtNo10" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo11" id="txtNo11" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo12" id="txtNo12" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo13" id="txtNo13" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo14" id="txtNo14" placeholder="Descripción De La Oportunidad">
                            <br />
                            <input type="text" class="form-control" name="txtNo15" id="txtNo15" placeholder="Descripción De La Oportunidad">

                        </li>
                    </ul>
                </div>

                <div>
                    <input type="submit" class="btn btn-success" value="Agregar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>