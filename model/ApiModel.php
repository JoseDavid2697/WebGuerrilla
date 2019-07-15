
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

    //Solicita el raking de guerrillas
    public function ranking()
    {

        $opts = array(
            'http' =>
            array(
                'method'  => 'GET',
                'header'  => 'Content-Type: application/x-www-form-urlencoded'
            )
        );
        $context  = stream_context_create($opts);
        $result = file_get_contents('http://localhost:50158/api/values/ranking', false, $context);
        $listguerrrillas = json_decode($result, true);
    
        return $listguerrrillas;
    }

    //crea una nueva cuenta con el correo y faccion deseados
    public function createGuerrilla($data){
        $postdata = http_build_query(
            array(
                'email' => $data['email'],
                'faction' => $data['faction']
            )
        );



        $opts = array(
            'http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        $context  = stream_context_create($opts);
        $result = file_get_contents('http://localhost:50158/api/values/createGuerrilla', false, $context);
        $guerrrilla = json_decode($result, true);
    
        return $guerrrilla;
    }
}//fin de clase
