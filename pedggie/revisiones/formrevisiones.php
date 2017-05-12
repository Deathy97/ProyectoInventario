<html>
<head>
	<meta charset="utf-8">
	<title>formrevisiones</title>
</head>
<body>
<?php
include("./../conexion.php");
?>
<form name="revisiones" id="revisiones" method="post" action="insrevisiones.php">
<table align="center" width="50%" border="1px solid">
	<tr>
		<td colspan="2" style="text-align: center">
			<h3>CREAR INCIDENCIA</h3>
		</td>
	</tr>
	<tr>
		<td>Material: </td>
		<td>
			<select name="idMaterial" id="idMaterial" style="width: 300px;">
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
			<input type="date" name="FechaRevision" id="FechaRevision" placeholder="Inserte fecha de la revisión." style="width: 300px;">
		</td>
	</tr>
	<tr>
		<td>Hora de revisión: </td>
		<td>
			<input type="time" name="hora" id="hora" placeholder="Inserte hora de la revisión." style="width: 300px; align-content: center;">
		</td>
	</tr>
	<tr>
		<td>Usuario: </td>
		<td>
			<select name="idUsuario" id="idUsuario" style="width: 300px;">
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
			<textarea name="Observaciones" id="Observaciones" placeholder="Añada sus observaciones." cols="40" rows="4"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="7" align="center">
			<input type="submit" name="Enviar" id="Enviar" placeholder="Enviar">
		</td>
	</tr>
	<tr>
		<td colspan="7" align="right">
			<a href="verrevisiones.php">Ver revisiones</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="./../home.php">Página principal</a>
		</td>
	</tr>
</table>
</form>
</body>
</html>