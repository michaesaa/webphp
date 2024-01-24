<?php

require_once "conexion.php";

class mdlAnuncios{


static public function mdlAnuncioss1($tabla){


        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt ->execute();
        $result =  $stmt ->fetchAll();
        $stmt = null;
        return $result;


}


}




?>