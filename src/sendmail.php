 //<?php 

//require_once('phpmailer/PHPMailerAutoload.php');
//$mail = new PHPMailer;
//$mail->CharSet = 'utf-8';

//$name = $_POST['name'];
//$phone = $_POST['telephone'];

//$mail->SMTPDebug = 1;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'mail.adm.tools';  																							// Specify main and backup SMTP servers
//$mail->SMTPAuth = true;                               // Enable SMTP authentication
//$mail->Username = 'sferabud@sfera-shtukatur.dp.ua'; // Ваш логин от почты с которой будут отправляться письма
//$mail->Password = 'Norik1409'; // Ваш пароль от почты с которой будут отправляться письма
//$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

//$mail->setFrom('sferabud@sfera-shtukatur.dp.ua'); // от кого будет уходить письмо?
//$mail->addAddress('xromer85@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML

//$mail->Subject = 'Заявка с тестового сайта';
//$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone;
//$mail->AltBody = '';

//if(!$mail->send()) {
//    echo 'Error';
//} else {
//    header('location: https://www.sfera-shtukatur.dp.ua/');
//}
//?>
<?php

$name = $_POST['name'];
$phone = $_POST['telephone'];

$to      = 'xromer85@gmail.com';
$subject = 'Заявка с тестового сайта';
$message = '' .$name . ' оставил заявку, его телефон ' .$phone;
$headers = 'From: sferabud@sfera-shtukatur.dp.ua' . "\r\n" .
    'Reply-To: sferabud@sfera-shtukatur.dp.ua' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$send = mail($to, $subject, $message, $headers);
if(!$send) {
    echo 'Error';
} else {
    header('location: https://www.sfera-shtukatur.dp.ua/');
}
?>
