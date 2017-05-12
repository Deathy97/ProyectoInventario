<?php 
// Recuperamos datos del formulario
$idSoftware=$_POST['idSoftware'];
$Descripcion=$_POST['Descripcion'];
$TipoLicencia=$_POST['TipoLicencia'];
$FechaFin=$_POST['FechaFin'];
$Observaciones=$_POST['Observaciones'];
// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="INSERT INTO software(idSoftware, Descripcion, TipoLicencia, FechaFin, Observaciones) VALUES ('$idSoftware','$Descripcion','$TipoLicencia','$FechaFin','$Observaciones')";
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formsoftware.php");
?>