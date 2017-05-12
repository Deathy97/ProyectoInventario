<?php 
// Recuperamos datos del formulario
$nom=$_POST['nom'];
// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="INSERT INTO marcas(Marca) VALUES ('$nom')";
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formmarcas.php");
?>