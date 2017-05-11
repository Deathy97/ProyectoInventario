<?php
	//recuperamos datos del formulario
	$dni=$_POST['dni']; 
	$cla=$_POST['clave'];  
	$nom=$_POST['nombre']; 
	$ape=$_POST['apellidos']; 
	$pue=$_POST['puesto'];  //nombres de input o select del formulario

	//conectamos con la base de datos
	include("conexion.php");

	//creamos consulta
	$sql="INSERT INTO usuarios(Dni,Clave,Usuario,Apellidos,idPuesto) values('$dni','$cla','$nom','$ape','$pue')";

	//cuidado al pasar los datos porque hay algunos de tipo texto entonces hay que pasar comillas para que se guarde como texto

	//ejecutamos la consulta

	mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql"); //no hay contenedor porque no esta catalogada como seleccion sino como accion
	//terminar la conexion

	mysqli_close($conexion);
	//nos redirige a la pagina que le inidcamos
	
	header("location: formusuarios.php"); 
?>
