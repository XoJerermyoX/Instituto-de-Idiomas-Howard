<?php

//Declarando variable de los datos

$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$telefono = $_POST ['telefono'];
$email = $_POST ['email'];
$nacionalidad = $_POST ['nacionalidad'];
$academic = $_POST ['academic'];
$sexo1 = $_POST ['sexo1'];
$sexo2 = $_POST ['sexo2'];
$mensaje = $_POST ['mensaje'];

//Declarando receptor

$destinatario = "jerermy06@gmail.com";
$asunto = "Instituto de Idiomas Howard";

//Mensaje a enviar

$cuerpo = "De: $nombre \n\n";
$cuerpo = "De: $apellido \n\n";
$cuerpo = " $telefono \n\n";
$cuerpo = " $email \n\n";
$cuerpo = " $nacionalidad \n\n";
$cuerpo = " $academic \n\n";
$cuerpo = " $sexo1 \n\n";
$cuerpo = " $sexo2 \n\n";
$cuerpo = " $mensaje \n\n";

//Mensaje a enviar

mail($destinatario, $asunto, $cuerpo);
header('Location:contact.html');

//Base de dato



// $enlace = @mysql_connect('localhost', 'root', '');

// if (!$enlace){
// 	echo "Se produjo un error al conectar con el servidor";
// } else {
// 	$base= mysql_select_db('howard');
// 	if(!$base){
// 		echo "No se ha encontrado la base de datos";
// 	}
// }

// $nombre = $_POST ['nombre'];
// $apellido = $_POST ['apellido'];
// $email = $_POST ['email'];
// $mensaje = $_POST ['mensaje'];


// $insertar = "INSERT INTO contactanos VALUES
// ('$nombre', '$apellido', '$email', '$mensaje')";

// $ejecutar= mysql_query($insertar);
// 	if(!$ejecutar){
// 		echo "Hubo un error inesperado";
// 	} else {
// 		echo "Datos guardados correctamente";
// 	}











?>