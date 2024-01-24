<?php

// $ruta = Ruta::ctrRuta();

$ruta = "http://localhost/webPHP/vistas/";

$grupos =Controladorwsp::ctrGrupos();

$categoriass =gategorias::ctrCategorias();

$anuncios =ctrAnuncios::ctrAnuncioss();


// var_dump($anuncios);


?>

<!DOCTYPE html>
<html lang="zxx">

<body class="dark-scheme de-grey">
    <div id="wrapper">
       

    <?php include "../modulos/cabecera.php"?>

      
    <?php  include "../modulos/inicio.php"?>
    
        <a href="#" id="back-to-top"></a>

    <?php include "../modulos/footer.php" ?>
  
    </div>


</body>
</html>