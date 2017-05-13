<html>
	<head>
		<title>formmonitores</title>
		<link rel="stylesheet" href="04-.css">
	</head>

	<body>
		<?php
			session_start();
			include("../conexion.php");
		?>

		<form name="monitores" id="monitores" method="post" action="insmonitores.php">
			<table align="center" width="50%">
				<tr>
		        	<td>Tamaño pantalla en pulgadas: </td>
		        	<td><input type="text" name="tamaño" id="tamaño" placeholder=" ejemplo 23 "></td> 
		        </tr>

		        <tr>
		        	<td>Tipo</td>
		        	<td><select name="tipo" id="tipo">
							<option value="CTR">CTR</option>
	         				<option value="LCD">LCD</option>
	         				<option value="LED">LED</option>
	         				<option value="DLP">DLP</option>
	         				<option value="Otro">Otro</option>
        	 	   		</select>
          			</td> 
          		</tr>
          		<!--<tr>
					<td colspan="7" align="center">
						<input type="submit" name="Enviar" id="Enviar" placeholder="Enviar">
					</td>
				</tr>-->			
			</table>
		</form>
	</body>
</html>
