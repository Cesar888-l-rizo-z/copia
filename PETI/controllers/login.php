<?php

require_once 'libs/controller.php';

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
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
        

}
