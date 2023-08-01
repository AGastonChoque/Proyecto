<?php

$nombreNewslet = $_POST['Nombre'];
$emailNewslet = $_POST['Email'];

$mensaje = "Este mensaje fue enviado por " . $nombreNewslet . "\r\n";
$mensaje .= "Su email es " . $emailNewslet . "";

$correo = 'gastonchoque95@gmail.com';
$asunto = "Hey, haz recibido una suscripcion a tu newsletter de Servicios Confort";

header('location:../pages/forms/newsletter-form.html');

mail($correo, $asunto, $mensaje, $header);

?>