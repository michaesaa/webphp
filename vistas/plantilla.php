<?php

// $ruta = Ruta::ctrRuta();

$ruta = "http://localhost/webPHP/vistas/";

?>

<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from gigaland.io/03_grey-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Oct 2021 00:17:11 GMT -->

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

                        <!-- nft item begin -->
                       
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <!-- <a href="03_grey-author.html">
                                        <img class="lazy" src="images/author/author-10.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a> -->
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <!-- <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div> -->
                                    </div>
                                    <a href="03_grey-item-details.html">
                                        <img src="<?php echo $ruta; ?>images/items-alt/static-2.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="03_grey-item-details.html">
                                        <h4>Titulo del grupo</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        
                                    </div>
                                    <div class="nft__item_price">
                                        Descripcion del grupo 
                                    </div>

                                    <!-- <div class="nft__item_action">
                                        <a href="#">Place a bid</a>
                                    </div> -->
                                    <!-- <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>80</span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                       
                    </div>

                    <div class="spacer-single"></div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="style-2">Hot Collections</h2>
                        </div>
                        <div id="collection-carousel-alt" class="owl-carousel wow fadeIn">

                            <div class="nft_coll style-2">
                                <div class="nft_wrap">
                                    <a href="03_grey-collection.html"><img src="<?php echo $ruta; ?>images/collections/coll-6.jpg" class="lazy img-fluid" alt=""></a>
                                </div>
                                <div class="nft_coll_pp">
                                    <a href="03_grey-collection.html"><img class="lazy" src="<?php echo $ruta; ?>images/author/author-6.jpg" alt=""></a>
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="nft_coll_info">
                                    <a href="03_grey-collection.html">
                                        <h4>Papercut</h4>
                                    </a>
                                    <span>ERC-42</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="spacer-double"></div>

               
                </div>
            </section>

        

        </div>
        <!-- content close -->

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


<!-- Mirrored from gigaland.io/03_grey-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Oct 2021 00:17:29 GMT -->

</html>