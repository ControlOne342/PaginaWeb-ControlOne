<?php
// enviar.php - BLINDADO CONTRA SPAM + CONFIGURACIÓN SEGURA

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Cargar librerías
require 'librerias/PHPMailer-master/src/Exception.php';
require 'librerias/PHPMailer-master/src/PHPMailer.php';
require 'librerias/PHPMailer-master/src/SMTP.php';

// Cargar credenciales de forma segura
require 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- 1. CAPA DE SEGURIDAD (HONEYPOT) ---
    if (!empty($_POST['website_check'])) {
        die(); 
    }

    // --- 2. CAPA DE SEGURIDAD (LINK SPAM) ---
    $mensaje_raw = $_POST["mensaje"];
    if (strpos($mensaje_raw, 'http://') !== false || strpos($mensaje_raw, 'https://') !== false) {
        header("Location: contacto?status=error");
        die();
    }

    // --- PROCESAMIENTO NORMAL ---

    // Sanitización
    $nombre   = strip_tags(trim($_POST["nombre"]));
    $email    = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $empresa  = strip_tags(trim($_POST["empresa"]));
    $volumen  = strip_tags(trim($_POST["volumen"])); 
    $mensaje  = strip_tags(trim($_POST["mensaje"]));

    // Traducción volumen
    $volumen_texto = $volumen;
    switch ($volumen) {
        case 'menos_1000': $volumen_texto = "Menos de 1,000 piezas"; break;
        case '1000_5000':  $volumen_texto = "1,000 - 5,000 piezas"; break;
        case '5000_10000': $volumen_texto = "5,000 - 10,000 piezas"; break;
        case 'mas_10000':  $volumen_texto = "Más de 10,000 piezas"; break;
    }

    $mail = new PHPMailer(true);

    try {
        // --- CONFIGURACIÓN MOTOR GMAIL ---
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; 
        $mail->SMTPAuth   = true;
        
        // USO DE CREDENCIALES DESDE config.php
        $mail->Username   = SMTP_USERNAME; 
        $mail->Password   = SMTP_PASSWORD; 
        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     
        $mail->Port       = 587;                              

        // --- DESTINATARIOS ---
        $mail->setFrom(SMTP_USERNAME, 'Web Control One'); 
        
        // Destinatario definido en config.php
        $mail->addAddress(MAIL_TO_ADDRESS, MAIL_TO_NAME); 
        
        // Responder al cliente
        $mail->addReplyTo($email, $nombre); 

        // --- CONTENIDO ---
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = '🔥 Lead Web: ' . ($empresa ? $empresa : $nombre);
        
        $mail->Body    = "
            <div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;'>
                <h2 style='color: #0B2239; border-bottom: 2px solid #F5A623;'>Nueva Cotización (Vía Gmail)</h2>
                <ul style='list-style: none; padding: 0;'>
                    <li><strong>Cliente:</strong> $nombre</li>
                    <li><strong>Empresa:</strong> $empresa</li>
                    <li><strong>Correo:</strong> <a href='mailto:$email'>$email</a></li>
                    <li><strong>Teléfono:</strong> $telefono</li>
                    <li><strong>Volumen:</strong> $volumen_texto</li>
                </ul>
                <div style='background: white; padding: 15px; border-left: 4px solid #d35400;'>
                    <strong>Mensaje:</strong><br>$mensaje
                </div>
                <p style='font-size:12px; color:#888; text-align:center; margin-top:20px;'>Enviado seguramente a través de Google SMTP</p>
            </div>
        ";

        $mail->send();
        header("Location: contacto?status=success");
        exit();

    } catch (Exception $e) {
        // Loguear el error internamente en lugar de mostrarlo al usuario si es posible
        error_log("Error al enviar correo: " . $mail->ErrorInfo);
        header("Location: contacto?status=error"); // Redirigir a error genérico
        exit();
    }
} else {
    header("Location: contacto");
    exit();
}
?>