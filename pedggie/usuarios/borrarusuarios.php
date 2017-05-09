<?php
include("conexion.php");

$cla=$_GET['clave'];
$sql="DELETE from usuarios where dni='$cla'";
mysqli_query($conexion, $sql) or die ("Error en el borrado");

mysqli_close($conexion);
header("location: usuarios/verusuarios.php");

?>