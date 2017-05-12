<?php 
// Recuperamos datos del formulario
$idMaterial=$_POST['idMaterial'];
$FechaRevision=$_POST['FechaRevision'];
$hora=$_POST['hora'];
$idUsuario=$_POST['idUsuario'];
$Observaciones=$_POST['Observaciones'];
// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="INSERT INTO revisiones(idMaterial, FechaRevision, hora, idUsuario, Observaciones) VALUES ('$idMaterial','$FechaRevision','$hora','$idUsuario','$Observaciones')";
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formrevisiones.php");
?>