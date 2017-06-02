<?php 
// Recuperamos datos del formulario
$idIncidencia=$_POST['idIncidencia'];
$idMaterial=$_POST['idMaterial'];
$FechaIncidencia=$_POST['FechaIncidencia'];
$Incidencia=$_POST['Incidencia'];
$FechaSolucion=$_POST['FechaSolucion'];
$Solucion=$_POST['Solucion'];
$idUsuario=$_POST['idUsuario'];

// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="UPDATE incidencias SET idMaterial='$idMaterial', FechaIncidencia='$FechaIncidencia', Incidencia='$Incidencia', FechaSolucion='$FechaSolucion', Solucion='$Solucion', idUsuario='$idUsuario' WHERE idIncidencia='$idIncidencia'";

// ejecutamos la consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formincidencias.php");
?>