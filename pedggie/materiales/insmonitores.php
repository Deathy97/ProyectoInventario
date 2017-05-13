
<?php
	//recuperamos datos del formulario
	$tam=$_POST['tamaño']; 
	$tip=$_POST['tipo'];  


	//conectamos con la base de datos
	include("./../conexion.php");

	//creamos consulta
	$sql="INSERT INTO monitores(tamaño,tipo) values('$tam','$tip')";

	//cuidado al pasar los datos porque hay algunos de tipo texto entonces hay que pasar comillas para que se guarde como texto

	//ejecutamos la consulta
	mysqli_set_charset($conexion,"utf8");//cuando el campo de la base lleva ñs o cosas raras
	mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql"); //no hay contenedor porque no esta catalogada como seleccion sino como accion
	//terminar la conexion

	mysqli_close($conexion);
	//nos redirige a la pagina que le inidcamos
	
	header("location: formmateriales.php");  
?>
