<html>
<head>
	<title>formubicaciones</title>
</head>
<body>
<?php
include("./../conexion.php");
?>
<form name="ubicaciones" id="ubicaciones" method="post" action="insubicaciones.php">
<table align="center" width="50%" border="1px solid">
	<tr>
		<td colspan="2" style="text-align: center">
			<h3>INSERTAR UBICACIONES</h3>
		</td>
	</tr>
	<tr>
		<td>Ubicación</td>
		<td>
			<input type="text" name="ubicaciones" id="ubicaciones" placeholder="Nombre de la ubicación">
		</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center" >
			<h3><input type="submit" name="Enviar" id="Enviar" value="Añadir" placeholder="Enviar"></h3>
		</td>
	</tr>
	<tr>
		<td colspan="7" style="padding:5px ">
			<a href="verubicaciones2.php">Ver ubicaciones</a>
		</td>
	</tr>
	<tr>
		<td colspan="7" align="right" style="padding: 5px;">
			<a href="./../home.php">Home</a></p>
		</td>
		
	</tr>
</table>
</form>
</body>
</html>