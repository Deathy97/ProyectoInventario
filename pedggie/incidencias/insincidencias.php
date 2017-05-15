<?php 
// Recuperamos datos del formulario
$idMaterial=$_POST['idMaterial'];
$FechaIncidencia=$_POST['FechaIncidencia'];
$Incidencia=$_POST['Incidencia'];
$FechaSolucion=$_POST['FechaSolucion'];
$Solucion=$_POST['Solucion'];
$idUsuario=$_POST['idUsuario'];
// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="INSERT INTO incidencias(idMaterial, FechaIncidencia, Incidencia, FechaSolucion, Solucion, idUsuario) VALUES ('$idMaterial', '$FechaIncidencia', '$Incidencia', '$FechaSolucion', '$Solucion', '$idUsuario')";
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formincidencias.php");
?>