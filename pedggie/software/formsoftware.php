<html>
<head>
	<meta charset="utf-8">
	<title>formsoftware</title>
</head>
<body>
<?php
include("./../conexion.php");
?>
<form name="software" id="software" method="post" action="inssoftware.php">
<table align="center" width="50%" border="1px solid">
	<tr>
		<td colspan="2" style="text-align: center">
			<h3>INSERTAR SOFTWARE</h3>
		</td>
	</tr>
	<tr>
		<td>Descripción: </td>
		<td>
			<textarea name="Descripcion" id="Descripcion" placeholder="Añada una descrición." cols="40" rows="4"></textarea>
		</td>
	</tr>
	<tr>
		<td>Tipo de Licencia: </td>
		<td>
			<input type="text" name="TipoLicencia" id="TipoLicencia" placeholder="Inserte el tipo de licencia." style="width: 300px;">
		</td>
	</tr>
	<tr>
		<td>Fecha de fin de licencia: </td>
		<td>
			<input type="date" name="FechaFin" id="FechaFin" placeholder="Fecha de fin de licencia." style="width: 300px; align-content: center;">
		</td>
	</tr>
	<tr>
		<td>Observaciones: </td>
		<td>
			<textarea name="Observaciones" id="Observaciones" placeholder="Añada sus observaciones." cols="40" rows="4"></textarea>
		</td>
	</tr>
	<tr>
		<td style="text-align: center" colspan="2">
			<input type="submit" name="Enviar" id="Enviar" value="Añadir" placeholder="Enviar">
			<a href="versoftware.php">Ver softwares</a>
			<a href="./../home.php">Home</a></p>
		</td>
	</tr>
</table>
</form>
</body>
</html>