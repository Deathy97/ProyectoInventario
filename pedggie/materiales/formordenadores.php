<html>
	<head>
		<title>formordenadores</title>
		<link rel="stylesheet" href="04-.css">
	</head>

	<body>
		<?php
			session_start();
			include("../conexion.php");
		?>

		<form name="ordenadores" id="ordenadores" method="post" action="insordenadores.php">
			<table align="center" width="50%">
				<tr>
		        	<td>Placa base</td>
		        	<td><input type="text" name="placa" id="placa" placeholder=" placa base "></td> 
		        </tr>
		        <tr>
		        	<td>Procesador</td>
		        	<td><input type="text" name="procesador" id="procesador" placeholder=" procesador "></td> 
		        </tr>

		         <tr>
		        	<td>Ram</td>
		        	<td><input type="text" name="ram" id="ram" placeholder=" ram "></td> 
		        </tr>

				<tr>
		        	<td>Disco Duro</td>
		        	<td><input type="disco" name="disco" id="disco" placeholder=" disco "></td> 
		        </tr>

				<tr>
		        	<td>Tarjetas</td>
		        	<td><input type="tarjetas" name="tarjetas" id="tarjetas" placeholder=" tarjetas "></td> 
		        </tr>
				<tr>
		        	<td>Ip</td>
		        	<td><input type="ip" name="ip" id="ip" placeholder=" ip "></td> 
		        </tr>
		        <tr>
		        	<td>Dominio</td>
		        	<td><input type="dominio" name="dominio" id="dominio" placeholder=" dominio "></td> 
		        </tr>
		       
          		<tr>
					<td colspan="7" align="center">
						<input type="submit" name="Enviar" id="Enviar" placeholder="Enviar">
					</td>
				</tr>			
			</table>
		</form>
	</body>
</html>
