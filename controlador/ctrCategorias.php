<?php 

class gategorias{

    static public function ctrCategorias(){

        $tabla="categorias";

        $respuesta = categorias::getCategorias($tabla);

        return $respuesta;

    }

}

?>