<?php

$nombreFC = $_POST['NombreFC'];
$emailFC = $_POST['EmailFC'];
$telefonoFC = $_POST['TelefonoFC'];
$mensajeFC = $_POST['MensajeFC'];

$mensaje = "Este mensaje fue enviado por " . $nombreFC . ":\r\n";
$mensaje .= "" . $mensajeFC . "\r\n";
$mensaje .= "Sus medios de contacto son: \r\n";
$mensaje .= "Email: " . $emailFC . "\r\n";
$mensaje .= "Telefono: " . $telefonoFC . "";

$correo = 'gastonchoque95@gmail.com';
$asunto = "Tienes un mensaje nuevo desde la web de Servicios Confort";

header('location:../pages/forms/contacto-form.html');

mail($correo, $asunto, $mensaje, $header);
?>