<?php 

require_once "conexion.php";


class mdlcategorias{


static public function getCategorias($tabla){


   $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt ->execute();

        return $stmt ->fetchAll();

        $stmt -> close();

        $stmt = null;


}


}




?>