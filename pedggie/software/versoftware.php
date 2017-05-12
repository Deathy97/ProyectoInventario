<html>
<head>
	<meta charset="utf-8">
	<title>versoftware.php</title>
</head>
<body>
<table align="center" width="50%" style="background-color: blue; color: white; border-radius: 10px; padding: 10px;">
	<tr align="center" bgcolor="black">
		<td >idSoftware</td>
		<td>Descripción</td>
		<td >TipoLicencia</td>
		<td>Cantidad</td>
		<td >FechaFin</td>
		<td>Observaciones</td>
	</tr>
<?php
	include("./../conexion.php");
	$sql = "SELECT s.idSoftware, s.Descripcion, s.TipoLicencia, s.Cantidad, s.FechaFin, s.Observaciones FROM software AS s;";
	$registros=mysqli_query($conexion, $sql);
	while($linea=mysqli_fetch_array($registros)){
		echo "<tr><td>$linea[idSoftware]</td><td>$linea[Descripcion]</td><td>$linea[TipoLicencia]</td><td>$linea[Cantidad]</td><td>$linea[FechaFin]</td><td>$linea[Observaciones]</td><td><a href='borsoftware.php?clave=$linea[idSoftware]'><img src='imagenes/borrar.png' width='25px'></td></tr>";
		echo "<tr><td colspan=6><hr></td></tr>";
}
mysqli_close($conexion);
?>
<tr>
		<td colspan="7" align="right">
			<a href="formsoftware.php">Ir al formulario</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="./../home.php">Página principal</a>
		</td>
	</tr>
</table>
</body>
</html>