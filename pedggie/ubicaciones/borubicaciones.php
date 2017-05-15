<?php
include("./../conexion.php");
$cla=$_GET['clave'];
$sql="DELETE FROM ubicaciones WHERE idUbicacion='$cla'";
mysqli_query($conexion,$sql) or die ("Error en el sudoBorrado");
mysqli_close($conexion);
header("location:verubicaciones.php");
?>