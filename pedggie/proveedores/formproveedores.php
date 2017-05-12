<html>
<head>
	<title>formproveedores</title>
</head>
<body>
<?php
include("./../conexion.php");
?>
<form name="incidencias" id="incidencias" method="post" action="insproveedores.php">
<table align="center" width="50%" border="1px solid">
	<tr>
		<td colspan="2" style="text-align: center">
			<h3>CREAR PROVEEDORES</h3>
		</td>
	</tr>
	<tr>
		<td width="50%">NIF: </td>
		<td>
			<input type="text" name="nif" id="nif" placeholder="NIF">
		</td>
	</tr>
	<tr>
		<td>Proveedor: </td>
		<td>
			<input type="text" name="prov" id="prov" placeholder="Nombre del proveedor">
		</td>
	</tr>
	<tr>
		<td colspan="7" align="center">
			<input type="submit" name="Enviar" id="Enviar" placeholder="Enviar">
		</td>
	</tr>
	<tr>
		<td colspan="7" align="right">
			<a href="verproveedores.php">Ver proveedores</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="./../home.php">Página principal</a>
		</td>
	</tr>
</table>
</form>
</body>
</html>