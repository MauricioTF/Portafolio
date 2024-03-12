<?php
// Recoger los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Dirección de correo electrónico donde quieres recibir los mensajes
$to = "torresfernandezmauricio18@gmail.com"; // Reemplaza con tu dirección de correo electrónico

// Asunto del correo electrónico
$subject = "Mensaje de contacto de $name";

// Contenido del correo electrónico
$body = "Has recibido un mensaje de contacto de $name ($email):\n\n";
$body .= "Mensaje:\n$message";

// Cabeceras del correo electrónico
$headers = "From: $name <$email>";

// Enviar el correo electrónico
if (mail($to, $subject, $body, $headers)) {
    // Si se envía correctamente, devolver un código de estado 200 (éxito)
    http_response_code(200);
    echo "¡Gracias por tu mensaje! Te responderemos lo antes posible.";
} else {
    // Si hay un error al enviar, devolver un código de estado 500 (error interno del servidor)
    http_response_code(500);
    echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
}
?>
