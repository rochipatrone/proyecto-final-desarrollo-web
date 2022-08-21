<?php

$nombre = $_POST ['name'];
$apellido = $_POST ['name'];
$email = $_POST ['mail']
$mensaje = $_POST ['message'];

$mensaje = "Este mensaje fue enviado por". $nombre . " \r\n";
$mensaje = "Su e-mail es: " . $email . " \r\n";
$mensaje = "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje = "Enviado el " . date('d/m/y', time());

$destinatario = "patronerocio@gmail.com";
$asunto = "Este mail fue enviado desde el Sitio Web Proyecto Final";

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header('Location:index.html');

?>