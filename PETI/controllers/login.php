<?php

require_once 'libs/controller.php';

include "logs.php";

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
        $this->view->mensaje_1 = "";
        $this->view->mensaje_2 = "";
    }

    function render()
    {
        $this->view->render('login/index');
    }


    function ingresar()
    {
        print_r($_POST);
        $this->model->validar();
        //$this->view->render('login/index');
    }

    function loginUser()
    {

        $user = $_POST['user'];
        $pass = $_POST['password'];

        $session = $this->model->login([
            'user' => $user,
        ]);
        
        if ($session->idusers != "") {

            $password = $session->password;

            if (password_verify($pass, $password)) {
                    session_start();
                    $_SESSION['idusers']               = $session->idusers;
                    $_SESSION['profile']            = $session->profile;
                    $_SESSION['name']               = $session->name;

                    // print_r($_SESSION);
                    if (((($_SESSION['profile'] == 1) || ($_SESSION['profile'] == 2)) || ($_SESSION['profile'] == 3)) || ($_SESSION['profile'] == 4)) 
                    {
                        $user = $_SESSION["user"];
                        setlocale(LC_TIME, "es_CO.UTF-8");
                        date_default_timezone_set('America/Bogota');
                        $time = date('Y-m-d');

                        $this->view->mensaje = "";
                        $this->view->render('peti/index');
                        
                    } else {
                        $this->view->render('peti/index');
                    }
                } else {
                $mensaje_1 = '';
                $mensaje_2 = 'Contraseña incorrecta';
                $this->view->mensaje_1 = $mensaje_1;
                $this->view->mensaje_2 = $mensaje_2;
                $this->view->render('login/index');
            }
        } else {
            $mensaje_1 = 'Usuario no registrado';
            $mensaje_2 = '';
            $this->view->mensaje_1 = $mensaje_1;
            $this->view->mensaje_2 = $mensaje_2;
            $this->view->render('login/index');
        }
    }

    function logoutUser()
    {
        session_start();

        if ((isset($_SESSION['profile']) == 1) || (isset($_SESSION['profile']) == 4)) {
            $log = new Log("log",  './public/documents/logs/');
            $log->insert('Cierre de sesion de usuario administrador', false, false, false);
        }

        $_SESSION = array();

        // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
        // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        session_destroy();
        $this->view->render('login/index');
    }
        

}
