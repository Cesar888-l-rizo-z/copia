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
    <div class="container">
        <div class="row centrado mt-5">
           <h1 class="align-middle">Nuevo Registro</h1> 
        </div>
        <div class="row justify-content-center m-5">
            <form class="col-5" action="<?php echo constant('URL'); ?>register/createUser" method="POST">
                <div class="mb-3">
                    <label for="txtiduser" class="form-label">Id Usuario</label>
                    <input type="text" class="form-control" id="idusers" name="idusers">
                </div>
                <div class="mb-3">
                    <label for="txtname" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="txtsurname" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="surname" name="surname">
                </div>
                <div class="mb-3">
                    <label for="txtphone" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="txtphone" class="form-label">Correo electronico</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="txtpassword" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="txtpassword" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="passwordv" name="passwordv">
                </div>
                <div class="center">
                    <button type="submit" class="btn btn-primary aling-middle">Enviar</button>       
                </div>
            </form>
        </div>
    </div>
</body>
</html>

