<?php
header("Content-type: text/html; charset=\"utf-8\"");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$comentario = $_POST['comentario'];

$header = 'From: ' . $mail . " \r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= 'Content-Type: text/plain';

$mensaje = 'Este mensaje fue enviado por ' . $nombre . $apellido . ", \r\n";
$mensaje .= 'Su e-mail es: ' . $mail . " \r\n";
$mensaje .= 'Asunto: ' . $asunto . " \r\n";
$mensaje .= 'Teléfono: ' . $telefono . " \r\n";
$mensaje .= 'Mensaje: ' . $comentario . " \r\n";
$mensaje .= 'Enviado el ' . date('d/m/Y', time());

$para = 'ericwaje03@gmail.com';
$asunto = 'Mensaje del sitio web';

if (mail($para, $asunto, utf8_decode($mensaje), $header)) {
    echo "<script type= 'text/javascript'> alert ('Tu mensaje ha sido enviado correctamente');</script>";
}
echo "<script type= 'text/javascript'> window.location.href= 'index.html' ;</script>";

?>
