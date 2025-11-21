<?php
/**
 * Script de procesamiento de formulario de contacto para Control One.
 * Maneja la sanitización, validación y envío de correos.
 */

// Configuración
$destinatario = "ventas@controlone.com"; // Correo de destino
$remitente_sistema = "noreply@controlone.com"; // Debe ser un correo válido del dominio

// Verificar método de solicitud
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Sanitización y Validación de Entradas
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
    $empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
    $volumen = filter_input(INPUT_POST, 'volumen', FILTER_SANITIZE_STRING);
    $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_STRING);

    // Validar campos obligatorios
    if (empty($nombre) || empty($email) || empty($mensaje) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Redirigir con error si faltan datos o email inválido
        header("Location: contacto.php?status=error&msg=invalid_input");
        exit;
    }

    // 2. Construcción del Correo
    $asunto = "Nuevo Lead Web - " . ($empresa ? $empresa : $nombre);

    $cuerpo = "
    <html>
    <head>
        <title>Nuevo Lead desde Sitio Web</title>
    </head>
    <body>
        <h2 style='color: #0B2239;'>Nuevo Mensaje de Contacto</h2>
        <p>Se ha recibido una nueva solicitud de cotización o información desde el sitio web.</p>
        
        <table style='border-collapse: collapse; width: 100%; max-width: 600px;'>
            <tr style='background-color: #f4f6f8;'>
                <td style='padding: 10px; font-weight: bold; border-bottom: 1px solid #ddd;'>Nombre:</td>
                <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$nombre</td>
            </tr>
            <tr>
                <td style='padding: 10px; font-weight: bold; border-bottom: 1px solid #ddd;'>Email:</td>
                <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$email</td>
            </tr>
            <tr style='background-color: #f4f6f8;'>
                <td style='padding: 10px; font-weight: bold; border-bottom: 1px solid #ddd;'>Teléfono:</td>
                <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$telefono</td>
            </tr>
            <tr>
                <td style='padding: 10px; font-weight: bold; border-bottom: 1px solid #ddd;'>Empresa:</td>
                <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$empresa</td>
            </tr>
            <tr style='background-color: #f4f6f8;'>
                <td style='padding: 10px; font-weight: bold; border-bottom: 1px solid #ddd;'>Volumen Estimado:</td>
                <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$volumen</td>
            </tr>
            <tr>
                <td style='padding: 10px; font-weight: bold; border-bottom: 1px solid #ddd;'>Mensaje:</td>
                <td style='padding: 10px; border-bottom: 1px solid #ddd;'>$mensaje</td>
            </tr>
        </table>
        
        <p style='font-size: 12px; color: #777; margin-top: 20px;'>Este correo fue enviado automáticamente desde el formulario de contacto de Control One.</p>
    </body>
    </html>
    ";

    // 3. Headers para evitar SPAM y formato HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: Control One Web <$remitente_sistema>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // 4. Envío del correo
    $envio = mail($destinatario, $asunto, $cuerpo, $headers);

    // 5. Redirección según resultado
    if ($envio) {
        header("Location: contacto.php?status=success");
    } else {
        header("Location: contacto.php?status=error&msg=server_error");
    }
    exit;

} else {
    // Acceso directo al script no permitido
    header("Location: contacto.php");
    exit;
}
?>
