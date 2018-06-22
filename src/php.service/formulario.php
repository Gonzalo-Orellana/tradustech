<?php
// A continuación se capturan los datos especificados del formulario
$name=$_POST['name'];
$email=$_POST['email'];
$company=$_POST['company'];
$mensaje=$_POST['mensaje'];


// Debes indicar tu correo electrónico, eliminando el ejemplo
$to = "go.orellana.c@gmail.com";

// Puedes cambiar el asunto por defecto y que datos apareceran en el email que te llegue
$subject = "Nuevo contacto desde `tradustech.cl`";
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Empresa: " .$company ."\r\n Mensaje: " . $mensaje;

// Puedes cambiar el nombre del remitente que aparecerá en tu bandeja de entrada, la página de sucesión y el mensaje que ve el usuario al final.
$from = "Tradustech.cl";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
if(@mail($to,$subject,$message,$headers))
{
 print "<script>document.location.href='https://www.tradustech.cl/respuesta.html';</script>";
 
// Created by Future Tutorials
}else{
 echo "Error! Please try again.";
}
?>