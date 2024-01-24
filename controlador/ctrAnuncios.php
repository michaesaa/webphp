<?php 

class ctrAnuncios{

    static public function ctrAnuncioss(){

        $tabla="anuncios";

        $respuesta = mdlAnuncios::mdlAnuncioss1($tabla);

        return $respuesta;

    }

}

?>