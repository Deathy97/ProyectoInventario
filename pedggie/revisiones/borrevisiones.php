<?php
include("conexion.php");
$cla=$_GET['clave'];
$sql="DELETE FROM revisiones WHERE idRevision='$cla'";
mysqli_query($conexion,$sql) or die ("Error en el borrado.");
mysqli_close($conexion);
header("location:verrevisiones.php");
?>