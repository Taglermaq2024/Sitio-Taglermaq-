<!-- Validación Formulario de contacto -->
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


// Destinatarios del correo
$destino = ["rsanchez@taglermaq.cl", "dfernandez@taglermaq.cl", "jnino@taglermaq.cl"];




// Recibir datos del formulario
$segmento_sat = htmlspecialchars(trim($_POST['segmento_sat']));
$empresa = htmlspecialchars(trim($_POST['empresa']));
$rut = htmlspecialchars(trim($_POST['rut']));
$nombre_apellido = htmlspecialchars(trim($_POST['nombre_apellido']));
$email = htmlspecialchars(trim($_POST['email']));
$telefono = htmlspecialchars(trim($_POST['telefono']));
$solicitud = htmlspecialchars(trim($_POST['solicitud']));
$comentarios = htmlspecialchars(trim($_POST['comentarios']));





// Añade un campo oculto y un campo de tiempo para evitar Spam
$honeypot = $_POST['honeypot'];
$timestamp = $_POST['timestamp'];
$current_time = time();




// Lógica para reCaptcha Clave Secreta  
$recaptcha_response = $_POST['g-recaptcha-response'];
$secret_key = '6Ldjm3wqAAAAAMBer4L04inmJNq_gTKMlNUPI8pC';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query([
    'secret' => $secret_key,
    'response' => $recaptcha_response
]));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

$response_keys = json_decode($response, true);
if (intval($response_keys['success']) !== 1) {
    die('Error: Verifica que no eres un robot.');
}









// Validación honeypot (debería estar vacío)
if (!empty($honeypot)) {
    die('Spam detectado.');
}

// Validación del tiempo de envío del formulario (no menor de 5 segundos)
if ($current_time - $timestamp < 5) {
    die('Envío de formulario demasiado rápido.');
}

// Validar los datos del formulario
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Correo electrónico inválido.');
}




// Configurar instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'mail.taglermaq-ad.cl'; // Cambiar por tu servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'no-responder@taglermaq-ad.cl'; // Cambiar por tu correo
    $mail->Password = 'R&TX%@~)(s+{'; // Cambiar por tu contraseña
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPSecure = 'tls'; // Puedes cambiar a 'ssl' si es necesario
    $mail->Port = 587;

    // Configuración de UTF-8
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    // Configuración del correo
    $mail->setFrom('no-responder@taglermaq-ad.cl', 'Taglermaq');
    $mail->addReplyTo($email, $nombre_apellido);

    // Destinatarios
    foreach ($destino as $emailDestino) {
        $mail->addAddress($emailDestino);
    }


    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Nueva cotización (Formulario Genérico)';
    // Construcción del cuerpo del correo en formato de tabla HTML
    $mail->Body = "
        <html>
            <head>
                <style>
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    th, td {
                        padding: 8px;
                        text-align: left;
                        border-bottom: 1px solid #ddd;
                    }
                </style>
            </head>
            <body>
                <h2>Datos de la cotización:</h2>
                <table>

                    <tr>
                        <th>Cómo supiste de nosotros:</th>
                        <td>$segmento_sat</td>
                    </tr>
                    <tr>
                        <th>Nombre Empresa:</th>
                        <td>$empresa</td>
                    </tr>
                    <tr>
                        <th>RUT Empresa:</th>
                        <td>$rut</td>
                    </tr>
                    <tr>
                        <th>Nombre y Apellido:</th>
                        <td>$nombre_apellido</td>
                    </tr>
                    <tr>
                        <th>Correo Empresa:</th>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <th>Teléfono:</th>
                        <td>$telefono</td>
                    </tr>
                    <tr>
                        <th>Máquina cotizada, solicitud:</th>
                        <td>$solicitud</td>
                    </tr>
                </table>
            </body>
        </html>
    ";

    

    // Enviar correo
    $mail->send();
    echo 'El mensaje se ha enviado correctamente';
}   catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
?>