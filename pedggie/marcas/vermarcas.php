<html>
<head>
	<title>vermarcas</title>
</head>
<body>
<table align="center" width="50%" style="background-color: blue; color: white; border-radius: 10px; padding: 10px;">
	<tr>
		<td colspan="7" align="center">
			<img src="imagenes/logo.png" width="500px" align="center">
		</td>
	</tr>
	<tr>
		<td colspan="7" align="center" style="background-color: aqua;"><a href="formmarcas.php">Volver al formulario</a></td>
	</tr>
	<tr>
		<td colspan="7" align="center" style="background-color: aqua;"><a href="home.php">home</a></td>
	</tr>
	<tr align="center" bgcolor="black">
		<td>Marca</td>
<!-- aqui falta el dniUsuario que debera rellenarse con el usuario logeado; aun no sabemos hacerlo-->
	</tr><td></td>
<?php
	include("./../conexion.php");
	$sql = "SELECT idMarca, Marca FROM marcas;";
	$registros=mysqli_query($conexion, $sql);
	while($linea=mysqli_fetch_array($registros)){
		echo "<tr><td>$linea[Marca]</td><td><a href='bormarcas.php?clave=$linea[idMarca]'><img src='imagenes/borrar.png' width='25px'></td></tr>";
		echo "<tr><td colspan=6><hr></td></tr>";
}
mysqli_close($conexion);
?>
</table>
</body>
</html>