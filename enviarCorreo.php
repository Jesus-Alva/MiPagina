<?
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$telefono = $_POST['tel'];
$mensaje = $_POST['mensaje'];

$header = 'Enviado desde Mi WEB';

$mensaje = "Mnesaje enviado por: " . $_POST['nombre'] . "\r\n";
$mensaje .= "Su e-mail es: " . $_POST['mail'] . "\r\n";
$mensaje .= "Telefono de contacto: " . $_POST['tel'] . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";

$para = 'jesusalvabustamante@gmail.com';
$asunto = 'Consulta de ' . $_POST['nombre'] ;

mail($para , $asunto, $mensaje, $header);

header("Location:index.html");

?>