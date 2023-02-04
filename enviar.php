<?php
$nombre = $_POST['nombre'];
$mail = $_POST['correo'];
$comentarios = $_POST['comentarios'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['comentarios'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = '11emacabral@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:gracias.html");
?>