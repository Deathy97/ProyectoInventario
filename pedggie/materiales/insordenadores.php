
<?php
	//recuperamos datos del formulario
	$pla=$_POST['placa']; 
	$pro=$_POST['procesador'];  
	$ram=$_POST['ram']; 
	$dis=$_POST['disco']; 
	$tar=$_POST['tarjetas']; 
	$ip=$_POST['ip']; 
	$dom=$_POST['dominio']; 


	//conectamos con la base de datos
	include("./../conexion.php");

	//creamos consulta
	$sql="INSERT INTO ordenadores(Placa,Procesador,Ram,DiscoDuro,Tarjetas,Ip,Dominio) values('$pla','$pro','$ram','$dis','$tar','$ip','$dom')";

	//cuidado al pasar los datos porque hay algunos de tipo texto entonces hay que pasar comillas para que se guarde como texto

	//ejecutamos la consulta
	//mysqli_set_charset($conexion,"utf8");//cuando el campo de la base lleva ñs o cosas raras
	mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql"); //no hay contenedor porque no esta catalogada como seleccion sino como accion
	//terminar la conexion

	mysqli_close($conexion);
	//nos redirige a la pagina que le inidcamos
	
	header("location: formmateriales.php");  
?>
