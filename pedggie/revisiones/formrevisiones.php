<html>
<head>
	<title>formrevisiones</title>
</head>
<body>
<?php
include("conexion.php");
?>
<form name="revisiones" id="revisiones" method="post" action="insrevisiones.php">
<table align="center" width="50%" border="1px solid">
	<tr>
		<td colspan="2" style="text-align: center">
			<h3>INSERTAR REVISIONES</h3>
		</td>
	</tr>
	<tr>
		<td>Material: </td>
		<td>
			<select name="idMaterial" id="idMaterial">
				<option value=""></option>
					<?php
					$sql = "SELECT * FROM materiales";
					$registros = mysqli_query($conexion, $sql);
					while($linea=mysqli_fetch_array($registros)){
						echo "<option value='$linea[idReferencia]'>$linea[Aparato]";
					}
					?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Fecha de revisión: </td>
		<td>
			<input type="date" name="FechaRevision" id="FechaRevision" placeholder="Fecha de revisión">
		</td>
	</tr>
	<tr>
		<td>Hora de revisión: </td>
		<td>
			<input type="time" name="hora" id="hora" placeholder="Hora de revisión">
		</td>
	</tr>
	<tr>
		<td>Usuario: </td>
		<td>
			<select name="idUsuario" id="idUsuario">
				<option value=""></option>
					<?php
					$sql = "SELECT * FROM usuarios";
					$registros = mysqli_query($conexion, $sql);
					while($linea=mysqli_fetch_array($registros)){
						echo "<option value='$linea[Dni]'>$linea[Usuario]";
					}
					?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Observaciones: </td>
		<td>
			<input type="text" name="Observaciones" id="Observaciones" placeholder="Hora de revisión">
		</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center" >
			<h3><input type="submit" name="Enviar" id="Enviar" value="Añadir" placeholder="Enviar"></h3>
		</td>
	</tr>
	<tr>
		<td colspan="7" style="padding:5px ">
			<a href="verrevisiones.php">Ver revisiones</a>
		</td>
	</tr>
	<tr>
		<td colspan="7" align="right" style="padding: 5px;">
			<a href="home.php">Home</a></p>
		</td>
		
	</tr>
</table>
</form>
</body>
</html>