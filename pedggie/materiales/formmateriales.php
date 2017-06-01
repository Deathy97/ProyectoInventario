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
<head>
	<title>formmateriales</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
		<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
		<script language="JavaScript">
		$(document).ready(function(){
			var DiferenciadorSubmit=0;
			$("#impresoras").click(function(){
				$("#botones").hide();
				$("#formmonitores").hide();
				$("#formordenadores").hide();

				//$("#formimpresoras").hide().css('visibility', 'visible').show(2000);
				$("#formimpresoras").css('visibility', 'visible');

				$("#enviar").css('visibility', 'visible');
				DiferenciadorSubmit=1;
			});

			$("#monitores").click(function(){
				$("#botones").hide();
				$("#formimpresoras").hide();
				$("#formordenadores").hide();

				//$("#formmonitores").hide().css('visibility', 'visible').show(2000);
				$("#formmonitores").css('visibility', 'visible');
				$("#enviar").css('visibility', 'visible');
				DiferenciadorSubmit=2;
			});

			$("#ordenadores").click(function(){
				$("#botones").hide();
				$("#formimpresoras").hide();
				$("#formmonitores").hide();

				//$("#formordenadores").hide().css('visibility', 'visible').show(2000);
				$("#formordenadores").css('visibility', 'visible');
				$("#enviar").css('visibility', 'visible');
				DiferenciadorSubmit=3;
			});

			$("#otro").click(function(){
				$("#botones").hide();
				$("#formimpresoras").hide();
				$("#formmonitores").hide();
				$("#formordenadores").hide();

				//$("#enviar").hide().css('visibility', 'visible').show(2000);
				$("#enviar").css('visibility', 'visible');
				DiferenciadorSubmit=4;

			});
			$("#enviar").click(function(){
				    url='insmateriales.php?numero='+DiferenciadorSubmit;
					$("#formmateriales").attr('action',url);
					$("#formmateriales").submit();
				
			});
		});
		</script>
</head>
<body id="top">
<?php
session_start();
if($_SESSION['Puesto']!='Encargado' and $_SESSION['Puesto']!='Sat')
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
      <?php
          if($_SESSION['Puesto']=='Encargado')
            echo "<a href='../home.php'>";
            else
              if($_SESSION['Puesto']=='Sat')
                echo "<a href='../homeSat.php'>";              
              else
                if($_SESSION['Puesto']=='Profesor')
                  echo "<a href='../homeProf.php'>";          
          ?><img src="../imagenes/logo1.png" style="width: 150px; margin-right: 40px;"></a>
    </div>
    <div id="titulo" style="margin-left: 40%;">
     <h1 style="font-size:250%;"><a href="#">Inventario</a></h5>
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
      <?php
          if($_SESSION['Puesto']=='Encargado')
            echo " 
                  <li class='active'><a href='../home.php'>Home</a></li>
              <li><a class='drop' href='#''>MATERIALES</a>
                <ul>
                    <li><a href='../materiales/vermateriales.php'>VER</a></li>
                    <li><a href='../materiales/formmateriales.php'>NUEVO</a></li>
                </ul>
              </li>
              <li><a class='drop' href='#''>INCIDENCIAS</a>
                <ul>
                    <li><a href='../incidencias/verincidencias.php'>VER</a></li>
                    <li><a href='../incidencias/formincidencias.php'>NUEVA</a></li>
                </ul>
              </li>
              <li><a class='drop' href=''>REVISIONES</a>
                <ul>
                    <li><a href='../revisiones/verrevisiones.php'>VER</a></li>
                    <li><a href='../revisiones/formrevisiones.php'>NUEVA</a></li>
                </ul>
              </li>
              <li><a class='drop' href=''>SOFTWARE</a>
                <ul>
                    <li><a href='../software/versoftware.php'>VER</a></li>
                    <li><a href='../software/formsoftware.php'>NUEVO</a></li>
                </ul>
              </li>
              <li><a class='drop' href=''>MÁS</a>
                <ul>
                      <li><a class='drop' href=''>MARCAS</a>
                        <ul>
                          <li><a href='../marcas/vermarcas.php'>VER</a></li>
                          <li><a href='../marcas/formmarcas.php'>NUEVO</a></li>
                        </ul>
                      </li>
                      <li><a class='drop' href=''>PROVEEDORES</a>
                        <ul>
                          <li><a href='../proveedores/verproveedores.php'>VER</a></li>
                          <li><a href='../proveedores/formproveedores.php'>NUEVO</a></li>
                        </ul>
                      </li>
                      <li><a class='drop' href=''>UBICACIONES</a>
                        <ul>
                          <li><a href='../ubicaciones/verubicaciones.php'>VER</a></li>
                          <li><a href='../ubicaciones/formubicaciones.php'>NUEVO</a></li>
                        </ul>
                      </li>
                      <li><a class='drop' href=''>USUARIOS</a>
                      <ul>
                        <li><a href='../usuarios/verusuarios.php'>VER</a></li>
                        <li><a href='../usuarios/formusuarios.php'>NUEVO</a></li>
                ";
            else
              if($_SESSION['Puesto']=='Sat')
                echo " <li class='active'><a href='../homeSat.php'>Home</a></li>
      <li><a class='drop' href='../materiales/vermateriales.php'>MATERIALES</a>
        <ul>
            <li><a href='../materiales/vermateriales.php'>VER</a></li>
            <li><a href='../materiales/formmateriales.php'>NUEVO</a></li>
        </ul>
      </li>
      <li><a class='drop' href='../incidencias/verincidencias.php'>INCIDENCIAS</a>
        <ul>
            <li><a href='../incidencias/verincidencias.php'>VER</a></li>
        </ul>
      </li>
      ";              
              else
                if($_SESSION['Puesto']=='Profesor')
                  echo "
                    <li class='active'><a href='../homeProf.php'>Home</a></li>
                          <li><a class='drop' href='../materiales/vermateriales.php'>MATERIALES</a>
                            <ul>
                                <li><a href='../materiales/vermateriales.php'>VER</a></li>
                            </ul>
                          </li>
                          <li><a class='drop' href='../incidencias/formincidencias.php'>INCIDENCIAS</a>
                            <ul>
                                <li><a href='../incidencias/formincidencias.php'>NUEVA</a></li>
                            </ul>
                  ";          
          ?>
     
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
      <?php
          if($_SESSION['Puesto']=='Encargado')
            echo " <li><a href='../home.php'>Home</a></li>
                  <li><a href='vermateriales.php'>Ver materiales</a></li>";
            else
              if($_SESSION['Puesto']=='Sat')
                echo " <li><a href='../homeSat.php'>Home</a></li>
 				<li><a href='vermateriales.php'>Ver materiales</a></li>";

              else
                if($_SESSION['Puesto']=='Profesor')
                  echo "<li><a href='../homeProf.php'>Home</a></li>";          
          ?>
    
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
      
      <h1><FIELDSET>FORMULARIO DE MATERIALES</FIELDSET></h1>

      <div class="scrollable">

        
        <form name="formateriales" id="formmateriales" method="post">
<table align="center" width="50%">
	<tr>
		<td>Aparato: </td>
		<td>
			<input type="text" name="ap" id="ap" placeholder="Aparato">
		</td>
	</tr>
	<tr>
		<td >Proveedor: </td>
		<td>
			<select name="prov" id="prov">
            <option value="">
            <?php   
              $sql="SELECT *
              FROM proveedores 
              ";

              $registros=mysqli_query($conexion,$sql);
              while($linea=mysqli_fetch_array($registros)){ 
                  echo"<option value='$linea[Nif]'>$linea[Proveedor]";
              }
            ?>
            </select>
		</td>
	</tr>
	<tr>
		<td>Marca: </td>
		<td>
			<select name="marca" id="marca">
            <option value="">
            <?php   
              $sql="SELECT *
              FROM marcas 
              ";

              $registros=mysqli_query($conexion,$sql);
              while($linea=mysqli_fetch_array($registros)){ 
                  echo"<option value='$linea[idMarca]'>$linea[Marca]";
              }
            ?>
            </select>
		</td>
	</tr>
	<tr>
		<td >Modelo: </td>
		<td>
			<input type="text" name="mod" id="mod" placeholder="Modelo">
		</td>
	</tr>
	<tr>
		<td >NumSerie: </td>
		<td>
			<input type="number" name="num" id="num" placeholder="NumSerie">
		</td>
	</tr>
	<tr>
		<td >Cantidad: </td>
		<td>
			<input type="number" name="can" id="can" placeholder="Cantidad">
		</td>
	</tr>
	<tr>
		<td>Fecha de entrada: </td>
		<td>
			<input type="date" name="fec" id="fec" placeholder="Fecha">
		</td>
	</tr>
	<tr>
		<td >Usuario: </td>
		<td>
			<select name="usuario" id="usuario">
            <option value="">
            <?php   
              $sql="SELECT *
              FROM usuarios 
              ";

              $registros=mysqli_query($conexion,$sql);
              while($linea=mysqli_fetch_array($registros)){ 
                  echo"<option value='$linea[Dni]'>$linea[Usuario] $linea[Apellidos]";
              }
            ?>
            </select>
		</td>
	</tr>
	<tr>
		<td >Garantia: </td>
		<td>
			<input type="date" name="gar" id="gar" placeholder="Garantia">
		</td>
	</tr>
	<tr>
		<td >Ubicacion: </td>
		<td>
			<select name="ub" id="ub">
            <option value="">
            <?php   
              $sql="SELECT *
              FROM ubicaciones 
              ";

              $registros=mysqli_query($conexion,$sql);
              while($linea=mysqli_fetch_array($registros)){ 
                  echo"<option value='$linea[idUbicacion]'>$linea[Ubicacion]";
              }
            ?>
            </select>
		</td>
	</tr>
	<tr>
		<td >NumInterno: </td>
		<td>
			<input type="number" name="numI" id="numI" placeholder="NumInterno">
		</td>
	</tr>
	<tr>
		<td >Fecha de Baja: </td>
		<td>
			<input type="date" name="feB" id="feB">
		</td>
	</tr>
	<tr>
		<td >Observaciones: </td>
		<td>
			<input type="text" name="ob" id="ob" placeholder="Observaciones">
		</td>
	</tr>
</table>

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

<table align="center" width="50%" style="visibility: hidden" id="formimpresoras">
	<tr>
		<td>Tipo </td>
		<td>
			<select name="tip">
				<option value=""></option>
				<option value="Tinta">Tinta</option>
				<option value="Laser">Laser</option>
				<option value="3D">3D</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Consumibles </td>
		<td>
			<input type="text" name="con" id="con" size="30" placeholder="Tipo de Consumibles">
		</td>
	</tr>
</table>

			<table align="center" width="50%"  style="visibility: hidden"  id="formmonitores">
				<tr>
		        	<td>Tamaño pantalla en pulgadas: </td>
		        	<td><input type="text" name="tamaño" id="tamaño" placeholder=" ejemplo 23 "></td> 
		        </tr>

		        <tr>
		        	<td>Tipo</td>
		        	<td><select name="tipo" id="tipo">
							<option value="CTR">CTR</option>
	         				<option value="LCD">LCD</option>
	         				<option value="LED">LED</option>
	         				<option value="DLP">DLP</option>
	         				<option value="Otro">Otro</option>
        	 	   		</select>
          			</td> 
          		</tr>		
			</table>

			<table align="center" width="50%" style="visibility: hidden" id="formordenadores">
				<tr>
		        	<td>Placa base</td>
		        	<td><input type="text" name="placa" id="placa" placeholder=" placa base "></td> 
		        </tr>
		        <tr>
		        	<td>Procesador</td>
		        	<td><input type="text" name="procesador" id="procesador" placeholder=" procesador "></td> 
		        </tr>

		         <tr>
		        	<td>Ram</td>
		        	<td><input type="text" name="ram" id="ram" placeholder=" ram "></td> 
		        </tr>

				<tr>
		        	<td>Disco Duro</td>
		        	<td><input type="disco" name="disco" id="disco" placeholder=" disco "></td> 
		        </tr>

				<tr>
		        	<td>Tarjetas</td>
		        	<td><input type="tarjetas" name="tarjetas" id="tarjetas" placeholder=" tarjetas "></td> 
		        </tr>
				<tr>
		        	<td>Ip</td>
		        	<td><input type="ip" name="ip" id="ip" placeholder=" ip "></td> 
		        </tr>
		        <tr>
		        	<td>Dominio</td>
		        	<td><input type="dominio" name="dominio" id="dominio" placeholder=" dominio "></td> 
		        </tr>			
			</table>
</form>

		<table id="enviar" align="center" width="50%" style="visibility: hidden">
			<tr>
				<td align="center">
					<input type="button" onclick="enviar()" id="Enviar" value="Enviar">
				</td>
			</tr>
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



















































