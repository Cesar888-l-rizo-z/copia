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
        $this->view->list = $row;
        $this->view->render('peti/index');
    }

    function list()
    {
        $row = $this->model->list();
        $this->view->list = $row;
        $this->view->render('peti/list');
    }

    function list_proyect()
    {
        $row = $this->model->list();
        $this->view->list = $row;
        $this->view->render('peti/list_proyect');
    }

    function agregar()
    {
        $this->view->estados = $this->model->listStatus();
        $this->view->procesos = $this->model->listproce();
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
        if ($this->model->delete($id)) {
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

    function Registrarse()
    {
        $this->view->render('login/Registrarse');
    }

    function riesgos()
    {
        $this->view->render('defaul/riesgos');
    }

    function agregar_brecha()
    {
        $this->view->render('brechas/agregar_brecha');
    }

    function crear1()
    {

        $txtNombre = $_POST['txtNombre'];
        $txtRuptura = $_POST['txtRuptura'];
        $txtstrategy1 = $_POST['txtstrategy1'];
        $txtstrategy2 = $_POST['txtstrategy2'];
        $txtstrategy3 = $_POST['txtstrategy3'];
        $txtstrategy4 = $_POST['txtstrategy4'];
        $txtstrategy5 = $_POST['txtstrategy5'];

        if ($this->model->create1(
            $data = [
                'nombre_ruptura'        => $txtNombre,
                'ruptura'               => $txtRuptura,
                'strategy1'                => $txtstrategy1,
                'strategy2'               => $txtstrategy2,
                'strategy3'                 => $txtstrategy3,
                'strategy4'                 => $txtstrategy4,
                'strategy5'                 => $txtstrategy5
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
            $this->view->render('brechas/agregar_brecha');
        }
    }

    function list_brech()
    {
        $row = $this->model->vist();
        // print_r($row);
        $this->view->vist = $row;
        $this->view->render('brechas/list_brech');
    }

    function vista()
    {
        $row = $this->model->vist();
        // print_r($row);
        $this->view->vist = $row;
        $this->view->render('brechas/vista');
    }
    
    function select1($param = null)
    {
        $idbrechasTI = $param[0];       
        //  print_r($idbrechasTI);
        $this->view->seleccionar = $this->model->select1($idbrechasTI);
        $this->view->render('brechas/update_brechas');
        
    }

    function update_brechas()
    {

        $idbrechasTI = $_POST['txtID'];
        $txtNombre = $_POST['txtNombre'];
        $txtRuptura = $_POST['txtRuptura'];
        $txtstrategy1 = $_POST['txtstrategy1'];
        $txtstrategy2 = $_POST['txtstrategy2'];
        $txtstrategy3 = $_POST['txtstrategy3'];
        $txtstrategy4 = $_POST['txtstrategy4'];
        $txtstrategy5 = $_POST['txtstrategy5'];

        if ($this->model->modificar1(
            $data = [
                'ID'                    => $idbrechasTI,   
                'nombre_ruptura'        => $txtNombre,
                'ruptura'               => $txtRuptura,
                'strategy1'                => $txtstrategy1,
                'strategy2'                => $txtstrategy2,
                'strategy3'                => $txtstrategy3,
                'strategy4'                => $txtstrategy4,
                'strategy5'                => $txtstrategy5
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
            $this->view->render('brechas/agregar_brecha');
        }
    }

    function delete1($param = null)
    {
        $idbrechasTI = $param[0];       
        // print_r($idbrechasTI);
        if ( $this->model->delete1($idbrechasTI)) {
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

    function agregar_context()
    {
        $this->view->render('strategic_context/agregar_context');
    }

    function crearcontexto()
    {

        $txtNombre = $_POST['txtNombre'];
        $txtOportunidad = $_POST['txtOportunidad'];
        $txtNo1 = $_POST['txtNo1'];
        $txtNo2 = $_POST['txtNo2'];
        $txtNo3 = $_POST['txtNo3'];
        $txtNo4 = $_POST['txtNo4'];
        $txtNo5 = $_POST['txtNo5'];
        $txtNo6 = $_POST['txtNo6'];
        $txtNo7 = $_POST['txtNo7'];
        $txtNo8 = $_POST['txtNo8'];
        $txtNo9 = $_POST['txtNo9'];
        $txtNo10 = $_POST['txtNo10'];
        $txtNo11 = $_POST['txtNo11'];
        $txtNo12 = $_POST['txtNo12'];
        $txtNo13 = $_POST['txtNo13'];
        $txtNo14 = $_POST['txtNo14'];
        $txtNo15 = $_POST['txtNo15'];

        if ($this->model->createcontexto(
            $data = [
                'nombre_context'        => $txtNombre,
                'descripcion'               => $txtOportunidad,
                'No1'                => $txtNo1,
                'No2'                => $txtNo2,
                'No3'                => $txtNo3,
                'No4'                => $txtNo4,
                'No5'                => $txtNo5,
                'No6'                => $txtNo6,
                'No7'                => $txtNo7,
                'No8'                => $txtNo8,
                'No9'                => $txtNo9,
                'No10'                => $txtNo10,
                'No11'                => $txtNo11,
                'No12'                => $txtNo12,
                'No13'                => $txtNo13,
                'No14'                => $txtNo14,
                'No15'                => $txtNo15
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
            $this->view->render('strategic_context/agregar_context');
        }
    }

    function list_context()
    {
        $row = $this->model->vistlist_context();
        // print_r($row);
        $this->view->vistlist_context = $row;
        $this->view->render('strategic_context/list_context');
    }

    function strategic_context()
    {
        $row = $this->model->vistlist_context();
        // print_r($row);
        $this->view->vistlist_context = $row;
        $this->view->render('strategic_context/strategic_context');
    }

    function select_context($param = null)
    {
        $idstrategic_context = $param[0];        
        //  print_r($idstrategic_context);
        $this->view->seleccionar = $this->model->select_context($idstrategic_context);
        $this->view->render('strategic_context/update_context');
        
    }

    function update_context()
    {

        $idstrategic_context = $_POST['txtID'];
        $txtNombre = $_POST['txtNombre'];
        $txtOportunidad = $_POST['txtOportunidad'];
        $txtNo1 = $_POST['txtNo1'];
        $txtNo2 = $_POST['txtNo2'];
        $txtNo3 = $_POST['txtNo3'];
        $txtNo4 = $_POST['txtNo4'];
        $txtNo5 = $_POST['txtNo5'];
        $txtNo6 = $_POST['txtNo6'];
        $txtNo7 = $_POST['txtNo7'];
        $txtNo8 = $_POST['txtNo8'];
        $txtNo9 = $_POST['txtNo9'];
        $txtNo10 = $_POST['txtNo10'];
        $txtNo11 = $_POST['txtNo11'];
        $txtNo12 = $_POST['txtNo12'];
        $txtNo13 = $_POST['txtNo13'];
        $txtNo14 = $_POST['txtNo14'];
        $txtNo15 = $_POST['txtNo15'];

        if ($this->model->modificar_context(
            $data = [
                'ID'                    => $idstrategic_context,   
                'nombre_context'        => $txtNombre,
                'descripcion'               => $txtOportunidad,
                'No1'                => $txtNo1,
                'No2'                => $txtNo2,
                'No3'                => $txtNo3,
                'No4'                => $txtNo4,
                'No5'                => $txtNo5,
                'No6'                => $txtNo6,
                'No7'                => $txtNo7,
                'No8'                => $txtNo8,
                'No9'                => $txtNo9,
                'No10'                => $txtNo10,
                'No11'                => $txtNo11,
                'No12'                => $txtNo12,
                'No13'                => $txtNo13,
                'No14'                => $txtNo14,
                'No15'                => $txtNo15
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
            $this->view->render('strategic_context/agregar_context');
        }
    }

    function delete_context($param = null)
    {
        $idstrategic_context = $param[0];        
        // print_r($idstrategic_context);
        if ( $this->model->delete_context($idstrategic_context)) {
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

    function agregar_marco()
    {
        $this->view->render('marco/agregar_marco');
    }

    function crearmarco()
    {

        $txtNombre = $_POST['txtNombre'];
        $txtResumen = $_POST['txtResumen'];
        $txtLink = $_POST['txtLink'];
        $txtObservacion = $_POST['txtObservacion'];
        if ($this->model->createmarco(
            $data = [
                'norma_ley'        => $txtNombre,
                'resumen'               => $txtResumen,
                'link'                => $txtLink,
                'observacion'                => $txtObservacion
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
            $this->view->render('marco/agregar_marco');
        }
    }

    function list_marco()
    {
        $row = $this->model->vistmarco();
        // print_r($row);
        $this->view->vistmarco = $row;
        $this->view->render('marco/list_marco');
    }

    function marc_norma()
    {
        $row = $this->model->vistmarco();
        // print_r($row);
        $this->view->vistmarco = $row;
        $this->view->render('marco/marc_norma');
    }

    function select_marco($param = null)
    {
        $idframework = $param[0];       
        //  print_r($idframework);
        $this->view->seleccionar = $this->model->select_marco($idframework);
        $this->view->render('marco/update_marco');
        
    }

    function update_marco()
    {

        $idframework = $_POST['txtID'];
        $txtNombre = $_POST['txtNombre'];
        $txtResumen = $_POST['txtResumen'];
        $txtLink = $_POST['txtLink'];
        $txtObservacion = $_POST['txtObservacion'];

        if ($this->model->modificar_marco(
            $data = [
                'ID'                    => $idframework,   
                'norma_ley'        => $txtNombre,
                'resumen'               => $txtResumen,
                'link'                => $txtLink,
                'observacion'                => $txtObservacion
                
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
            $this->view->render('marco/agregar_marco');
        }
    }

    function delete_marco($param = null)
    {
        $idframework = $param[0];       
        // print_r($idframework);
        if ( $this->model->delete_marco($idframework)) {
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

    function add_target()
    {
        $this->view->render('objetivo/add_target');
    }

    function crear_target()
    {

        $txtNombre = $_POST['txtNombre'];
        $txtObject = $_POST['txtObject'];
        $txtObject2 = $_POST['txtObject2'];
        $txtObject3 = $_POST['txtObject3'];
        $txtObject4 = $_POST['txtObject4'];
        $txtObject5 = $_POST['txtObject5'];
        $txtObject6 = $_POST['txtObject6'];
        $txtObject7 = $_POST['txtObject7'];
        $txtObject8 = $_POST['txtObject8'];
        $txtObject9 = $_POST['txtObject9'];
        $txtObject10 = $_POST['txtObject10'];
        if ($this->model->create_target(
            $data = [
                'nombre_objectives'                     => $txtNombre,
                'description_objectives'               => $txtObject,
                'description_objectives2'               => $txtObject2,
                'description_objectives3'               => $txtObject3,
                'description_objectives4'               => $txtObject4,
                'description_objectives5'               => $txtObject5,
                'description_objectives6'               => $txtObject6,
                'description_objectives7'               => $txtObject7,
                'description_objectives8'               => $txtObject8,
                'description_objectives9'               => $txtObject9,
                'description_objectives10'               => $txtObject10

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
            $this->view->render('objetivo/add_target');
        }
    }

    function list_target()
    {
        $row = $this->model->visttarget();
        // print_r($row);
        $this->view->visttarget = $row;
        $this->view->render('objetivo/list_target');
    }

    function objetivos()
    {
        $row = $this->model->visttarget();
        // print_r($row);
        $this->view->visttarget = $row;
        $this->view->render('objetivo/objetivos');
    }

    function select_target($param = null)
    {
        $idobjectives = $param[0];      
        //  print_r($idobjectives);
        $this->view->seleccionar = $this->model->select_target($idobjectives);
        $this->view->render('objetivo/update_target');
        
    }

    function update_target()
    {

        $idobjectives = $_POST['txtID'];
        $txtNombre = $_POST['txtNombre'];
        $txtObject = $_POST['txtObject'];
        $txtObject2 = $_POST['txtObject2'];
        $txtObject3 = $_POST['txtObject3'];
        $txtObject4 = $_POST['txtObject4'];
        $txtObject5 = $_POST['txtObject5'];
        $txtObject6 = $_POST['txtObject6'];
        $txtObject7 = $_POST['txtObject7'];
        $txtObject8 = $_POST['txtObject8'];
        $txtObject9 = $_POST['txtObject9'];
        $txtObject10 = $_POST['txtObject10'];

        if ($this->model->modificar_target(
            $data = [
                'ID'                    => $idobjectives,   
                'nombre_objectives'        => $txtNombre,
                'description_objectives'               => $txtObject,
                'description_objectives2'               => $txtObject2,
                'description_objectives3'               => $txtObject3,
                'description_objectives4'               => $txtObject4,
                'description_objectives5'               => $txtObject5,
                'description_objectives6'               => $txtObject6,
                'description_objectives7'               => $txtObject7,
                'description_objectives8'               => $txtObject8,
                'description_objectives9'               => $txtObject9,
                'description_objectives10'               => $txtObject10
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
            $this->view->render('objetivo/add_target');
        }
    }

    function delete_target($param = null)
    {
        $idobjectives = $param[0];
        // print_r($idobjectives);
        if ( $this->model->delete_target($idobjectives)) {
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

    function add_Mission_vision()
    {
        $this->view->render('mision/add_Mission_vision');
    }

    function crear_Mission_vision()
    {

        $txtNombre = $_POST['txtNombre'];
        $txtMission_vision = $_POST['txtMission_vision'];
        if ($this->model->create_Mission_vision(
            $data = [
                'nombren_Mission_vision'        => $txtNombre,
                'description_Mission_vision'               => $txtMission_vision
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
            $this->view->render('mision/add_Mission_vision');
        }
    }

    function list_Mission_vision()
    {
        $row = $this->model->vistMission_vision();
        // print_r($row);
        $this->view->vistMission_vision = $row;
        $this->view->render('mision/list_Mission_vision');
    }

    function Mission_vision()
    {

        $row = $this->model->vistMission_vision();
        // print_r($row);
        $this->view->vistMission_vision = $row;
        $this->view->render('mision/Mission_vision');
    }

    function select_Mission_vision($param = null)
    {
        $idMission_vision = $param[0];      
        //  print_r($idMission_vision);
        $this->view->seleccionar = $this->model->select_Mission_vision($idMission_vision);
        $this->view->render('mision/update_Mission_vision');
        
    }

    function update_Mission_vision()
    {

        $idMission_vision = $_POST['txtID'];
        $txtNombre = $_POST['txtNombre'];
        $txtMission_vision = $_POST['txtMission_vision'];

        if ($this->model->modificar_Mission_vision(
            $data = [
                'ID'                    => $idMission_vision,   
                'nombren_Mission_vision'        => $txtNombre,
                'description_Mission_vision'               => $txtMission_vision
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
            $this->view->render('mision/add_Mission_vision');
        }
    }

    function delete_Mission_vision($param = null)
    {
        $idMission_vision = $param[0];
        // print_r($idMission_vision);
        if ( $this->model->delete_Mission_vision($idMission_vision)) {
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

    function AddIdeal_situation()
    {
        $this->view->render('situation/AddIdeal_situation');
    }

    function crear_situation()
    {

        $txtindicador = $_POST['txtindicador'];
        $txtobject = $_POST['txtobject'];
        $txtvalueini = $_POST['txtvalueini'];
        $txtFecha_initial = $_POST['txtFecha_initial'];
        $txtFecha_value = $_POST['txtFecha_value'];
        $txtdescription = $_POST['txtdescription'];
        $txtobservation = $_POST['txtobservation'];
        
        if ($this->model->create_situation(
            $data = [
                'indicator'                     => $txtindicador,
                'value_target'               => $txtobject,
                'value_initial'               => $txtvalueini,
                'initial_value_date'               => $txtFecha_initial,
                'target_value_date'               => $txtFecha_value,
                'descript'               => $txtdescription,
                'observation'               => $txtobservation

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
            $this->view->render('situation/AddIdeal_situation');
        }
    }

    function list_Ideal_situation()
    {
        $row = $this->model->vistsituation();
        // print_r($row);
        $this->view->vistsituation = $row;
        $this->view->render('situation/list_Ideal_situation');
    }

    function Ideal_situation()
    {
        $row = $this->model->vistsituation();
        // print_r($row);
        $this->view->vistsituation = $row;
        $this->view->render('situation/Ideal_situation');
    }

    function select_situation($param = null)
    {
        $id_Ideal_situation = $param[0];      
        //  print_r($id_Ideal_situation);
        $this->view->seleccionar = $this->model->select_situation($id_Ideal_situation);
        $this->view->render('situation/update_Ideal_situation');
        
    }

    function update_Ideal_situation()
    {

        $id_Ideal_situation = $_POST['txtID'];
        $txtindicador = $_POST['txtindicador'];
        $txtobject = $_POST['txtobject'];
        $txtvalueini = $_POST['txtvalueini'];
        $txtFecha_initial = $_POST['txtFecha_initial'];
        $txtFecha_value = $_POST['txtFecha_value'];
        $txtdescription = $_POST['txtdescription'];
        $txtobservation = $_POST['txtobservation'];
        

        if ($this->model->modificar_situation(
            $data = [
                'ID'                    => $id_Ideal_situation,   
                'indicator'        => $txtindicador,
                'value_target'               => $txtobject,
                'value_initial'               => $txtvalueini,
                'initial_value_date'               => $txtFecha_initial,
                'target_value_date'               => $txtFecha_value,
                'descript'               => $txtdescription,
                'observation'               => $txtobservation
                
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
            $this->view->render('situation/AddIdeal_situation');
        }
    }

    function delete_situation($param = null)
    {
        $id_Ideal_situation = $param[0];
        // print_r($id_Ideal_situation);
        if ( $this->model->delete_situation($id_Ideal_situation)) {
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

}
