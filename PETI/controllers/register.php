<?php

require_once 'libs/controller.php';

class Register extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    function register()
    {
        $this->view->render('register/register');
    }

    function render()
    {
        $this->view->render('register/index');
    }

    function createUser()
    {

        $idusers            = $_POST['user'];
        $name               = strtoupper($_POST['nombre']);
        $email              = strtolower($_POST['correo']);
        $password           = $_POST['pass'];
        $confirm_pass       = $_POST['passr'];

        $profile            = "2";
        $status             = "1";

        $mensaje            = "";

        $validation         = $this->model->validateUser($idusers);

        if ($validation == "0") {
            if ($password == $confirm_pass) {
                $passenc            = password_hash($password, PASSWORD_DEFAULT);
                if ($this->model->create([
                    'user'           => $idusers,
                    'nombre'              => $name,
                    'correo'           => $email,
                    'pass'             => $password,
                    'passr'             => $confirm_pass,
                    'profile'           => $profile,
                    'status'            => $status
                    
                ])) {
                    $this->model->createLogin([
                        'users_idusers'     => $idusers,
                        'password'          => $passenc,
                    ]);


                    $mensaje = '<div class="alert alert-primary" role="alert">
                    Usuario creado con exito
                  </div>';
                    $this->view->mensaje_1 = "";
                    $this->view->mensaje_2 = "";
                    $this->view->mensaje = $mensaje;
                    $this->view->render('login/index');
                } else {
                    $mensaje = '<div class="alert alert-danger" role="alert">
                    Ocurrio un error al crear el usuario
                    </div>';
                    $this->view->mensaje = $mensaje;
                    $this->render();
                }
            } else {
                $mensaje = '<div class="alert alert-danger" role="alert">
                las contraseñas no coinciden
                </div>';
                $this->view->mensaje = $mensaje;
                $this->render();
            }
        } else {
            $mensaje = '<div class="alert alert-danger" role="alert">
            El documento ya se encuentra registrado
            </div>';
            $this->view->mensaje = $mensaje;
            $this->render();
        }
    }
}