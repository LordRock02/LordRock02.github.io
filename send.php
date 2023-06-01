<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$empresa = $_POST['message'];
$subject = $_POST['subject']

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'irogergt02@gmail.com';

mail($para, $subject, utf8_decode($mensaje), $header);

header("Location:index.html");
?>