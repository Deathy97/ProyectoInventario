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
<title>vermateriales</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript">
    function impresoras(){
      document.getElementById("tablamonitores").style.display="none"; 
      document.getElementById("tablaordenadores").style.display="none"; 
      document.getElementById("tablaotros").style.display="none"; 

      document.getElementById("tablaimpresoras").style.display="block"; 
    }

    function monitores(){
      document.getElementById("tablaimpresoras").style.display="none"; 
      document.getElementById("tablaordenadores").style.display="none"; 
      document.getElementById("tablaotros").style.display="none"; 

      document.getElementById("tablamonitores").style.display="block"; 
    }

    function ordenadores(){
      document.getElementById("tablaimpresoras").style.display="none"; 
      document.getElementById("tablamonitores").style.display="none"; 
      document.getElementById("tablaotros").style.display="none"; 

      document.getElementById("tablaordenadores").style.display="block"; 
    }

    function otro(){
      document.getElementById("tablaimpresoras").style.display="none"; 
      document.getElementById("tablamonitores").style.display="none"; 
      document.getElementById("tablaordenadores").style.display="none"; 

      document.getElementById("tablaotros").style.display="block"; 
    }

  </script>
</head>
<body id="top">
<?php
session_start();
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
      <a href="../home.php"><img src="../imagenes/logo1.png" style="width: 150px; margin-right: 40px;"></a>
    </div>
    <div id="titulo" style="margin-left: 40%;">
     <a href="../home.php"><h1 style="font-size:250%;">Inventario</h1></a>
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
      <li><a href="insmateriales">Insertar materiales</a></li>
    
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
      
      <h1><FIELDSET>VER MATERIALES</FIELDSET></h1>

      <div class="scrollable" style="overflow: scroll;">

        
       <table id="botones" align="center" width="50%">
      <tr>
        <td align="center">
          <input type="button" onclick="impresoras()" id="impresoras" value="Impresoras">
        </td>
        <td align="center">
          <input type="button" onclick="monitores()" id="monitores" value="Monitores">
        </td>
        <td align="center">
          <input type="button" onclick="ordenadores()" id="ordenadores" value="Ordenadores">
        </td>
          <td align="center">
          <input type="button" onclick="otro()" id="otro" value="Otro">
        </td>
      </tr>
    </table>

    <table id="tablaotros" style="display:none; align:center width:50%">
      <tr >
        <th>idReferencia</th><th>Aparato</th><th>Proveedor</th><th>Marca</th><th>Modelo</th><th>Numero de Serie</th><th>Cantidad</th><th>Fecha de entrada</th><th>Usuario</th><th>Apellidos</th><th>Garantia</th><th>Ubicacion</th><th>Numero interno</th><th>Fecha de baja</th><th>Observaciones</th><th>borrar</th>
      </tr>

      <?php
        include("./../conexion.php");
        //creamos la consulta
        $sql="SELECT m.idReferencia, m.Aparato, p.Proveedor, ma.Marca, m.Modelo, m.NumSerie,m.Cantidad,m.FechaEntrada,u.Usuario,u.Apellidos,m.Garantia,ub.Ubicacion,m.NumInterno,m.FechaBaja,m.Observaciones          
        FROM materiales AS m, proveedores AS p, marcas AS ma,usuarios as u,ubicaciones as ub
          WHERE m.NifProveedor = p.Nif AND m.idMarca = ma.idMarca and  m.DniUsuario=u.Dni and m.idUbicacion=ub.idUbicacion and m.idReferencia not in (select idReferencia from impresoras) and m.idReferencia not in (select idReferencia from monitores) and m.idReferencia not in (select idReferencia from ordenadores) ;";
        //ejecutamos la consulta
        $registros=mysqli_query($conexion,$sql);
        //leemos el contenido de $registros
        while ($linea=mysqli_fetch_array($registros)) {
          echo "<tr>
              <td>$linea[idReferencia]</td>
              <td>$linea[Aparato]</td>
              <td>$linea[Proveedor]</td>
              <td>$linea[Marca]</td>
              <td>$linea[Modelo]</td>
              <td>$linea[NumSerie]</td>
              <td>$linea[Cantidad]</td>
              <td>$linea[FechaEntrada]</td>
              <td>$linea[Usuario]</td>
              <td>$linea[Apellidos]</td>
              <td>$linea[Garantia]</td>
              <td>$linea[Ubicacion]</td>
              <td>$linea[NumInterno]</td>
              <td>$linea[FechaBaja]</td>
              <td>$linea[Observaciones]</td>
              <td><a href='bormateriales.php?clave=$linea[idReferencia]'><img src='./../imagenes/basura.png'></td></tr>";
          echo "<tr><td colspan='16'><hr></td>
            </tr>";
        }
        mysqli_close($conexion);
      ?>
    </table>

    <table id="tablaimpresoras" style="display:none; align:center width:50%">
      <tr >
        <th>idReferencia</th><th>Aparato</th><th>Proveedor</th><th>Marca</th><th>Modelo</th><th>Numero de Serie</th><th>Cantidad</th><th>Fecha de entrada</th><th>Usuario</th><th>Apellidos</th><th>Garantia</th><th>Ubicacion</th><th>Numero interno</th><th>Fecha de baja</th><th>Observaciones</th><th>Tipo</th><th>Consumible</th><th>Borrar</th>
      </tr>

      <?php
        include("./../conexion.php");
        //creamos la consulta
        $sql="SELECT m.idReferencia, m.Aparato, p.Proveedor, ma.Marca, m.Modelo, m.NumSerie,m.Cantidad,m.FechaEntrada,u.Usuario,u.Apellidos,m.Garantia,ub.Ubicacion,m.NumInterno,m.FechaBaja,m.Observaciones,i.Tipo, i.Consumible         
        FROM materiales AS m, proveedores AS p, marcas AS ma,usuarios as u,ubicaciones as ub,impresoras as i
          WHERE m.NifProveedor = p.Nif AND m.idMarca = ma.idMarca and  m.DniUsuario=u.Dni and m.idUbicacion=ub.idUbicacion and m.idReferencia=i.idReferencia;";
        //ejecutamos la consulta
        $registros=mysqli_query($conexion,$sql);
        //leemos el contenido de $registros
        while ($linea=mysqli_fetch_array($registros)) {
          echo "<tr>
              <td>$linea[idReferencia]</td>
              <td>$linea[Aparato]</td>
              <td>$linea[Proveedor]</td>
              <td>$linea[Marca]</td>
              <td>$linea[Modelo]</td>
              <td>$linea[NumSerie]</td>
              <td>$linea[Cantidad]</td>
              <td>$linea[FechaEntrada]</td>
              <td>$linea[Usuario]</td>
              <td>$linea[Apellidos]</td>
              <td>$linea[Garantia]</td>
              <td>$linea[Ubicacion]</td>
              <td>$linea[NumInterno]</td>
              <td>$linea[FechaBaja]</td>
              <td>$linea[Observaciones]</td>
              <td>$linea[Tipo]</td>
              <td>$linea[Consumible]</td>
              <td><a href='bormateriales.php?clave=$linea[idReferencia]'><img src='./../imagenes/basura.png'></td></tr>";
          echo "<tr><td colspan='18'><hr></td>
            </tr>";
        }
        mysqli_close($conexion);
      ?>
    </table>

    <table id="tablamonitores" style="display:none; align:center width:50%">
      <tr >
        <th>idReferencia</th><th>Aparato</th><th>Proveedor</th><th>Marca</th><th>Modelo</th><th>Numero de Serie</th><th>Cantidad</th><th>Fecha de entrada</th><th>Usuario</th><th>Apellidos</th><th>Garantia</th><th>Ubicacion</th><th>Numero interno</th><th>Fecha de baja</th><th>Observaciones</th><th>Tipo</th><th>Tamaño</th><th>Borrar</th>
      </tr>

      <?php
        include("./../conexion.php");
        //creamos la consulta
        $sql="SELECT m.idReferencia, m.Aparato, p.Proveedor, ma.Marca, m.Modelo, m.NumSerie,m.Cantidad,m.FechaEntrada,u.Usuario,u.Apellidos,m.Garantia,ub.Ubicacion,m.NumInterno,m.FechaBaja,m.Observaciones,mo.tipo, mo.tamaño         
        FROM materiales AS m, proveedores AS p, marcas AS ma,usuarios as u,ubicaciones as ub,monitores as mo
          WHERE m.NifProveedor = p.Nif AND m.idMarca = ma.idMarca and  m.DniUsuario=u.Dni and m.idUbicacion=ub.idUbicacion and m.idReferencia=mo.idReferencia;";
        //ejecutamos la consulta
          mysqli_set_charset($conexion,"utf8");//cuando el campo de la base lleva ñs o cosas raras
        $registros=mysqli_query($conexion,$sql);
        //leemos el contenido de $registros
        while ($linea=mysqli_fetch_array($registros)) {
          echo "<tr>
              <td>$linea[idReferencia]</td>
              <td>$linea[Aparato]</td>
              <td>$linea[Proveedor]</td>
              <td>$linea[Marca]</td>
              <td>$linea[Modelo]</td>
              <td>$linea[NumSerie]</td>
              <td>$linea[Cantidad]</td>
              <td>$linea[FechaEntrada]</td>
              <td>$linea[Usuario]</td>
              <td>$linea[Apellidos]</td>
              <td>$linea[Garantia]</td>
              <td>$linea[Ubicacion]</td>
              <td>$linea[NumInterno]</td>
              <td>$linea[FechaBaja]</td>
              <td>$linea[Observaciones]</td>
              <td>$linea[tipo]</td>
              <td>$linea[tamaño]</td>
              <td><a href='bormateriales.php?clave=$linea[idReferencia]'><img src='./../imagenes/basura.png'></td></tr>";
          echo "<tr><td colspan='18'><hr></td>
            </tr>";
        }
        mysqli_close($conexion);
      ?>
    </table>

    <table id="tablaordenadores" style="display:none; align:center width:50%">
      <tr >
        <th>idReferencia</th><th>Aparato</th><th>Proveedor</th><th>Marca</th><th>Modelo</th><th>Numero de Serie</th><th>Cantidad</th><th>Fecha de entrada</th><th>Usuario</th><th>Apellidos</th><th>Garantia</th><th>Ubicacion</th><th>Numero interno</th><th>Fecha de baja</th><th>Observaciones</th><th>Placa</th><th>Procesador</th><th>Ram</th><th>DiscoDuro</th><th>Tarjetas</th><th>Ip</th><th>Dominio</th><th>Borrar</th></tr>
      </tr>

      <?php
        include("./../conexion.php");
        //creamos la consulta
        $sql="SELECT m.idReferencia, m.Aparato, p.Proveedor, ma.Marca, m.Modelo, m.NumSerie,m.Cantidad,m.FechaEntrada,u.Usuario,u.Apellidos,m.Garantia,ub.Ubicacion,m.NumInterno,m.FechaBaja,m.Observaciones,o.Placa, o.Procesador, o.Ram, o.DiscoDuro, o.Tarjetas, o.Ip, o.Dominio         
        FROM materiales AS m, proveedores AS p, marcas AS ma,usuarios as u,ubicaciones as ub,ordenadores as o
          WHERE m.NifProveedor = p.Nif AND m.idMarca = ma.idMarca and  m.DniUsuario=u.Dni and m.idUbicacion=ub.idUbicacion and m.idReferencia=o.idReferencia;";
        //ejecutamos la consulta
         
        $registros=mysqli_query($conexion,$sql);
        //leemos el contenido de $registros
        while ($linea=mysqli_fetch_array($registros)) {
          echo "<tr>
              <td>$linea[idReferencia]</td>
              <td>$linea[Aparato]</td>
              <td>$linea[Proveedor]</td>
              <td>$linea[Marca]</td>
              <td>$linea[Modelo]</td>
              <td>$linea[NumSerie]</td>
              <td>$linea[Cantidad]</td>
              <td>$linea[FechaEntrada]</td>
              <td>$linea[Usuario]</td>
              <td>$linea[Apellidos]</td>
              <td>$linea[Garantia]</td>
              <td>$linea[Ubicacion]</td>
              <td>$linea[NumInterno]</td>
              <td>$linea[FechaBaja]</td>
              <td>$linea[Observaciones]</td>
              <td>$linea[Placa]</td>
              <td>$linea[Procesador]</td>
              <td>$linea[Ram]</td>
              <td>$linea[DiscoDuro]</td>
              <td>$linea[Tarjetas]</td>
              <td>$linea[Ip]</td>
              <td>$linea[Dominio]</td>
              <td><a href='bormateriales.php?clave=$linea[idReferencia]'><img src='./../imagenes/basura.png'></td></tr>";
          echo "<tr><td colspan='24'><hr></td>
            </tr>";
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