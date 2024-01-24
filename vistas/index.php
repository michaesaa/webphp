<?php 

require "../controlador/ctrPlantilla.php";
require "../controlador/ctrRuta.php";
require "../controlador/ctrgruposwsp.php";
require "../controlador/ctrCategorias.php";
require "../controlador/ctrAnuncios.php";

require "../modelos/modelo.grupos.php";
require "../modelos/modelo.categorias.php";
require "../modelos/modelo.anuncios.php";


$plantilla = new Plantilla();

$plantilla ->ctrPlantilla();


?>