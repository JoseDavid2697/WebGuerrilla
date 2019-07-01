
<?php

class ApiModel {
    protected $db;
    
    public function __construct(){
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();//devuelve la instancia de base de datos
        
    }

    
}//fin de clase
