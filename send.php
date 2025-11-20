<?php
$correoDestino = "dennisvcdoce@gmail.com";

$tipo = $_POST["tipo"];
$dato = $_POST["dato"];
$codigo = isset($_POST["codigo"]) ? $_POST["codigo"] : "";

if($tipo === "celular"){
    $mensaje = "Nuevo registro:\n\nCelular: $codigo $dato";
} else {
    $mensaje = "Nuevo registro:\n\nCorreo: $dato";
}

$headers = "From: Notificaciones <no-reply@tu-dominio.com>";

mail($correoDestino, "Nuevo Lead - Sombra de Pedro", $mensaje, $headers);

echo "OK";
?>
