<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemModel
 *
 * @author Jose David
 */
class ItemModel {
    protected $db;
    
    public function __construct(){
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();//devuelve la instancia de base de datos
        
    }//constructor
    
    /*METODOS NECESARIOS PARA MANIPULAR LOS OBJETOS*/
    
    public function listar(){
        $consulta = $this->db->prepare('call sp_listar()');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        //cerrar cursor para evitar que la consulta quede abierta 
        $consulta->CloseCursor();
    
        return $resultado;
    }//listar
    
    public function registrar($codigo,$nombre){
        $consulta = $this->db->prepare('call sp_registrar("'.$codigo.'","'.$nombre.'")');
        $consulta->execute();
        //$resultado = $consulta->fetchAll();
        
        $consulta->CloseCursor();
    }

    public function buscarActualizar($codigo){
        $consulta = $this->db->prepare('call sp_buscar("'.$codigo.'")');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

    public function actualizar($codigo, $nombre){
        $consulta = $this->db->prepare("call sp_actualizar('".$codigo."','".$nombre."')");
        $consulta->execute();
        $consulta->CloseCursor();
    }
    
    
    
}//fin de clase
