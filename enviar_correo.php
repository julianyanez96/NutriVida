<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];
  
  // Configuración del correo electrónico
  $destinatario = "florencia_lombardi@hotmail.com";  // Reemplaza con tu dirección de correo electrónico
  $asunto = "Nuevo mensaje de contacto";
  $cuerpo = "Nombre: $nombre\n";
  $cuerpo .= "Correo electrónico: $email\n";
  $cuerpo .= "Mensaje:\n$mensaje\n";
  
  // Envío del correo electrónico
  $enviado = mail($destinatario, $asunto, $cuerpo);
  
  if ($enviado) {
    echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
  } else {
    echo "Hubo un error al enviar el mensaje. Por favor, inténtalo nuevamente.";
  }
}
?>
