<html>
<meta charset="utf-8">
<head>
	<title>formarcas</title>
</head>
<body>
<?php
include("./../conexion.php");
?>
<form name="marcas" id="marcas" method="post" action="insmarcas.php">
<table align="center" width="50%" border="1px solid">
	<tr>
		<td colspan="2" style="text-align: center">
			<h3>INSERTAR MARCAS</h3>
		</td>
	</tr>
	<tr>
		<td>Marca</td>
		<td>
			<input type="text" name="nom" id="nom" placeholder="Nombre de la marca">
		</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center" >
			<h3><input type="submit" name="Enviar" id="Enviar" value="Añadir" placeholder="Enviar"></h3>
		</td>
	</tr>
	<tr>
		<td colspan="7" style="padding:5px ">
			<a href="vermarcas.php">Ver marcas</a>
		</td>
	</tr>
	<tr>
		<td colspan="7" align="right" style="padding: 5px;">
			<a href="home.php">Home</a></p>
		</td>
		
	</tr>
</table>
</form>
</body>
</html>