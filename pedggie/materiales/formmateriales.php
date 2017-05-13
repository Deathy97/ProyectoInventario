<html>
<head>
	<title>formmateriales</title>
</head>
<body>
<?php
include("./../conexion.php");
?>
<form name="incidencias" id="incidencias" method="post" action="insmateriales.php">
<table align="center" width="50%" border="1px solid">
	<tr>
		<td colspan="2" style="text-align: center">
			<h3>AÑADIR MATERIALES</h3>
		</td>
	</tr>
	<tr>
		<td width="50%">Aparato: </td>
		<td>
			<input type="text" name="ap" id="ap" placeholder="Aparato">
		</td>
	</tr>
	<tr>
		<td width="50%">Proveedor: </td>
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
		<td width="50%">Marca: </td>
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
		<td width="50%">Modelo: </td>
		<td>
			<input type="number" name="mod" id="mod" placeholder="Modelo">
		</td>
	</tr>
	<tr>
		<td width="50%">NumSerie: </td>
		<td>
			<input type="number" name="num" id="num" placeholder="NumSerie">
		</td>
	</tr>
	<tr>
		<td width="50%">Cantidad: </td>
		<td>
			<input type="number" name="can" id="can" placeholder="Cantidad">
		</td>
	</tr>
	<tr>
		<td width="50%">Fecha de entrada: </td>
		<td>
			<input type="date" name="fec" id="fec" placeholder="Fecha">
		</td>
	</tr>
	<tr>
		<td width="50%">Usuario: </td>
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
		<td width="50%">Garantia: </td>
		<td>
			<input type="date" name="gar" id="gar" placeholder="Garantia">
		</td>
	</tr>
	<tr>
		<td width="50%">Ubicacion: </td>
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
		<td width="50%">NumInterno: </td>
		<td>
			<input type="number" name="numI" id="numI" placeholder="NumInterno">
		</td>
	</tr>
	<tr>
		<td width="50%">Fecha de Baja: </td>
		<td>
			<input type="date" name="feB" id="feB">
		</td>
	</tr>
	<tr>
		<td width="50%">Observaciones: </td>
		<td>
			<input type="text" name="ob" id="ob" placeholder="Observaciones">
		</td>
	</tr>
	<tr>
		<td colspan="7" align="center">
			<input type="submit" name="Enviar" id="Enviar" placeholder="Enviar">
		</td>
	</tr>
	<tr>
		<td colspan="7" align="right">
			<a href="verproveedores.php">Ver proveedores</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="./../home.php">Página principal</a>
		</td>
	</tr>
</table>
</form>
</body>
</html>