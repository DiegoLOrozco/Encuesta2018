<?php 
error_reporting(0); 
$Edad = $_POST['Edad']; 
$Sexo= $_POST['Sexo']; 
$yn = $_POST['yn']; 
$Candidatos=$_POST['Candidatos']; 
$Email=$_POST['Email']; 
$usuario='degolo100@gmail.com'

$header = 'From: ' . $Usuario ."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Usted tiene " . $Edad . " años"; 
$mensaje .= "Del sexo: " . $Sexo. " \r\n"; 

$asunto = 'Encuesta presidencial'; 

mail($Email, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 

?> 