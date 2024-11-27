<?php
// Configuración SMTP
$smtpServer = "smtp.gmail.com";
$smtpPort = 587;
$username = "goyado4@gmail.com";
$password = "yadier2311";

// Destinatario y contenido del correo
$to = "yadiergores@gmail.com";
$subject = "PRUEBA";
$message = "ESTA ES UN PRUEBA";

// Función para enviar correos
function enviarCorreo($to, $subject, $message, $smtpServer, $smtpPort, $username, $password) {
    $socket = fsockopen($smtpServer, $smtpPort, $errno, $errstr, 30);
    if (!$socket) {
        return "Error de conexión: $errstr ($errno)";
    }

    // Protocolo SMTP
    fwrite($socket, "EHLO $smtpServer\r\n"); fgets($socket, 512);
    fwrite($socket, "AUTH LOGIN\r\n"); fgets($socket, 512);
    fwrite($socket, base64_encode($username) . "\r\n"); fgets($socket, 512);
    fwrite($socket, base64_encode($password) . "\r\n"); fgets($socket, 512);
    fwrite($socket, "MAIL FROM: <$username>\r\n"); fgets($socket, 512);
    fwrite($socket, "RCPT TO: <$to>\r\n"); fgets($socket, 512);
    fwrite($socket, "DATA\r\n"); fgets($socket, 512);

    // Encabezados y cuerpo del mensaje
    $headers = "From: $username\r\n";
    $data = $headers . "Subject: $subject\r\n\r\n" . $message . "\r\n.\r\n";
    fwrite($socket, $data); fgets($socket, 512);

    // Finalizar conexión
    fwrite($socket, "QUIT\r\n");
    fclose($socket);

    return "Correo enviado.";
}

// Enviar correo
echo enviarCorreo($to, $subject, $message, $smtpServer, $smtpPort, $username, $password);
?>
