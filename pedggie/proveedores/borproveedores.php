<?php
include("./../conexion.php");
$cla=$_GET['clave'];
$sql="DELETE FROM proveedores WHERE nif='$cla'";
mysqli_query($conexion,$sql) or die ("Error en el sudoBorrado");
mysqli_close($conexion);
header("location:verproveedores.php");
?>