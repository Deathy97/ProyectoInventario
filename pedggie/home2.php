<html>
<meta charset="utf-8">
<head>
<title>home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css">
</head>
<body id="top">
<?php
session_start();
include("conexion.php");
?>
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> jorgepimpinela8@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
    <div id="logo" style="position: absolute; width: 30%; margin: -20px;">

      <h1><img src="imagenes/logo.png" style="width: 100px; margin-right: 40px;"><a href="home.php">Inventario</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <?php echo "<li><strong>Usuario: $_SESSION[nombreusuario]</strong></li><br>
        <li><strong>Dni: $_SESSION[dniusuario]</strong></li>"?>
        <li><a href="logout.php"><strong>Salir</strong></a></li>

      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <!--<nav id="mainav" class="hoc clear">-->
  <nav id="mainav" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="home.php">Home</a></li>
      
      <li><a class="drop" href="#">INCIDENCIAS</a>
        <ul>
            <li><a href="incidencias/verincidencias.php">VER</a></li>
            <li><a href="incidencias/formIncidencias.php">NUEVA</a></li>
        </ul>
      </li>
      <li><a class="drop" href="">REVISIONES</a>
        <ul>
            <li><a href="revisiones/verrevisiones.php">VER</a></li>
            <li><a href="formrevisiones.php">NUEVA</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">MATERIALES</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVO</a></li>
        </ul>
      </li>
      <li><a class="drop" href="">MARCAS</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVA</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">PROVEEDORES</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVO</a></li>
        </ul>
      </li>
      <li><a class="drop" href="">SOFTWARE</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVO</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">UBICACIONES</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVA</a></li>
        </ul>
      </li>
      <li><a class="drop" href="">USUARIOS</a>
        <ul>
            <li><a href="verusuarios.php">VER</a></li>
            <li><a href="formusuarios.php">NUEVO</a></li>
        </ul>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('imagenes/binario.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="introtxt">
      <h2 class="heading">Inventario Salesianos Zaragoza</h2>
      <p>Bienvenidos a la base de datos del Colegio Salesianos de Zaragoza. Aquí se puede encontrar un registro de los materiales, revisiones, incidencias y demás apartados que son implicados en el colegio.</p>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">Contacto</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Calle María Auxiliadora, 57, 50009 Zaragoza
          </address>
        </li>
        <li><i class="fa fa-phone"></i> 976 30 68 78</li>
        <li><i class="fa fa-envelope-o"></i> secretaria.zaragoza@salesianos.edu</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">PÁGINAS POPULARES</h6>
      <ul class="nospace linklist">
        <li><a href="#">Materiales</a></li>
        <li><a href="#">Revisiones</a></li>
        <li><a href="#">Incidencias</a></li>
        <li><a href="#">Usuarios</a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Suscríbete</h6>
      <p class="btmspace-30">Se informará de cambios en la base de datos.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Nombre">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Suscribir</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - Todos los derechos reservados - <a href="#">Salesianos Zaragoza</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>