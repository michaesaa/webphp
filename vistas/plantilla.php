<?php

// $ruta = Ruta::ctrRuta();

$ruta = "http://localhost/webPHP/vistas/";

$grupos =Controladorwsp::ctrGrupos();

$categoriass =gategorias::ctrCategorias();


// var_dump($categoriass);


?>

<!DOCTYPE html>
<html lang="zxx">


<head>
    <title>grupos de wsp y mas </title>
    <link rel="icon" href="<?php echo $ruta; ?>images/icon-red.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Gigaland - NFT Marketplace Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="<?php echo $ruta; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="<?php echo $ruta; ?>css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="<?php echo $ruta; ?>css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $ruta; ?>css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $ruta; ?>css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $ruta; ?>css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $ruta; ?>css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $ruta; ?>css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $ruta; ?>css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $ruta; ?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $ruta; ?>css/de-grey.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-04.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body class="dark-scheme de-grey">
    <div id="wrapper">
        <!-- header begin -->
    <?php include "../modulos/cabecera.php"?>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-hero" class="no-bottom" aria-label="section">
                <div class="d-carousel">
  
                <?php include "../modulos/categorias.php"; ?>

                    <div class="d-arrow-left"><i class="fa fa-angle-left"></i></div>
                    <div class="d-arrow-right"><i class="fa fa-angle-right"></i></div>
                </div>
            </section>

            <section id="section-collections" class="pt30 pb30">
                <div class="container">

                    <div class="spacer-single"></div>

                    <div class="row wow fadeIn">
                        <div class="col-lg-12">
                            <h2 class="style-2">Nuevos Grupos</h2>
                        </div>

                        <?php 

                        foreach($grupos as $key => $value){

                            echo '<div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="nft__item style-2">
                                
                                <div class="nft__item_wrap">

                                    <a href="03_grey-item-details.html">
                                        <img src="'.$value["wsp_foto"].'"
                                        class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>

                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.html">
                                        <h4>'.$value["wsp_nom"].'</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        
                                    </div>

                                    <div class="nft__item_price">
                                    "'.$value["wsp_descrip"].'"
                                    </div>


                                    <div class="menu_side_area">
                                    <a href=""
                                    class="btn btn-success btn-lg">
                                    <span><i class="fa fa-whatsapp" aria-hidden="true"></i> unirse al grupo</span></a>
                                   <span id="menu-btn"></span>
                                   </div>
                                   
                            </div>
                        </div>
                    </div>';

                        }

                        ?>

                    <div class="spacer-single"></div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="style-2">Grupos Recien Agragados</h2>
                        </div>
                        <div id="collection-carousel-alt" class="owl-carousel wow fadeIn">


                        <?php 
                            foreach($grupos as $key => $value){

                                echo'  <div class="nft_coll style-2">
                                <div class="nft_wrap">
                                    <a href="03_grey-collection.html"><img 
                                    src="'.$value["wsp_foto"].'"
                                     class="lazy img-fluid" alt=""></a>
                                </div>
                           
                                <div class="nft_coll_info">
                                    <a href="03_grey-collection.html">
                                        <h4>'.$value["wsp_nom"].'</h4>
                                    </a>
                                    <span>'.$value["wsp_descrip"].'</span>
                                </div>
                                
                                 
                                    <div class="menu_side_area">
                                    <a href=""
                                    class="btn btn-success btn-lg">
                                    <span><i class="fa fa-whatsapp" aria-hidden="true"></i> unirse al grupo</span></a>
                                   <span id="menu-btn"></span>
                                   </div>
                                   

                         


                            </div>';
                            }
                        ?>
                          


                        </div>
                    </div>

                    <div class="spacer-double"></div>

               
                </div>
            </section>

        

        </div>
    

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
     <?php include "../modulos/footer.php" ?>
        <!-- footer close -->

    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="<?php echo $ruta; ?>js/jquery.min.js"></script>
    <script src="<?php echo $ruta; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $ruta; ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $ruta; ?>js/wow.min.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.isotope.min.js"></script>
    <script src="<?php echo $ruta; ?>js/easing.js"></script>
    <script src="<?php echo $ruta; ?>js/owl.carousel.js"></script>
    <script src="<?php echo $ruta; ?>js/validation.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $ruta; ?>js/enquire.min.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.plugin.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.countTo.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.countdown.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.lazy.min.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.lazy.plugins.min.js"></script>
    <script src="<?php echo $ruta; ?>js/designesia.js"></script>


</body>
</html>