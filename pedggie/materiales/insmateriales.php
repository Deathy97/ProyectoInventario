<?php 
//Materiales
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
$numero=$_GET['numero'];


// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="INSERT INTO materiales(Aparato, NifProveedor, idMarca,Modelo,NumSerie,Cantidad, FechaEntrada,DniUsuario,Garantia, idUbicacion, NumInterno, FechaBaja ,Observaciones) 
VALUES ('$ap','$prov','$marca','$mod','$num','$can','$fec','$usuario','$gar','$ub','$numI','$feB','$ob')";
// ejecutamosla consulta

mysqli_set_charset($conexion,"utf8");
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
$siguiente = mysqli_insert_id($conexion);

if($numero==1){
	$tip=$_POST['tip'];
	$con=$_POST['con'];

	$sql1="INSERT INTO impresoras(idReferencia,Tipo, Consumible) VALUES ($siguiente,'$tip','$con')";
	mysqli_query($conexion, $sql1) or die("Error en la consulta de insercion $sql1");	
}
if($numero==2){
	$tam=$_POST['tamaño']; 
	$tip=$_POST['tipo'];  

	$sql2="INSERT INTO monitores(idReferencia,tamaño,tipo) values($siguiente,'$tam','$tip')";
	mysqli_query($conexion, $sql2) or die("Error en la consulta de insercion $sql2");	
}
if($numero==3){
	$pla=$_POST['placa']; 
	$pro=$_POST['procesador'];  
	$ram=$_POST['ram']; 
	$dis=$_POST['disco']; 
	$tar=$_POST['tarjetas']; 
	$ip=$_POST['ip']; 
	$dom=$_POST['dominio']; 

	$sql3="INSERT INTO ordenadores(idReferencia,Placa,Procesador,Ram,DiscoDuro,Tarjetas,Ip,Dominio) values($siguiente,'$pla','$pro','$ram','$dis','$tar','$ip','$dom')";
	mysqli_query($conexion, $sql3) or die("Error en la consulta de insercion $sql3");	
}
mysqli_close($conexion);

header("location:formmateriales.php");
?>