
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
        //aqui se conecta con el Api, y se envia el correo registrado para saber 
        //cual es su guerrilla y los recuersos que tiene que buscar
        
        $postdata = http_build_query(
            array(
                'guerrillaName' => $usuario
            )
        );



        $opts = array(
            'http' =>
            array(
                'method'  => 'GET',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        $context  = stream_context_create($opts);
        $result = file_get_contents('http://localhost:50158/api/values/inspectGuerrilla/'.$usuario, false, $context);
        $guerrrilla = json_decode($result, true);
    
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
