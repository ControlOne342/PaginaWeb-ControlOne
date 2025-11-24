<?php
// enviar.php - Script de envío seguro para Control One

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// 1. CARGAR LAS LIBRERÍAS
require 'librerias/PHPMailer-master/src/Exception.php';
require 'librerias/PHPMailer-master/src/PHPMailer.php';
require 'librerias/PHPMailer-master/src/SMTP.php';

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. RECIBIR DATOS DEL FORMULARIO
    $nombre   = strip_tags(trim($_POST["nombre"]));
    $email    = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $empresa  = strip_tags(trim($_POST["empresa"]));
    $volumen  = strip_tags(trim($_POST["volumen"])); 
    $mensaje  = strip_tags(trim($_POST["mensaje"]));

    // Traducción del volumen
    $volumen_texto = $volumen;
    if($volumen == 'menos_1000') $volumen_texto = "Menos de 1,000 piezas";
    if($volumen == '1000_5000')  $volumen_texto = "1,000 - 5,000 piezas";
    if($volumen == '5000_10000') $volumen_texto = "5,000 - 10,000 piezas";
    if($volumen == 'mas_10000')  $volumen_texto = "Más de 10,000 piezas";

    // Iniciar PHPMailer
    $mail = new PHPMailer(true);

    try {
        // 3. CONFIGURACIÓN DEL SERVIDOR (HostGator)
        $mail->isSMTP();
        $mail->Host       = 'mail.controlone.com.mx'; 
        $mail->SMTPAuth   = true;
        $mail->Username   = 'socialmedia@controlone.com.mx'; 
        
        // OJO: Uso comillas dobles aquí por los caracteres especiales de tu clave
        $mail->Password   = "K'>Ec)/(P]Dl4@p";            
        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;     
        $mail->Port       = 465;                             

        // 4. DESTINATARIOS
        $mail->setFrom('socialmedia@controlone.com.mx', 'Web Control One'); 
        
        // AQUÍ PON EL CORREO DONDE QUIERES RECIBIR LOS LEADS (Puede ser el mismo)
        $mail->addAddress('socialmedia@controlone.com.mx', 'Ventas Control One'); 
        
        $mail->addReplyTo($email, $nombre); 

        // 5. CONTENIDO DEL CORREO
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = '🔥 Lead Web: ' . ($empresa ? $empresa : $nombre);
        
        $mail->Body    = "
            <div style='font-family: Arial, sans-serif; color: #333; border: 1px solid #ddd; padding: 20px; border-radius: 5px;'>
                <h2 style='color: #0B2239; border-bottom: 2px solid #F5A623; padding-bottom: 10px; margin-top: 0;'>Nueva Solicitud de Cotización</h2>
                <p>Detalles del prospecto capturado:</p>
                <table width='100%' style='border-collapse: collapse;'>
                    <tr><td style='padding: 8px; font-weight:bold; width: 150px;'>Nombre:</td><td>$nombre</td></tr>
                    <tr><td style='padding: 8px; font-weight:bold; background:#f9f9f9;'>Empresa:</td><td style='background:#f9f9f9;'>$empresa</td></tr>
                    <tr><td style='padding: 8px; font-weight:bold;'>Correo:</td><td><a href='mailto:$email' style='color:#F5A623;'>$email</a></td></tr>
                    <tr><td style='padding: 8px; font-weight:bold; background:#f9f9f9;'>Teléfono:</td><td style='background:#f9f9f9;'>$telefono</td></tr>
                    <tr><td style='padding: 8px; font-weight:bold;'>Volumen:</td><td style='color: #d35400; font-weight:bold;'>$volumen_texto</td></tr>
                </table>
                <div style='margin-top: 20px; background: #f4f6f8; padding: 15px; border-radius: 5px;'>
                    <strong>Mensaje / Requerimiento:</strong><br>
                    $mensaje
                </div>
                <p style='font-size: 12px; color: #999; margin-top: 20px; text-align: center;'>Enviado desde ControlOne.com.mx</p>
            </div>
        ";

        $mail->send();
        
        // Éxito
        header("Location: contacto.php?status=success");
        exit();

    } catch (Exception $e) {
        // Error
        header("Location: contacto.php?status=error");
        exit();
    }
} else {
    header("Location: contacto.php");
    exit();
}
?>