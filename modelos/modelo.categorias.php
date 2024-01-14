<?php 

require_once "conexion.php";


class categorias{


static public function getCategorias($tabla){


        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt ->execute();
        $result =  $stmt ->fetchAll();
        $stmt = null;
        return $result;


}


}




?>