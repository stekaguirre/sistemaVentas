

<!--                               INDEX PAGINAS WEB                                           -->


<!-- INCLUDE -->
  <?php
    include ("../../app/config.php");
    include ("../../layout/web/header.php");
    include ("../../layout/web/menus/principal.php");
    include ("../../layout/web/menus/lateral.php");
  ?>
<!-- ///INCLUDE -->

     
<!-- ///CONTENIDO DERECHO HEADER -->
            <div class="content-wrapper">
              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-12">
                      <center>
                        <h1 class="m-0" style="color: black;">Creacion de paginas web</h1>
                      </center>
                    </div>
                  </div>
                </div>
              </div>
<!-- ///CONTENIDO DERECHO HEADER -->


<!-- CONTENIDO DERECHO MAIN O BODY -->
  <div class="content">
    <div class="content-fluid">  
      <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <!-- meta character set -->
        <meta charset="utf-8">
        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/bootstrap.min.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/jquery.fancybox.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/owl.carousel.css">
        <!-- Animate -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/main.css">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/responsive.css">
        
        <!-- font icons -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/assets/vendors/themify-icons/css/themify-icons.css">

        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/assets/vendors/animate/animate.css">

        <!-- Bootstrap + FoodHut main styles -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/assets/css/foodhut.css">
        <!-- Modernizer Script for old Browsers -->
            <script src="<?php echo $URL;?>/paginas/web/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <style type="text/css">.fancybox-margin{margin-right:17px;}</style>
    </head>

    <body>

    <!--Home Slider -->
  <section id="home">     
    <div id="home-carousel" class="carousel slide" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#home-carousel" data-slide-to="1"></li>
        </ol>
        <!--/.carousel-indicators-->

        <div class="carousel-inner">

            <div class="item active" style="background-image: url(&quot;<?php echo $URL;?>/public/images/web/proyectos.PNG&quot;); height: 581px;">
                <div class="carousel-caption">
                    <div class="animated bounceInRight">
                        <h2>HOLA<br>Bienvenido.</h2>
                        <p>En esta pagina puedes ver entre muchas muestras como quieres tu pagina <br>
                          tambien la podemos crear desde cero.</p>
                    </div>
                </div>
            </div>              

            <div class="item" style="background-image: url(&quot;<?php echo $URL;?>/public/images/web/admin.PNG&quot;); height: 581px;">                
                <div class="carousel-caption">
                    <div class="animated bounceInDown">
                        <h2>Sistema<br>Administrativo.</h2>
                        <p>Puedes gestionar tu negocio de una marena eficaz.</p>
                    </div>
                </div>
            </div>

        </div>
        <!--/.carousel-inner-->
        <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
            <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
                <i class="fa fa-angle-left fa-3x"></i>
            </a>
            <a class="sl-next" href="#home-carousel" data-slide="next">
                <i class="fa fa-angle-right fa-3x"></i>
            </a>
        </nav>

    </div>
</section>
<!--
End #home Slider
========================== -->


<!--
#service
========================== -->
  <section id="service">
    <div class="container">
      <br>
      <br>
      <br>
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                    <h2>Servicios</h2>    
                    <p>Conoce nuestros servicios.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-sm-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="img/icons/monitor.png" class="media-object" alt="Monitor">
                    </a>
                    <div class="media-body">
                        <h3>Tu pagina web</h3>
                        <p>Tu negocio en linea donde todo mundo te pueda visitar.</p>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-12 wow fadeInRight animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="img/icons/cog.png" alt="Cog">
                    </a>
                    <div class="media-body">
                        <h3>Sistema administrativo</h3>
                        <p>Mira quien visita tu pagina , cual es el producto mas vendido , lista de usuarios , lista de proveedores</p>
                    </div>
                </div>
                
            </div>

            <div class="col-md-6 col-sm-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="img/icons/ruler.png" alt="Ruler">
                    </a>
                    <div class="media-body">
                        <h3>Tambien woorpress</h3>
                        <p>tambien trabajamos con paginas worpress.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="img/icons/camera.png" alt="Ruler">
                    </a>
                    <div class="media-body">
                        <h3>Publica lo que quieras</h3>
                        <p>Puedes tener todas tus fotos en un mismo lugar.</p>
                    </div>
                </div>
            </div>

        </div> <!-- end .row -->
    </div> <!-- end .container -->
</section>
<br>
<br>
<br>
<!--
End #service
========================== -->



<!--#Portfolio========================== -->

<section id="portfolio">

    <div class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <h2>Proyectos</h2>    
        <p>Conoce la pagina de tu negocio.</p>
    </div>
    
    <div id="projects" class="clearfix">
    <div class="gallary row">

    <!--          TIENDAS           -->

        <!--      1    TIENDA SUNGLA           -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1    450px         -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/sungla1.png" 
                    alt="imagenes/sungla1" class="gallary-img">
            <!--          IMAGEN 2     400        -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/sungla2.PNG" 
                    alt="" class="gallary-img">
            <!--          IMAGEN 3      400       -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/sungla3.PNG" 
                    alt="" class="gallary-img">
            <!--          A HREF             -->
                <a href="<?php echo $URL;?>/paginas/web/proyectos/tiendas/sungla" class="gallary-overlay">
                    <i class="gallary-icon ti-plus"></i>
                </a>
            </div>
        <!--     /// 1    TIENDA SUNGLA           -->

        <!--      2    TIENDA ZAY             -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1    450PX         -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/zay1.PNG" 
                        alt="imagenes/zay1" class="gallary-img">
            <!--          IMAGEN 2     370PX        -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/zay2.PNG" 
                        alt="" class="gallary-img">
            <!--          IMAGEN 3     430PX        -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/zay3.PNG" 
                        alt="" class="gallary-img">
            <!--          A HREF             -->
                    <a href="<?php echo $URL;?>/paginas/web/proyectos/tiendas/zay" class="gallary-overlay">
                        <i class="gallary-icon ti-plus"></i>
                    </a>
            </div>
        <!--     ///// 2    TIENDA ZAY             -->   

        <!--      1    TIENDA CATALOG           -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/catalog1.PNG" 
                    alt="imagenes/sungla1" class="gallary-img">
            <!--          IMAGEN 2             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/catalog2.PNG" 
                    alt="" class="gallary-img">
            <!--          IMAGEN 3             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/catalog3.PNG" 
                    alt="" class="gallary-img">
            <!--          A HREF             -->
                <a href="<?php echo $URL;?>/paginas/web/proyectos/tiendas/catalog" class="gallary-overlay">
                    <i class="gallary-icon ti-plus"></i>
                </a>
            </div>
    
        <!--     /// 1    TIENDA CATALOG           -->

        <!--      2    TIENDA PULLO             -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/pullo1.PNG" 
                    alt="proyectos/restaurantes/cafe1" class="gallary-img">
            <!--          IMAGEN 2             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/pullo2.PNG" 
                    alt="" class="gallary-img">
            <!--          IMAGEN 3             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/tienda/pullo3.PNG" 
                    alt="" class="gallary-img">
            <!--          A HREF             -->
                <a href="<?php echo $URL;?>/paginas/web/proyectos/tiendas/pullo" class="gallary-overlay">
                    <i class="gallary-icon ti-plus"></i>
                </a>
            </div>
        <!--     ///// 2    TIENDA PULLO             -->

    <!--  ////     TIENDAS           -->  
    
    <!--          RESTAURANTES           -->

        <!--      1    RESTAURANTE CAFE  KOPPEE           -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/koppee1.PNG" 
                    alt="imagenes/sungla1" class="gallary-img">
            <!--          IMAGEN 2             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/koppee2.PNG" 
                    alt="" class="gallary-img">
            <!--          IMAGEN 3             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/koppee3.PNG" 
                    alt="" class="gallary-img">
            <!--          A HREF             -->
                <a href="<?php echo $URL;?>/paginas/web/proyectos/restaurantes/koppee" class="gallary-overlay">
                    <i class="gallary-icon ti-plus"></i>
                </a>
            </div>
        <!--     /// 1    RESTAURANTE CAFE  KOPPEE           -->

        <!--      2    RESTAURANTE CHINO FOODHUT             -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1             -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/food1.PNG" 
                        alt="" class="gallary-img">
            <!--          IMAGEN 2             -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/food2.PNG" 
                        alt="" class="gallary-img">
            <!--          IMAGEN 3             -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/food3.PNG" 
                        alt="" class="gallary-img">
            <!--          A HREF             -->
                    <a href="<?php echo $URL;?>/paginas/web/proyectos/restaurantes/foodhut" class="gallary-overlay">
                        <i class="gallary-icon ti-plus"></i>
                    </a>
            </div>
        <!--     ///// 2    RESTAURANTE CHINO FOODHUT             -->   

        <!--      3    RESTAURANTE   KLASSY           -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/klassy1.PNG" 
                    alt="" class="gallary-img">
            <!--          IMAGEN 2             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/klassy2.PNG" 
                    alt="" class="gallary-img">
            <!--          IMAGEN 3             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/klassy3.PNG" 
                    alt="" class="gallary-img">
            <!--          A HREF             -->
                <a href="<?php echo $URL;?>/paginas/web/proyectos/restaurantes/klassy" class="gallary-overlay">
                    <i class="gallary-icon ti-plus"></i>
                </a>
            </div>
    
        <!--     /// 3    RESTAURANTE   KLASSY           -->
        
        <!--      4   RESTAURANTE ICE - CREAM             -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/ice-cream1.PNG" 
                    alt="proyectos/restaurantes/cafe1" class="gallary-img">
            <!--          IMAGEN 2             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/ice-cream2.PNG" 
                    alt="" class="gallary-img">
            <!--          IMAGEN 3             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/restaurantes/ice-cream3.PNG" 
                    alt="" class="gallary-img">
            <!--          A HREF             -->
                <a href="<?php echo $URL;?>/paginas/web/proyectos/restaurantes/ice-cream" class="gallary-overlay">
                    <i class="gallary-icon ti-plus"></i>
                </a>
            </div>
        <!--     ///// 4   RESTAURANTE ICE - CREAM             -->

    <!--  ////     RESTAURANTES           -->

    <!--          OTROS           -->

        <!--      1    OTROS PETOLOGY           -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/petology1.PNG" 
                    alt="imagenes/sungla1" class="gallary-img">
            <!--          IMAGEN 2             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/petology2.PNG" 
                    alt="" class="gallary-img">
            <!--          IMAGEN 3             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/petology3.PNG" 
                    alt="" class="gallary-img">
            <!--          A HREF             -->
                <a href="<?php echo $URL;?>/paginas/web/proyectos/otros/petology" class="gallary-overlay">
                    <i class="gallary-icon ti-plus"></i>
                </a>
            </div>
        <!--     /// 1    OTROS PETOLOGY           -->

        <!--      2    OTROS ULIYA             -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1             -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/uliya1.PNG" 
                        alt="imagenes/zay1" class="gallary-img">
            <!--          IMAGEN 2             -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/uliya2.PNG" 
                        alt="" class="gallary-img">
            <!--          IMAGEN 3             -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/uliya3.PNG" 
                        alt="" class="gallary-img">
            <!--          A HREF             -->
                    <a href="<?php echo $URL;?>/paginas/web/proyectos/otros/uliya" class="gallary-overlay">
                        <i class="gallary-icon ti-plus"></i>
                    </a>
            </div>
        <!--     ///// 2    OTROS ULIYA             -->   

        <!--      3    OTROS HERON           -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/heron1.PNG" 
                    alt="imagenes/sungla1" class="gallary-img">
            <!--          IMAGEN 2             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/heron2.PNG" 
                    alt="" class="gallary-img">
            <!--          IMAGEN 3             -->
                <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/heron3.PNG" 
                    alt="" class="gallary-img">
            <!--          A HREF             -->
                <a href="<?php echo $URL;?>/paginas/web/proyectos/otros/heron" class="gallary-overlay">
                    <i class="gallary-icon ti-plus"></i>
                </a>
            </div>
        <!--     /// 3    OTROS HERON           -->

        <!--      4   OTROS EVOLVE             -->
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <!--          IMAGEN 1             -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/evolve1.PNG" 
                        alt="imagenes/zay1" class="gallary-img">
            <!--          IMAGEN 2             -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/evolve2.PNG" 
                        alt="" class="gallary-img">
            <!--          IMAGEN 3             -->
                    <img src="<?php echo $URL;?>/public/images/web/proyectos/imagenes/otros/evolve3.PNG" 
                        alt="" class="gallary-img">
            <!--          A HREF             -->
                    <a href="<?php echo $URL;?>/paginas/web/proyectos/otros/evolve" class="gallary-overlay">
                        <i class="gallary-icon ti-plus"></i>
                    </a>
            </div>
        <!--     ///// 4    OTROS EVOLVE             -->

    <!--  ////     OTROS           --> 
    

    </div>
    </div> <!-- end #projects -->

</section>
<!--End #Portfolio========================== -->



<!--#footer
========================== -->
<footer id="footer" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-logo wow fadeInDown" style="visibility: hidden; animation-name: none;">
                    <img src="../../public/images/logotienda.png" alt="logo" width="150px" height="150px">
                </div>
                <div class="footer-social wow fadeInUp" style="visibility: hidden; animation-name: none;">
                    <h3>Nuestras redes</h3>
                    <ul class="text-center list-inline">
                        <li><a href="http://goo.gl/RqhEjP"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href="http://goo.gl/hUfpSB"><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li><a href="http://goo.gl/r4xzR4"><i class="fa fa-google-plus fa-lg"></i></a></li>
                        <li><a href="http://goo.gl/k9zAy5"><i class="fa fa-dribbble fa-lg"></i></a></li>
                    </ul>
                </div>
                <div class="copyright">    
                  <p>Gracias por tu visita</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--
End #footer
========================== -->


<!--
JavaScripts
========================== -->

<!-- main jQuery -->
<script src="<?php echo $URL;?>/paginas/web/js/vendor/jquery-1.11.1.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $URL;?>/paginas/web/js/bootstrap.min.js"></script>
<!-- jquery.nav -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery.nav.js"></script>
<!-- Portfolio Filtering -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery.mixitup.min.js"></script>
<!-- Fancybox -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery.fancybox.pack.js"></script>
<!-- Parallax sections -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery.parallax-1.1.3.js"></script>
<!-- jQuery Appear -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery.appear.js"></script>
<!-- countTo -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery-countTo.js"></script>
<!-- owl carousel -->
<script src="<?php echo $URL;?>/paginas/web/js/owl.carousel.min.js"></script>
<!-- WOW script -->
<script src="<?php echo $URL;?>/paginas/web/js/wow.min.js"></script>
<!-- theme custom scripts -->
<script src="<?php echo $URL;?>/paginas/web/js/main.js"></script>
<!-- core  -->
<script src="<?php echo $URL;?>/paginas/web/assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="<?php echo $URL;?>/paginas/web/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap affix -->
<script src="<?php echo $URL;?>/paginas/web/assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- wow.js -->
<script src="<?php echo $URL;?>/paginas/web/assets/vendors/wow/wow.js"></script>
    
<!-- google maps -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

<!-- FoodHut js -->
<script src="<?php echo $URL;?>/paginas/web/assets/js/foodhut.js"></script>


</body>

    </div>
  </div> 
<!-- ///CONTENIDO DERECHO MAIN O BODY-->
          

<!-- CONTENIDO FOOTER Y MENSAJES -->
<?php 
  include ("../../layout/web/footer.php");
?>
<!-- ///CONTENIDO FOOTER Y MENSAJES -->




        
        
        