<!DOCTYPE html>
<html>
<head>
	<title>formalumnos</title>
</head>
<body>
<?php
include("conexion.php");
?>
<form name="alumnos" id="alumnos" method="post" action="insalumnos.php">
<table align="center" width="50%" border="2px solid" style="background-color: aqua">
	<tr>
		<td colspan="2" align="center">
			<img src="imagenes/logosz.jpg" width="500px" align="center">
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
</table>
</form>
</body>
</html>
