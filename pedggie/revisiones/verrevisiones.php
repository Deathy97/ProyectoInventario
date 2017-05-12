<html>
<head>
	<meta charset="utf-8">
	<title>verrevisiones.php</title>
</head>
<body>
<table align="center" width="50%" style="background-color: blue; color: white; border-radius: 10px; padding: 10px;">
	<tr align="center" bgcolor="black">
		<td >idRevision</td>
		<td>Material</td>
		<td >FechaRevision</td>
		<td>Hora</td>
		<td >Usuario</td>
		<td>Observaciones</td>
	</tr>
<?php
	include("./../conexion.php");
	$sql = "SELECT r.idRevision, m.Aparato, r.FechaRevision, r.hora, u.Usuario, r.Observaciones FROM revisiones AS r, usuarios as u, materiales as m WHERE r.idMaterial=m.idReferencia AND u.dni=r.idUsuario;";
	$registros=mysqli_query($conexion, $sql);
	while($linea=mysqli_fetch_array($registros)){
		echo "<tr><td>$linea[idRevision]</td><td>$linea[Aparato]</td><td>$linea[FechaRevision]</td><td>$linea[hora]</td><td>$linea[Usuario]</td><td>$linea[Observaciones]</td><td><a href='borrevisiones.php?clave=$linea[idRevision]'><img src='imagenes/borrar.png' width='25px'></td></tr>";
		echo "<tr><td colspan=6><hr></td></tr>";
}
mysqli_close($conexion);
?>
	<tr>
		<td colspan="7" align="right" style="background-color: aqua;">
			<a href="formrevisiones.php">Ir al formulario</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="./../home.php">Página principal</a>
		</td>
	</tr>
</table>
</body>
</html>