<!DOCTYPE html>
<html>
<head>
	<title>verincidencias.php</title>
</head>
<body>
<table align="center" width="50%" style="background-color: blue; color: white; border-radius: 10px; padding: 10px;">
	<tr align="center" bgcolor="black">
		<td >idIncidencia</td>
		<td>Aparato</td>
		<td>FechaIncidencia</td>
		<td>Incidencia</td>
		<td>FechaSolucion</td>
		<td>Solucion</td>
		<td>idUsuario</td>
<!-- aqui falta el dniUsuario que debera rellenarse con el usuario logeado; aun no sabemos hacerlo-->
	</tr><td></td>
<?php
include("./../conexion.php");
//creamos ula consulta1
$sql = "SELECT i.idIncidencia, i.idMaterial, i.FechaIncidencia, i.Incidencia, i.FechaSolucion, i.Solucion, i.idUsuario FROM incidencias as i;";
//ejecutamos la consulta
$registros=mysqli_query($conexion, $sql);
//leemos el contenido de $registros
while($linea=mysqli_fetch_array($registros)){
	echo "<tr><td>$linea[idIncidencia]</td><td>$linea[idMaterial]</td><td>$linea[FechaIncidencia]</td><td>$linea[Incidencia]</td><td>$linea[FechaSolucion]</td><td>$linea[Solucion]</td><td>$linea[idUsuario]</td><td><a href='borincidencias.php?clave=$linea[idIncidencia]'><img src='imagenes/borrar.png' width='25px'></td></tr>";
	echo "<tr><td colspan=6><hr></td></tr>";
}
mysqli_close($conexion);
?>
	<tr>
		<td colspan="7" align="right" style="background-color: aqua;">
			<a href="formincidencias.php">Ir al formulario</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="./../home.php">Página principal</a>
		</td>
	</tr>
</table>
</body>
</html>