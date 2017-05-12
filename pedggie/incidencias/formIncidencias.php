<!DOCTYPE html>
<html>
<head>
	<title>formalumnos</title>
</head>
<body>
<?php
include("./../conexion.php");
?>
<form name="incidencias" id="incidencias" method="post" action="insincidencias.php">
<table align="center" width="50%" border="1px solid" style="background-color: aqua; border-radius: 5px;">
	<tr>
		<td colspan="2" style="text-align: center">
			<h3>CREAR INCIDENCIA</h3>
		</td>
	</tr>
	<tr>
		<td width="50%">Numero Interno: </td>
		<td>
			<input type="text" name="NumInterno" id="NumInterno" placeholder="numInterno">
		</td>
	</tr>
	<tr>
		<td>Fecha Incidencia</td>
		<td>
			<input type="date" name="FechaIncidencia" id="FechaIncidencia" placeholder="FechaIncidencia">
		</td>
	</tr>
	<tr>
		<td>Incidencia</td>
		<td>
			<input type="text" name="Incidencia" id="Incidencia" placeholder="Incidencia">
		</td>
	</tr>
	<tr>
		<td>Fecha Solucion</td>
		<td>
			<input type="date" name="FechaSolucion" id="FechaSolucion" placeholder="FechaSolucion">
		</td>
	</tr>
	<tr>
		<td>Solucion</td>
		<td>
			<input type="text" name="Solucion" id="Solucion" placeholder="Solucion">
		</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center">
			<h3><input type="submit" name="Enviar" id="Enviar" placeholder="Enviar"></h3>
		</td>
	</tr>
	<tr>
		<td colspan="7" align="center" style="background-color: aqua;"><a href="verincidencias.php">Ver incidencias</a></td>
	</tr>
	<tr>
		<td colspan="7" align="center" style="background-color: aqua;"><a href="home.php">home</a></td>
	</tr>
</table>
</form>
</body>
</html>