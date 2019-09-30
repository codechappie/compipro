<?php

    require_once "backend/productos.php";

    $imagenes=ListaImagenProductos();
    $fondo = bgDinamic();

    $id=$_GET["id"];
    $titulo=$_GET["titulo"];
    $background="";
    if($fondo[$id]["cat"]==$id){
        $background = $fondo[$id]["url"];
    }else{
        $background = "images/bg-image/hero-bg29.jpg";
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <!-- title -->
    <title>Compipro</title>
    <meta name="description" content="compipro" />
    <meta name="keywords" content="compipro" />
    <meta name="author" content="compina">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/icon/favicon.ico">
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- themify-icons -->
    <link rel="stylesheet" href="css/themify-icons.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- base -->
    <link rel="stylesheet" href="css/base.css" />
    <!-- elements -->
    <link rel="stylesheet" href="css/elements.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!--Estilos-->
    <link rel="stylesheet" href="css/main.css">
    <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
    <!--[if IE]>
            <script src="js/html5shiv.min.js"></script>
        <![endif]-->
</head>

<body>


    <div id="page" class="page">

        <header>
            <nav>
                <div class="logo">
                    <img src="images/logo-white.png" alt="">
                </div>
                <div class="fila-uno">
                    <div class="telefono">
                        <div>Telf: 734 8423</div>
                    </div>
                    <div class="redes social-icon">
                        <a href="https://www.facebook.com/COMPIPRO/" target="_blank">
                            <i class="fa fa-facebook text-white tz-icon-color" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/compipro/" target="_blank">
                            <i class="fa fa-instagram text-white tz-icon-color" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-whatsapp text-white tz-icon-color" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="cotizar">
                    <button id="btn-cotizar">COTIZAR</button>
                </div>
            </nav>
        </header>
        <section class="position-relative padding-40px-tb offer
                cover-background tz-builder-bg-image border-none
                xs-padding-60px-tb" id="callto-action8" data-img-size="(W)1920px
                X (H)643px" style="background:linear-gradient(rgba(0,0,0,0.01),
                rgba(0,0,0,0.01)), url('<?= $background ?>')">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center
                            center-col">
                        <div class="offer-box-left">
                            <span class="title-extra-large-2
                                    xs-title-extra-large text-dark-gray
                                    display-block font-weight-300
                                    margin-three-bottom tz-text
                                    xs-margin-thirteen-bottom"><?= $titulo ?></span>
                            <div class="compipro-message text-large xs-margin-three-bottom
                                    margin-five-bottom tz-text width-50
                                    center-col sm-width-80
                                    xs-margin-thirteen-bottom">
                                <p>COMPIPRO ofrece una amplia variedad de artículos promocionales (Merchandising).

                                </p>
                            </div>
                            <a class="btn-catalogo btn-large btn-circle btn
                                    border-2-fast-blue btn-border
                                    text-fast-blue" href="#blog-section5"><span class="tz-text">Nuestro Catálogo
                                    Virtual</span><i class="fa fa-book
                                        icon-extra-small tz-icon-color"></i></a>
                            <a class="btn-cotizacion btn-large btn-circle btn
                                    border-2-fast-blue btn-border
                                    text-fast-blue" href="#blog-section5"><span class="tz-text">Solicita una
                                    cotización</span><i class="fa fa-calculator
                                        icon-extra-small tz-icon-color"></i></a>
                            <a class="btn-whatsapp btn-large btn-circle btn
                                    border-2-fast-blue btn-border
                                    text-fast-blue" href="#blog-section5"><span class="tz-text">Comunicarse por
                                    WhatsApp</span><i class="fa fa-whatsapp
                                        icon-extra-small tz-icon-color"></i></a>
                        </div>
                    </div>
                    <!-- end section title -->
                </div>
            </div>
        </section>
        <section class="productos-section" id="productos-section">
            <h3 style="text-align: center; margin-bottom: 40px;"></h3>
            <div class="container-products">
                <?php  foreach($imagenes as $key=>$val) : ?>
                <?php if($val["category"] == $id): ?>
                <!--INICIO CARD-->
                <div class="card">
                    <a href="#">
                        <div class="image">
                            <img src="<?= $val["url"] ?>" alt="">
                        </div>
                        <div class="info">
                            <div class="title">
                                <h3><?= $val["title"] ?></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <!--FIN CARD-->
                <?php endif; ?>
                <?php  endforeach; ?>
            </div>
        </section>

        <footer id="footer-section13" class="bg-dark-blue padding-60px-tb xs-padding-40px-tb builder-bg">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-3 col-sm-12 col-xs-12 sm-text-center sm-margin-five-bottom">
                        <a href="#home" class="inner-link"><img src="images/logo-white.png"
                                data-img-size="(W)163px X (H)40px" alt=""></a>
                    </div>
                    <!-- end logo -->
                    <!-- caption -->
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center sm-margin-five-bottom">
                        <div class="tz-text text-white text-medium sm-margin-two-bottom">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laudantium architecto
                                maiores deserunt suscipit perferendis repellat.</p>
                        </div>
                    </div>
                    <!-- end caption -->
                    <!-- social elements -->
                    <div class="col-md-3 col-sm-12 col-xs-12 text-right sm-text-center social-icon">
                        <a href="https://www.facebook.com/compipro/" target="_blank">
                            <i class="fa fa-facebook text-white tz-icon-color" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/compipro/" target="_blank">
                            <i class="fa fa-instagram text-white tz-icon-color" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-whatsapp text-white tz-icon-color" aria-hidden="true"></i>
                        </a>
                    </div>
                    <!-- end social elements -->
                    <div class="col-md-12 col-sm-12 col-xs-12 display-table margin-six-top">
                        <div
                            class="display-table-cell-vertical-middle text-center border-top-light padding-six-top tz-border">
                            <span class="text-extra-small tz-text text-blue-gray">Copyright © 2019 <a
                                    class="text-blue-gray" href="http://www.compipro.com/">Compipro.</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#page -->


    <!-- javascript libraries -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/smooth-scroll.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <!-- owl carousel -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <!-- images loaded -->
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <!-- magnific popup -->
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <!-- navigation -->
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <!-- equalize -->
    <script type="text/javascript" src="js/equalize.min.js"></script>
    <!-- fit videos -->
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <!-- number counter -->
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <!-- time counter  -->
    <script type="text/javascript" src="js/counter.js"></script>
    <!-- twitter Fetcher  -->
    <script type="text/javascript" src="js/twitterFetcher_min.js"></script>
    <!-- main -->
    <script type="text/javascript" src="js/main.js"></script>


</body>

</html>