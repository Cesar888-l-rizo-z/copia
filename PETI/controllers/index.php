<?php

require_once 'libs/controller.php';

class Index extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render()
    {
        $row = $this->model->list();
        // print_r($row);
        $this->view->list = $row;
        $this->view->render('peti/index');
    }

    function list()
    {
        $row = $this->model->list();
        // print_r($row);
        $this->view->list = $row;
        $this->view->render('peti/list');
    }

    function agregar()
    {
        $this->view->estados = $this->model->listStatus();
        $this->view->render('peti/agregar');
    }

  
    function crear()
    {

        $txtNombre = $_POST['txtNombre'];
        $txtObjetivo = $_POST['txtObjetivo'];
        $txtProceso = $_POST['txtProceso'];
        $txtCreation_date = $_POST['txtCreation_date'];
        $txtDeadline = $_POST['txtDeadline'];
        $txtStatus = $_POST['txtStatus'];
        $txtuploadedFile = $_FILES['txtuploadedFile'];
        $txtImagen = $_FILES['txtImagen'];


        $fecha = $this->nameFile();

        $nombreArchivo = ($txtImagen != "") ? $fecha . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";

        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

        if ($tmpImagen != "") {

            move_uploaded_file($tmpImagen, "./public/images/"  . $nombreArchivo);
        }

        $fecha = $this->docsFile();
        $NombreArchivo = ($txtuploadedFile != "") ? $fecha . "_" . $_FILES["txtuploadedFile"]["name"] : "evidence_docs";

        $tmpdocs = $_FILES["txtuploadedFile"]["tmp_name"];

        if ($tmpdocs != "") {

            move_uploaded_file($tmpdocs, "./public/documents/"  . $NombreArchivo);
        }

        if ($this->model->create(
            $data = [
                'nombre_projects'        => $txtNombre,
                'objetivo'               => $txtObjetivo,
                'proceso'                => $txtProceso,
                'creacion'               => $txtCreation_date,
                'limite'                 => $txtDeadline,
                'estado'                 => $txtStatus,
                'docs'                 => $txtuploadedFile,
                'img'                 => $txtImagen
            ]
        )) {
            $this->view->mensaje =
                '<div class="alert alert-info" role="alert">
                    Creado con exito
                </div>';
            $this->render();
        } else {
            $this->view->mensaje =
                '<div class="alert alert-danger" role="alert">
                    Ocurrio un problema al almacenar la informacion
                </div>';
            $this->view->render('peti/agregar');
        }
    }

    function nameFile()
    {
        date_default_timezone_set('America/Bogota');
        $time = time();
        $nameprog = "evidence_" . date("dmY-His", $time);
        return $nameprog;
    }

    function docsFile()
    {
        date_default_timezone_set('America/Bogota');
        $time = time();
        $nameprog = "evidence_docs" . date("dmY-His", $time);
        return $nameprog;
    }
    
    function select($param = null)
    {
        $id = $param[0];
        
        // print_r($id);

        $this->view->seleccionar = $this->model->select($id);
        $this->view->estados = $this->model->listStatus();
        $this->view->render('peti/update');
        
    }

    function update()
    {

        $id = $_POST['txtID'];
        $txtNombre = $_POST['txtNombre'];
        $txtObjetivo = $_POST['txtObjetivo'];
        $txtProceso = $_POST['txtProceso'];
        $txtCreation_date = $_POST['txtCreation_date'];
        $txtDeadline = $_POST['txtDeadline'];
        $txtStatus = $_POST['txtStatus'];
        $txtuploadedFile = $_FILES['txtuploadedFile'];
        $txtImagen = $_FILES['txtImagen'];


        $fecha = $this->nameFile();

        $nombreArchivo = ($txtImagen != "") ? $fecha . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";

        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

        if ($tmpImagen != "") {

            move_uploaded_file($tmpImagen, "./public/images/"  . $nombreArchivo);
        }

        $fecha = $this->docsFile();
        $NombreArchivo = ($txtuploadedFile != "") ? $fecha . "_" . $_FILES["txtuploadedFile"]["name"] : "evidence_docs";

        $tmpdocs = $_FILES["txtuploadedFile"]["tmp_name"];

        if ($tmpdocs != "") {

            move_uploaded_file($tmpdocs, "./public/documents/"  . $NombreArchivo);
        }

        if ($this->model->modificar(
            $data = [
                'ID'                    => $id,   
                'nombre_projects'        => $txtNombre,
                'objetivo'               => $txtObjetivo,
                'proceso'                => $txtProceso,
                'creacion'               => $txtCreation_date,
                'limite'                 => $txtDeadline,
                'estado'                 => $txtStatus,
                'docs'                 => $txtuploadedFile,
                'img'                 => $txtImagen
            ]
        )) {
            $this->view->mensaje =
                '<div class="alert alert-info" role="alert">
                    Creado con exito
                </div>';
            $this->render();
        } else {
            $this->view->mensaje =
                '<div class="alert alert-danger" role="alert">
                    Ocurrio un problema al almacenar la informacion
                </div>';
            $this->view->render('peti/agregar');
        }
    }

    function delete($param = null)
    {
        $id = $param[0];
        
        // print_r($id);

        if ( $this->model->delete($id)) {
            $this->view->mensaje =
                '<div class="alert alert-info" role="alert">
                    Eliminado con exito
                </div>';
            $this->render();
        } else {
            $this->view->mensaje =
                '<div class="alert alert-danger" role="alert">
                    Ocurrio un problema al eliminar la informacion
                </div>';
                $this->render();
        }
        
        
    }

    function riesgos()
    {
        
        // print_r($row);
        $this->view->render('defaul/riesgos');
    }

    function objetivos()
    {
        
        // print_r($row);
        $this->view->render('objetivo/objetivos');
    }

    function mision()
    {
        
        // print_r($row);
        $this->view->render('mision/mision');
    }
    
}
