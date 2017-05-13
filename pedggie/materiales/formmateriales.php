<html>
<head>
	<title>formmateriales</title>
	<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
		<script language="JavaScript">
		$(document).ready(function(){
			var DifenciadorSubmit=0
			$("#impresoras").click(function(){
				$("#botones").hide();
				$("#formmonitores").hide();
				$("#formordenadores").hide();

				$("#formimpresoras").hide().css('visibility', 'visible').show(2000);
				$("#enviar").css('visibility', 'visible');
				DifenciadorSubmit=1;
			});

			$("#monitores").click(function(){
				$("#botones").hide();
				$("#formimpresoras").hide();
				$("#formordenadores").hide();

				$("#formmonitores").hide().css('visibility', 'visible').show(2000);
				$("#enviar").css('visibility', 'visible');
				DifenciadorSubmit=2;
			});

			$("#ordenadores").click(function(){
				$("#botones").hide();
				$("#formimpresoras").hide();
				$("#formmonitores").hide();

				$("#formordenadores").hide().css('visibility', 'visible').show(2000);
				$("#enviar").css('visibility', 'visible');
				DifenciadorSubmit=3;
			});

			$("#otro").click(function(){
				$("#botones").hide();
				$("#formimpresoras").hide();
				$("#formmonitores").hide();
				$("#formordenadores").hide();

				$("#enviar").hide().css('visibility', 'visible').show(2000);
				DifenciadorSubmit=4;
			});
			$("#enviar").click(function(){
				if(DifenciadorSubmit=1){
					$("#formmateriales,#formimpresoras").onsubmit();
					//$("#formimpresoras").submit();
				}
				if(DifenciadorSubmit=2){
					$("#formmateriales,#formmonitores").submit();
					//$("#formmonitores").submit();
				}
				if(DifenciadorSubmit=3){
					$("#formmateriales").submit();
					$("#formordenadores").submit();
				}
					
				if(DifenciadorSubmit=4){
					$("#formmateriales").submit();
				}
			});
		});
		</script>

</head>
<body>
<?php
include("./../conexion.php");
?>
<form name="formateriales" id="formmateriales" method="post" target="_blank" action="insmateriales.php">
<table align="center" width="50%">
	<tr>
		<td colspan="2" style="text-align: center">
			<h3>AÑADIR MATERIALES</h3>
		</td>
	</tr>
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
			<input type="number" name="mod" id="mod" placeholder="Modelo">
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
</form>

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


<form name="formimpresoras" id="formimpresoras" style="visibility: hidden" method="post" action="insimpresoras.php">
<table align="center" width="50%">
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
</form>

	<form name="formmonitores" id="formmonitores" style="visibility: hidden" method="post" action="insmonitores.php">
			<table align="center" width="50%">
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
		</form>

		<form name="formordenadores" id="formordenadores" style="visibility: hidden" method="post" action="insordenadores.php">
			<table align="center" width="50%">
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

</body>
</html>