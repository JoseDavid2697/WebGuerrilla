<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemController
 *
 * @author Jose David
 */
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

    public function cargarVistaMyProfile(){
        
        $this->view->show('myprofile.php',null);
    }

    public function cargarVistaRanking(){
        
        $this->view->show('ranking.php',null);
    }

    public function cargarVistaResult(){
        
        $this->view->show('result.php',null);
    }

    public function cerrarSesion(){
        $this->view->show('indexview.php',null);
        
    }

}//fin de clase
