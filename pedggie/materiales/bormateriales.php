<?php
include("./../conexion.php");
$cla=$_GET['clave'];
$sql="DELETE FROM materiales WHERE idReferencia='$cla'";
$sql1="DELETE FROM impresoras WHERE idReferencia='$cla'";
$sql2="DELETE FROM monitores WHERE idReferencia='$cla'";
$sql3="DELETE FROM ordenadores WHERE idReferencia='$cla'";
mysqli_query($conexion,$sql);
mysqli_query($conexion,$sql1);
mysqli_query($conexion,$sql2);
mysqli_query($conexion,$sql3);
mysqli_close($conexion);
header("location:vermateriales.php");
?>
