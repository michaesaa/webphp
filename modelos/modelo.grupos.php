<?php 

require_once "conexion.php";

class whatsapp{

    static public function getGruposWsp($tabla){
      
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $stmt = null;
            return $result;
        }

    }




?>