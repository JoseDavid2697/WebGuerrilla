<?php

class GuerrillaController {
    public function __construct() {
        //si no existe en php se crea sola
        $this->view=new View();
    }//constructor

    public function cargarVistaPrincipal(){
        $this->view->show('indexview.php',null);
    }

    public function cargarVistaSettings(){
        $this->view->show('settings.php',null);
    }

    public function cargarVistaSignIn(){
        $this->view->show('signin.php',null);
    }

    public function cargarVistaMyProfile(){
        require_once 'model/ApiModel.php';
        $api = new ApiModel();
        session_start();
        $_SESSION['sesion'] = 'armandocalvo06@gmail.com';
        $this->view->show('myprofile.php',$api->inspectGuerrilla($_SESSION['sesion']));
    }

    public function cargarVistaRanking(){
        require_once 'model/ApiModel.php';
        $api = new ApiModel();



        $this->view->show('ranking.php',$api->ranking());
    }

    public function cargarVistaResult(){
        
        
        $this->view->show('result.php',$_GET['inf']);
    }

    public function createGuerrilla(){
        require_once 'model/ApiModel.php';
        $api = new ApiModel();
        $data['email']= $_POST['email'];
        $data['faction']= $_POST['faction'];

        $this->view->show('myprofile.php',$api->createGuerrilla($data));
    }

    public function cerrarSesion(){
        $this->view->show('indexview.php',null);
        
    }

}//fin de clase
