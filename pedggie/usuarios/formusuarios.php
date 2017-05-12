<html>
	<head>
		<title>usuarios</title>
		<link rel="stylesheet" href="">
	</head>

	<body>
		<?php
			session_start();
			include("./../conexion.php");
		?>

		<form name="usuarios" id="usuarios" method="post" action="insusuarios.php">
			<table align="center" width="50%">

				<tr>
					<td colspan="6" align="right"><?php echo "Usuario: $_SESSION[nombreusuario]"?>&nbsp; &nbsp;  <a href="./../home.php">Volver</a>&nbsp; &nbsp;  <a href="logout.php">Salir</a></td>
				</tr>

				<tr>
					<td>dni: </td>
					<td><input type="text" name="dni" id="dni" placeholder="dni"></td> <!-- placeholder es el texto que sale difuminado dentro del recuadro-->
				</tr>
				<tr>
					<td>clave: </td>
					<td><input type="password" name="clave" id="clave" placeholder="clave"></td> <!-- placeholder es el texto que sale difuminado dentro del recuadro-->
				</tr>
				<tr>
					<td>nombre: </td>
					<td><input type="text" name="nombre" id="nombre" placeholder="nombre"></td> <!-- placeholder es el texto que sale difuminado dentro del recuadro-->
				</tr>
				<tr>
					<td>apellidos: </td>
					<td><input type="text" name="apellidos" id="apellidos" placeholder="apellidos"></td> <!-- placeholder es el texto que sale difuminado dentro del recuadro-->
				</tr>
				<tr>
					<td>Puesto:</td>
					<td><select name="puesto" id="puesto">
						<option value="">
						<?php		
							$sql="SELECT *
							FROM puestos as p 
							";

							$registros=mysqli_query($conexion,$sql);
							while($linea=mysqli_fetch_array($registros)){ 
									echo"<option value='$linea[idPuesto]'>$linea[Puesto]";
							}
						?>
						</select>
					</td>	
				</tr>
				<tr name"centrado" id="centrado">
					<td colspan="5"><input type="submit" value="Enviar">
					<a href="verusuarios.php"><input type="button" value="ver usuarios"></a></td>
				</tr>	
			</table>
		</form>
	</body>
</html>