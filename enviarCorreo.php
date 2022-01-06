<?
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$telefono = $_POST['tel'];
$mensaje = $_POST['mensaje'];

$header = 'Enviado desde Mi WEB';

$mensaje = "Mnesaje enviado por: " . $nombre . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . "\r\n";
$mensaje .= "Telefono de contacto: " . $telefono . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";

$para = 'jesusalvabustamante@gmail.com';
$asunto = 'Consula de ' . $nombre ;

mail($para , $asunto, $mensaje, $header);

header("Location:index.html");

?>