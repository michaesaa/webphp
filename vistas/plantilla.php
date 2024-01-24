<?php

// $ruta = Ruta::ctrRuta();

$ruta = "http://localhost/webPHP/vistas/";

$grupos =Controladorwsp::ctrGrupos();

$categoriass =gategorias::ctrCategorias();

$anuncios =ctrAnuncios::ctrAnuncioss();


// var_dump($anuncios);

$url = explode("/", $_GET["ruta"]);
var_dump($url);


?>

<!DOCTYPE html>
<html lang="zxx">

<body class="dark-scheme de-grey">
    <div id="wrapper">
       

    <?php include "../modulos/cabecera.php"?>


    <?php
    
    $url=array();
    
    if(isset($_GET["ruta"])){

        $url = explode("/", $_GET["ruta"]);

        if($ruta[0] == "inicio"){

            include "modulos/". $url[0].".php";


        }if($url[0] == "gamer" || $url[0] == "stickers" || $url[0] == "dinero"){

            
            include "../modulos/categorias.php";

        }


    }else{
        include "../modulos/inicio.php";
    }

    
    ?>
      
    <?php  include "../modulos/inicio.php"?>
    
        <a href="#" id="back-to-top"></a>

    <?php include "../modulos/footer.php" ?>
  
    </div>


</body>
</html>