<html>
	<head>
		<title>vermateriales.php</title>
	</head>

	<body>
		<table align="center" width="50%">
			<tr>
				<td>DNI</td><td>Alumno</td><td>email</td><td>telefono</td><td>empresa</td><td>estudio</td><td>borrar</td>
			</tr>

			<?php
				include("04-conexion.php");
				//creamos la consulta
				$sql="SELECT a.dni, a.alumno, a.email, a.telefono, em.nombre, es.estudio
					FROM alumnos AS a, empresas AS em, estudio AS es
					WHERE a.nifempresa = em.nif	AND a.idestudios = es.idestudio;";
				//ejecutamos la consulta
				$registros=mysqli_query($conexion,$sql);
				//leemos el contenido de $registros
				while ($linea=mysqli_fetch_array($registros)) {
					echo "<tr>
							<td>$linea[dni]</td>
							<td>$linea[alumno]</td>
							<td>$linea[email]</td>
							<td>$linea[telefono]</td>
							<td>$linea[nombre]</td>
							<td>$linea[estudio]</td>
							<td><a href='04-borralumnos.php?clave=$linea[dni]'><img width='30' src='imagenes/papelera.png'</a></td>
						</tr>"; //el ? pasa el parametro 'clave' a la pagina borralumnos
					echo "<tr><td colspan='7'><hr></td>
						</tr>";
				}
				mysqli_close($conexion);
			?>
	</body>
</html>
