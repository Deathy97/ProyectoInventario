<!DOCTYPE html>
<!--
Template Name: Pedggie
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<?php
session_start();
if($_SESSION['Puesto']!='Encargado')
  header("location:../index.php");
include("../conexion.php");
?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> 976 30 68 78</li>
        <li><i class="fa fa-envelope-o"></i> secretaria.zaragoza@salesianos.edu</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/salesianosZAR?lang=es"><i class="fa fa-twitter"></i></a></li>
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
    
    <div id="logo" style="position:absolute; taxt-align:centre; width: 60%; margin: -20px;">
      <a href="./../home.php"><img src="../imagenes/logo1.png" style="width: 150px; margin-right: 40px;"></a>
    </div>
    <div id="titulo" style="margin-left: 40%;">
     <h1 style="font-size:250%;"><a href="../home.php">Inventario</a></h5>
    </div>

    <div id="quickinfo" class="fl_right" style="float:right; text-align:right">
      <ul class="nospace inline">
        <?php echo "<li><strong>Usuario: $_SESSION[nombreusuario]</strong></li><br>
        <li><strong>Dni: $_SESSION[dniusuario]</strong></li>"?>
        <li><a href="../logout.php"><strong>Salir</strong></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="../home.php">Home</a></li>
      <li><a class="drop" href="#">MATERIALES</a>
        <ul>
            <li><a href="../materiales/vermateriales.php">VER</a></li>
            <li><a href="../materiales/formmateriales.php">NUEVO</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">INCIDENCIAS</a>
        <ul>
            <li><a href="../incidencias/verincidencias.php">VER</a></li>
            <li><a href="../incidencias/formincidencias.php">NUEVA</a></li>
        </ul>
      </li>
      <li><a class="drop" href="">REVISIONES</a>
        <ul>
            <li><a href="../revisiones/verrevisiones.php">VER</a></li>
            <li><a href="../revisiones/formrevisiones.php">NUEVA</a></li>
        </ul>
      </li>
      <li><a class="drop" href="">SOFTWARE</a>
        <ul>
            <li><a href="../software/versoftware.php">VER</a></li>
            <li><a href="../software/formsoftware.php">NUEVO</a></li>
        </ul>
      </li>
      <li><a class="drop" href="">MÁS</a>
        <ul>
              <li><a class="drop" href="">MARCAS</a>
                <ul>
                  <li><a href="../marcas/vermarcas.php">VER</a></li>
                  <li><a href="../marcas/formmarcas.php">NUEVO</a></li>
                </ul>
              </li>
              <li><a class="drop" href="">PROVEEDORES</a>
                <ul>
                  <li><a href="../proveedores/verproveedores.php">VER</a></li>
                  <li><a href="../proveedores/formproveedores.php">NUEVO</a></li>
                </ul>
              </li>
              <li><a class="drop" href="">UBICACIONES</a>
                <ul>
                  <li><a href="../ubicaciones/verubicaciones.php">VER</a></li>
                  <li><a href="../ubicaciones/formubicaciones.php">NUEVO</a></li>
                </ul>
              </li>
              <li><a class="drop" href="">USUARIOS</a>
              <ul>
                <li><a href="../usuarios/verusuarios.php">VER</a></li>
                <li><a href="../usuarios/formusuarios.php">NUEVO</a></li>
              </ul>
            </li>
        </ul>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="../home.php">Home</a></li>
      <li><a href="formubicaciones.php">Insertar ubicación</a></li>
    
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      
    <h1><FIELDSET>CUADRO DE UBICACIONES</FIELDSET></h1>
      <div class="scrollable">

        
<table align="center" width="50%">
  <tr align="center" bgcolor="black">
    <th>idUbicacion</th>
    <th>Ubicacion</th>
    <TH>Borrar</TH>
<!-- aqui falta el dniUsuario que debera rellenarse con el usuario logeado; aun no sabemos hacerlo-->
  </tr><td></td>
<?php
  include("./../conexion.php");
  $sql = "SELECT * FROM ubicaciones;";
  $registros=mysqli_query($conexion, $sql);
  while($linea=mysqli_fetch_array($registros)){
    echo "<tr><td>$linea[idUbicacion]</td><td>$linea[Ubicacion]</td><td><a href='borubicaciones.php?clave=$linea[idUbicacion]'><img src='./../imagenes/basura.png'></td></tr>";
    echo "<tr><td colspan=3><hr></td></tr>";
}
mysqli_close($conexion);
?>
</table>


      </div>
        
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
   <footer id="footer" class="hoc clear" > 
    <!-- ################################################################################################ -->
    <div  >
      <h6 class="title">Contacto</h6>
      <ul class="nospace linklist contact" >
        <li><i class="fa fa-map-marker"></i>
          <address>
          Calle María Auxiliadora, 57, 50009 Zaragoza
          </address>
        </li>
        <li><i class="fa fa-phone"></i> 976 30 68 78<br></li>
        <li><i class="fa fa-envelope-o"></i> secretaria.zaragoza@salesianos.edu</li>
      </ul>
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