<?php 
// Recuperamos datos del formulario
$idMaterial=$_POST['idMaterial'];
$FechaIncidencia=$_POST['FechaIncidencia'];
$Incidencia=$_POST['Incidencia'];
$FechaSolucion=$_POST['FechaSolucion'];
$Solucion=$_POST['Solucion'];
$idUsuario=$_POST['idUsuario'];

//Emails
$correos = array("jorgepimpinela8@gmail.com", "rafatorrea@gmail.com","hisrubio51@gmail.com");
$nombres = array("Rafa","Miguel","");


/*$sql1="SELECT Email FROM usuarios WHERE idPuesto=1"
$correo = mysqli_query($conexion, $sql1)or die("Error en la consulta de insercion $sql");
$num = mysqli_num_rows($sql1);
	
	if($num > 0){
		for ($c=0; $c <$num ; $c++) { 
			$verCorreos = mysqli_fetch_array($sql1);
			$correos[$c] = $verCorreos['Email'];
		}

}*/


// conectamos con la BD
include("./../conexion.php");
// creamos consulta
$sql="INSERT INTO incidencias(idMaterial, FechaIncidencia, Incidencia, FechaSolucion, Solucion, idUsuario) VALUES ('$idMaterial', '$FechaIncidencia', '$Incidencia', '$FechaSolucion', '$Solucion', '$idUsuario')";
//mail

require '/xampp/htdocs/inventario/incidencias/PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                             

$mail->isSMTP();                                     
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                               
$mail->Username = 'inventariosalesianos@gmail.com';                
$mail->Password = 'IVSZ1h12';                           
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;                                    

$mail->setFrom('inventariosalesianos@gmail.com', 'Incidencias');// aqui se pone el nombre que aparece como emisor del correo(en el lugar de Incidencias)

$max = sizeof($correos);
for ($i = 0; $i < $max; $i++)
$mail->addAddress($correos[$i],$nombres[$i] ); //Direccion del correo que recive el mensaje, creo que se pueden poner varios seguidos ('primero@g.com','segundo@g.com',nombre del receptor)

$mail->Subject = 'Incidencia';//este es el asunto
$mail->Body    = $Incidencia; //Body del Correo

//este if creo que sobra pero por si acaso lo dejo :D
if(!$mail->send()) {
    echo 'Error, mensaje no enviado';
    echo 'Error del mensaje: ' . $mail->ErrorInfo;
} else {
    echo 'El mensaje se ha enviado correctamente';
    
}
// ejecutamosla consulta
mysqli_query($conexion, $sql) or die("Error en la consulta de insercion $sql");
mysqli_close($conexion);
//
header("location:formincidencias.php");
?>