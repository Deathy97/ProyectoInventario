<?php 
// Recuperamos datos del formulario
$ubic=$_POST['ubicaciones'];
// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="INSERT INTO ubicaciones(Ubicacion) VALUES ('$ubic')";
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formubicaciones.php");
?>