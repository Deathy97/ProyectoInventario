<?php 
// Recuperamos datos del formulario
$nif=$_POST['nif'];
$prov=$_POST['prov'];
// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="INSERT INTO proveedores(Nif, Proveedor) VALUES ('$nif','$prov')";
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formproveedores.php");
?>