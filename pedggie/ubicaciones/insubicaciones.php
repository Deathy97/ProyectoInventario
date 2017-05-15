<?php 
// Recuperamos datos del formulario
$Ubicacion=$_POST['Ubicacion'];
// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="INSERT INTO ubicaciones(Ubicacion) VALUES ('$Ubicacion')";
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formubicaciones.php");
?>