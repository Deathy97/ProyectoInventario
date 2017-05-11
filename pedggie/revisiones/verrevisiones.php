<html>
<head>
	<title>verrevisiones.php</title>
</head>
<body>
<table align="center" width="50%" style="background-color: blue; color: white; border-radius: 10px; padding: 10px;">
	<tr>
		<td colspan="7" align="center">
			<img src="imagenes/logo.png" width="500px" align="center">
		</td>
	</tr>
	<tr>
		<td colspan="7" align="center" style="background-color: aqua;"><a href="formrevisiones.php">Volver al formulario</a></td>
	</tr>
	<tr>
		<td colspan="7" align="center" style="background-color: aqua;"><a href="home.php">home</a></td>
	</tr>
	<tr align="center" bgcolor="black">
		<td >idRevision</td>
		<td>Material</td>
		<td >FechaRevision</td>
		<td>Hora</td>
		<td >Usuario</td>
		<td>Observaciones</td>
	</tr>
<?php
	include("conexion.php");
	$sql = "SELECT r.idRevision, m.Aparato, r.FechaRevision, r.hora, u.Usuario, r.Observaciones FROM revisiones AS r, usuarios as u, materiales as m WHERE r.idMaterial=m.idReferencia AND u.dni=r.idUsuario;";
	$registros=mysqli_query($conexion, $sql);
	while($linea=mysqli_fetch_array($registros)){
		echo "<tr><td>$linea[idRevision]</td><td>$linea[Aparato]</td><td>$linea[FechaRevision]</td><td>$linea[hora]</td><td>$linea[Usuario]</td><td>$linea[Observaciones]</td><td><a href='borrevisiones.php?clave=$linea[idRevision]'><img src='imagenes/borrar.png' width='25px'></td></tr>";
		echo "<tr><td colspan=6><hr></td></tr>";
}
mysqli_close($conexion);
?>
</table>
</body>
</html>