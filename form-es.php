<?php

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;


if(isset($_POST['enviar'])){
    if(!empty($_POST['contact-name']) &&
    !empty($_POST['contact-email']) &&
    !empty($_POST['message'])) 
    {

    


$nombre = $_POST['contact-name'];
$correo = $_POST['contact-email'];
$mensaje = $_POST['message'];
$destinatario = "hpreyesdev@gmail.com";
$asunto = "Contacto desde la web";

$cuerpo = '
    <html>
        <head>
            <title>Prueba de envío de correo</title>
        </head>
        <body>
            <h1>Correo recibido</h1>
            <p>Nombre: '.$nombre.'</p>
            <p>Comentario: '.$mensaje.'</p>
        </body>
    </html>
';


$headers ="MIME-Version: 1.0\r\n" ;
$headers .= "Content-type: text/html; charset=UTF8\r\n";

//dirección remitente

$headers .="FROM: $nombre <$correo>\r\n";

$mailer = new PHPMailer();

$mailer ->setFrom($correo, $nombre);
$mailer ->addAddress($destinatario);
$mailer ->Subject = $asunto;
$mailer->msgHTML($cuerpo);
$mailer ->AltBody=strip_tags($cuerpo);
$respuesta = $mailer->send();



if(!$respuesta){?>
    <div><p class="error">No se pudo enviar el formulario 😞. Recarga la página e inténtalo en unos minutos.</p></div>
    <script>
        hideForm();
    </script>
    <?php
    
    }
    
    else {
        ?>
        <div><p class="success">Mensaje enviado correctamente 😊. <br>¡Muchas gracias por contactar!</p></div>
        <script>
        confeti();
        hideForm();
        

        </script>

        <?php
        
    }
}
}  
    ?>