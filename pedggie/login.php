<?php
session_start();
//recuperar datos del formulario
$dni=$_POST['dni'];
$cla=$_POST['clave'];

include("conexion.php");

//localizar el dni en la tabla usuarios
$sql="SELECT u.*,p.*
	from usuarios as u, puestos as p
	where u.idPuesto=p.idPuesto and dni='$dni'";

$registros=mysqli_query($conexion, $sql);
$total=mysqli_num_rows($registros);

if($total==0){
		echo "<h2>USUARIO NO EXISTE</h2> Pulse <a href='index.php'>aqui</a> para continuar.";
	}else{
		while ($linea=mysqli_fetch_array($registros)) {
			if($linea['Clave']==$cla){
				//variables de sesion, el valor perdura mientras el usuario navega y hay que poner al principio session_start();
				$_SESSION['dniusuario']=$linea['Dni']; 
				$_SESSION['nombreusuario']=$linea['Usuario'];

				if($linea['Puesto']=='Encargado')
					header("location:home.php");
				else
					if($linea['Puesto']=='Sat')
						header("location:homeSat.php");
					else
						if($linea['Puesto']=='Profesor')
							header("location:homeProf.php");
			}else{
				echo "<h2>CLAVE INCORRECTA</h2> Pulse <a href='index.php'>aqui</a> para continuar.";
			}
		}
	}
?>