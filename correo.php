<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Configura el correo electr�nico
    $to = "claudiaalba@misena.edu.co";
    $subject = "Nuevo mensaje de contacto";
    $headers = "From: $email";

    // Construye el cuerpo del mensaje
    $body = "Nombre: $nombre\n";
    $body .= "Correo Electr�nico: $email\n\n";
    $body .= "Mensaje:\n$message";

    // Env�a el correo electr�nico
    mail($to, $subject, $body, $headers);
}
?>
