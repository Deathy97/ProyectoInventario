<?php 
// Recuperamos datos del formulario
$num=$_POST['NumInterno'];
$fIn=$_POST['FechaIncidencia'];
$inc=$_POST['Incidencia'];
$fSo=$_POST['FechaSolucion'];
$sol=$_POST['Solucion'];
// conectamos con la BD
include("conexion.php");
// creamos consulta
$sql="INSERT INTO incidencias(idMaterial, FechaIncidencia, Incidencia, FechaSolucion, Solucion) VALUES ('$num', '$fIn', '$inc', '$fSo', '$sol')";
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formIncidencias.php");
?>