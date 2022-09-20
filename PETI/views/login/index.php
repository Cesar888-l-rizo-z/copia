<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css?v=<?php echo time(); ?>" />

    <!-- JS -->
    <script type="text/javascript" src="<?php echo constant('URL'); ?>public/js/jquery-3.5.1.min.js?v=<?php echo time(); ?>"></script>
    <script type="text/javascript" src="<?php echo constant('URL'); ?>public/js/bootstrap.min.js?v=<?php echo time(); ?>"></script>
    <title>Bootstrap</title>
</head>
<body>
<?php

$mensaje = '';
$mensaje_1 = '';
$mensaje_2 = '';

?>

<br>
    <div class="container">
        <div class="mx-auto" style="width: 200px;">
           <h1 class="align-middle">Ingreso</h1> 
        </div>
        <div class="row justify-content-center">
                <?php
                    if ($this->mensaje != "") 
                        echo $this->mensaje;
                ?>
                       
            <form class="col-5" action="<?php echo constant('URL'); ?>login/loginUser" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="user" id="user" aria-describedby="emailHelp">
                    <div id="emailiduser" class="form-text">Ingrese su número de identificación.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="center">
                    <button type="submit" class="btn btn-primary aling-middle">Enviar</button>       
                </div>
                <div class="row centrado mt-3">
                    <spam>No estas registrado? <a href="<?php echo constant('URL'); ?>register">Registrarse</a></spam>
                </div>
            </form>
        </div>
        
        
    </div>
</body>
</html>

