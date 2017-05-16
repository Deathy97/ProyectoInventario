<?php
include("./../conexion.php");
$cla=$_GET['clave'];
$sql="DELETE FROM incidencias WHERE idIncidencia='$cla'";
mysqli_query($conexion,$sql) or die ("Error en el sudoBorrado");
mysqli_close($conexion);
header("location:verincidencias.php");
?>