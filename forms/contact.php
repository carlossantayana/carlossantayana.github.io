<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "carlossantayanavicente@gmail.com"; // Reemplaza esto con tu dirección de correo
    $headers = "From: " . $email;

    $body = "Nombre: $name\nEmail: $email\nAsunto: $subject\nMensaje:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
