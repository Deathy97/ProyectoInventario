<?php
session_start();
//recuperar datos del formulario
$dni=$_POST['dni'];
$cla=$_POST['clave'];

include("conexion.php");

//localizar el dni en la tabla usuarios
$sql="SELECT * FROM usuarios WHERE dni='$dni'";
$registros=mysqli_query($conexion, $sql);
$total=mysqli_num_rows($registros);
if($total==0){
	echo"<H2>USUARIO NO EXISTE</H2>pulse<a href='index.php'>aqui</a>para continuar.";
}else{
	while ($linea=mysqli_fetch_array($registros)) {
		if ($linea['Clave']==$cla) {
			$_SESSION['Dni']=$linea['Dni'];
			$_SESSION['Usuario']=$linea['usuario'];
			header("location:home.php");
		}else{
			echo"<H2>CLAVE INCORRECTA</H2>pulse<a href='index.php'>aqui</a>para continuar.";
		}
	}
}
?>