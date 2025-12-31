<?php

include "phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();       
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;   
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'tls';  
$mail->Username = 'ironworkpro@gmail.com';   
$mail->Password = 'Malix9099';  

$mail->setFrom('ironworkpro@gmail.com', 'IRON WORK');
$mail->addAddress('LE18080558@merida.tecnm.mx', 'Yesser Jeremias Estrella');     // Add a recipient
$mail->addReplyTo('ironworkpro@gmail.com', 'IRON WORK');

$mail->isHTML(true);   

$mail->Subject = 'Enviado por'.$_POST['nombre'];
$mail->Body    = '<b>Nombre: </b>'.$_POST['nombre'].'<br><b>Email: </b>'.$_POST['correo'].'<br><b>Descripcion: </b>'.$_POST['descripcion'];


if(!$mail->send()) {
    echo 'Algo salio mal intentalo de nuevo';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '
    <script>
      alert("Gracias por contactarnos, nosotros nos comunicamos contigo a la brevedad.");
      location.href="contacto.php";
    </script>
  ';
    echo 'Gracias '.$_POST['nombre'].' por contactarnos, nosotros nos comumnicamos contigo a la brevedad.';
}

?>