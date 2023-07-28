<?php

$nombreFormContact = $_POST ["Nombre"]
$emailFormContact = $_POST ["Email"]
$telefonoFormContact = $_POST ["Telefono"]
$mensajeFormContact = $_POST ["Mensaje"]

$mensaje = "Este mensaje fue enviado por $nombreFormContact : \r\n";
$mensaje = "$mensajeFormContact \r\n";
$mensaje = "Puedes contactarlo mediande su email: $emailFormContact o su telefono $telefonoFormContact \r\n";
$mensaje = "Enviado el "date("d/m/Y", time())"

$micorreo = "gastonchoque95@gmail.com";
$asunto = "Hey, $nombreFormContact te ha dejado un mensaje"

mail($micorreo, $asunto utf8_decode($mensaje), $header);

header('location: "../pages/contact-form")

?>