<?php 
// Recuperamos datos del formulario
$ap=$_POST['ap'];
$prov=$_POST['prov'];
$marca=$_POST['marca'];
$mod=$_POST['mod'];
$num=$_POST['num'];
$can=$_POST['can'];
$fec=$_POST['fec'];
$usuario=$_POST['usuario'];
$gar=$_POST['gar'];
$ub=$_POST['ub'];
$numI=$_POST['numI'];
$feB=$_POST['feB'];
$ob=$_POST['ob'];
// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="INSERT INTO materiales(Aparato, NifProveedor, idMarca,Modelo,NumSerie,Cantidad, FechaEntrada,DniUsuario,Garantia, idUbicacion, NumInterno, FechaBaja ,Observaciones) 
VALUES ('$ap','$prov','$marca','$mod','$num','$can','$fec','$usuario','$gar','$ub','$numI','$feB','$ob')";
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formmateriales.php");
?>