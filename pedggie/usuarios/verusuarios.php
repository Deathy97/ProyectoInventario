<html>
	<head>
		<title>verusuarios.php</title>
		<link rel="stylesheet" href="">

	</head>

	<body>
		<table align="center" width="80%">
			<tr>
				<td align="left"><a href="./../home.php">Volver</a></td>
				<br>
			</tr>

			<tr>
				<td>dni</td><td>clave</td><td>nombre</td><td>apellidos</td><td>puesto</td><td>borrar</td>
			</tr>

			<?php
				include("./../conexion.php");
				//creamos la consulta
				$sql="SELECT u.Dni,u.Clave,u.Usuario,u.Apellidos,p.Puesto
					FROM usuarios as u, puestos as p
					where u.idPuesto=p.idPuesto;";

				//ejecutamos la consulta
				$registros=mysqli_query($conexion,$sql);
				//leemos el contenido de $registros
				while ($linea=mysqli_fetch_array($registros)) {
					echo "<tr>
							<td>$linea[Dni]</td>
							<td>$linea[Clave]</td>
							<td>$linea[Usuario]</td>
							<td>$linea[Apellidos]</td>
							<td>$linea[Puesto]</td>
							<td><a href='borrarusuarios.php?clave=$linea[Dni]'><img width='30' src='imagenes/papelera.png'</a></td>
						</tr>"; //el ? pasa el parametro 'clave' a la pagina borralumnos
					echo "<tr><td colspan='6'><hr></td>
						</tr>";
				}
				mysqli_close($conexion);
			?>
	</body>
</html>
