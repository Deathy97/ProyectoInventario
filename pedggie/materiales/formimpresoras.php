<html>
<head>
	<title>formimpresoras</title>
</head>
<body>
<?php
include("./../conexion.php");
?>
<form name="incidencias" id="incidencias" method="post" action="insimpresoras.php">
<table align="center" width="50%" border="1px solid">
	<tr>
		<td colspan="2" style="text-align: center">
			<h3>INSERTAR IMPRESORAS</h3>
		</td>
	</tr>
	<tr>
		<td width="50%">Tipo </td>
		<td>
			<select name="tip">
				<option value=""></option>
				<option value="Tinta">Tinta</option>
				<option value="Laser">Laser</option>
				<option value="3D">3D</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Consumibles </td>
		<td>
			<input type="text" name="con" id="con" size="30" placeholder="Tipo de Consumibles">
		</td>
	</tr>
	<tr>
		<td colspan="7" align="center">
			<input type="submit" name="Enviar" id="Enviar" placeholder="Enviar">
		</td>
	</tr>
	<tr>
		<td colspan="7" align="right">
			<a href="verimpresoras.php">Ver impresoras</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="./../home.php">Página principal</a>
		</td>
	</tr>
</table>
</form>
</body>
</html>