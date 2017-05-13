<?php 
// Recuperamos datos del formulario
$nif=$_POST['tip'];
$prov=$_POST['con'];
// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="INSERT INTO impresoras(Tipo, Consumible) VALUES ('$tip','$con')";
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formimpresoras.php");
?>