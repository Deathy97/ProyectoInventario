<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>formalumnos</title>
</head>
<body>
<?php
include("./../conexion.php");
?>
<form name="incidencias" id="incidencias" method="post" action="insincidencias.php">
<table align="center" width="50%" border="1px solid"; border-radius: 5px;">
	<tr>
		<td colspan="2" style="text-align: center">
			<h3>CREAR INCIDENCIA</h3>
		</td>
	</tr>
	<tr>
		<td width="50%">Numero interno: </td>
		<td>
			<input type="text" name="NumInterno" id="NumInterno" placeholder="Inserte número interno.">
		</td>
	</tr>
	<tr>
		<td>Fecha de la incidencia:	</td>
		<td>
			<input type="date" name="FechaIncidencia" id="FechaIncidencia" placeholder="Inserte fecha de la incidencia.">
		</td>
	</tr>
	<tr>
		<td>Incidencia:	</td>
		<td>
			<input type="text" name="Incidencia" id="Incidencia" placeholder="Describa la incidencia.">
		</td>
	</tr>
	<tr>
		<td>Fecha de la solución:	</td>
		<td>
			<input type="date" name="FechaSolucion" id="FechaSolucion" placeholder="FechaSolucion">
		</td>
	</tr>
	<tr>
		<td>Solución: </td>
		<td>
			<input type="text" name="Solucion" id="Solucion" placeholder="Describa la solución.">
		</td>
	</tr>
	<tr>
		<td colspan="7" align="center">
			<input type="submit" name="Enviar" id="Enviar" placeholder="Enviar">
		</td>
	</tr>
	<tr>
		<td colspan="7" align="right">
			<a href="verincidencias.php">Ver incidencias</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="./../home.php">Página principal</a>
		</td>
	</tr>
</table>
</form>
</body>
</html>