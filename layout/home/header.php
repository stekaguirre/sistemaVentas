<!DOCTYPE html>
<html lang="es">
  <!-- HEAD -->  
    <head>
      <title>Servicios disponibles | Home</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link href="<?php echo $URL;?>/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
  <!-- ///HEAD -->
<body id="top">
<!-- IMAGEN DE FONDO  MENU DE NAVEGACION Y BIENVENIDA -->
  <div class="bgded overlay" style="background-image:url('<?php echo $URL;?>/public/images/sd1.jpg'); "> 
    <!-- TITULO Y LOGO -->
      <div class="wrapper row0">
        <header id="header" class="hoc clear center"> 
          <h1 id="logo"><img src="<?php echo $URL;?>/public/images/logotienda.png" alt="logotienda"> <br> 
            <b>Servicios disponibles</b></h1>
        </header>
      </div>
    <!-- ///TITULO Y LOGO -->
    <!-- MENU DE NAVEGACION -->
      <div class="wrapper row1">
        <nav id="mainav" class="hoc clear"> 
          <ul class="clear">
            <li class="active"><a href="<?php echo $URL;?>/index.php">Home</a></li>
            <li><a href="<?php echo $URL;?>/paginas/streaming/index.php">Servicios streaming</a></li>
            <li><a href="<?php echo $URL;?>/paginas/web/index.php">Servicios  Web</a></li>
            <li><a href="<?php echo $URL;?>/font-icons.html">iconos</a></li>
            <li><a class="drop" href="#">Proximamente</a>
              <ul>
                <li><a href="<?php echo $URL;?>/paginas/hogar/index.php">Servicio Hogar</a></li>
                <li><a href="<?php echo $URL;?>/paginas/tienda/index.php">Servicio tienda</a></li>
                <li><a href="<?php echo $URL;?>/paginas/personal/index.php">Servicio aseo personal</a></li>
              </ul>
            </li>
            <!-- BOTON INGRESAR -->
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="<?php echo $URL;?>/login" 
                  class="nav-link">Login</a>
                </li>
            <!-- ///BOTON INGRESAR --> 
          </ul>
        </nav>
      </div>
    <!-- ///MENU DE NAVEGACION -->
    <!-- BIENVENIDA -->
      <div id="pageintro" class="hoc clear"> 
        <article>
          <h3 class="heading">Juntos lo podemos lograr</h3>
          <p>Ademas de crear tu pagina web.</p>
          <p>Tenemos todas tus plataformas de streaming favoritas.</p>
        </article>
      </div>
    <!-- ///BIENVENIDA -->
  </div>
<!-- //IMAGEN DE FONDO MENU DE NAVEGACION Y BIENVENIDA -->