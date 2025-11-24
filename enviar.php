<?php
// enviar.php - CONFIGURACIÓN GMAIL (INFALIBLE)

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'librerias/PHPMailer-master/src/Exception.php';
require 'librerias/PHPMailer-master/src/PHPMailer.php';
require 'librerias/PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitización
    $nombre   = strip_tags(trim($_POST["nombre"]));
    $email    = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $empresa  = strip_tags(trim($_POST["empresa"]));
    $volumen  = strip_tags(trim($_POST["volumen"])); 
    $mensaje  = strip_tags(trim($_POST["mensaje"]));

    // Traducción volumen
    $volumen_texto = $volumen;
    if($volumen == 'menos_1000') $volumen_texto = "Menos de 1,000 piezas";
    if($volumen == '1000_5000')  $volumen_texto = "1,000 - 5,000 piezas";
    if($volumen == '5000_10000') $volumen_texto = "5,000 - 10,000 piezas";
    if($volumen == 'mas_10000')  $volumen_texto = "Más de 10,000 piezas";

    $mail = new PHPMailer(true);

    try {
        // --- CONFIGURACIÓN MOTOR GMAIL ---
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; 
        $mail->SMTPAuth   = true;
        
        // 1. TU GMAIL (El que envía)
        $mail->Username   = 'controlone342@gmail.com'; 
        
        // 2. TU CONTRASEÑA DE APLICACIÓN (Sin espacios)
        $mail->Password   = 'gofrpjkrwlodviyk'; 
        
        // Gmail usa TLS en el puerto 587
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     
        $mail->Port       = 587;                             

        // --- DESTINATARIOS ---
        // Gmail exige que el "From" sea tu misma cuenta
        $mail->setFrom('controlone342@gmail.com', 'Web Control One'); 
        
        // AQUÍ LLEGA EL AVISO (A tu correo corporativo)
        $mail->addAddress('socialmedia@controlone.com.mx', 'Ventas Control One'); 
        
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
        header("Location: contacto.php?status=success");
        exit();

    } catch (Exception $e) {
        // Si falla Gmail, es rarísimo, pero mostramos error
        echo "<h1>Error Gmail:</h1>";
        echo "Mensaje técnico: " . $mail->ErrorInfo;
        exit();
    }
} else {
    header("Location: contacto.php");
    exit();
}
?>