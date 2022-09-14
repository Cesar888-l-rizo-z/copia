<?php

require_once 'libs/controller.php';

class Register extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render()
    {
        $this->view->render('register/index');
    }

    function createUser()
    {

        $idusers            = $_POST['idusers'];
        $name               = strtoupper($_POST['name']);
        $surname            = strtoupper($_POST['surname']);
        $phone              = strtoupper($_POST['phone']);
        $email              = strtoupper($_POST['email']);
        $password           = $_POST['password'];                           
        $confirm_pass       = $_POST['passwordv'];                           

        $profile            = "2";
        $status             = "1";

        $mensaje            = "";

        $validation         = $this->model->validateUser($idusers);

        if ($validation == "0") {
            if ($password == $confirm_pass) {
                $passenc            = password_hash($password, PASSWORD_DEFAULT);
                if ($this->model->create([
                    'idusers'           => $idusers,
                    'name'              => $name,
                    'surname'           => $surname,
                    'phone'             => $phone,
                    'email'             => $email,
                    'password'          => $password,
                    'status'            => $status,
                    'profile'           => $profile,
                ])) {
                    $this->model->createLogin([
                        'user_iduser'     => $idusers,
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
