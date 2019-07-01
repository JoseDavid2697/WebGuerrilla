
<?php

class ApiModel
{
    protected $db;

    public function __construct()
    {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton(); //devuelve la instancia de base de datos

    }

    public function inspectGuerrilla($usuario)
    {
        //aque se conecta con el Api, y se envia el correo registrado para saber 
        //cual es su guerrilla y los recuersos que tiene que buscar

        $data = file_get_contents("data/inspectGuerrilla.json");
        $guerrrilla = json_decode($data, true);
    
        return $guerrrilla;
    }

    public function ranking()
    {
        //aque se conecta con el Api, y se envia el correo registrado para saber 
        //cual es su guerrilla y los recuersos que tiene que buscar

        $data = file_get_contents("data/ranking.json");
        $listasGuerrillas = json_decode($data, true);
    
        return $listasGuerrillas;
    }
}//fin de clase
