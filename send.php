<?php
$correoDestino = "dennisvcdoce@gmail.com";

$email = $_POST["email"];
$codigo = $_POST["codigo"];
$telefono = $_POST["telefono"];

$mensaje = "Nuevo registro:\n\nCorreo: $email\nTeléfono: $codigo $telefono";

$headers = "From: Notificaciones <no-reply@tu-dominio.com>";

mail($correoDestino, "Nuevo Lead - Sombra de Pedro", $mensaje, $headers);

echo "OK";
?>
