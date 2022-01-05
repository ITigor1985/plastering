<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail ->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;


    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsHTML(true);

    $mail->Username ="xromer85@gmail.com";
    $mail->Password = "Fyj34ju27@jt";
    $mail->setFrom('xromer85@gmail.com', 'Привет');
    $mail->addAddress('xromer85@gmail.com');
    $mail->Subject = 'Новый пользователь';
    $mail->Body = $body;


    $body = '<h1>Hello</h1>';
    if(trim(!empty($_POST['name']))){
        $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
    }

    if(trim(!empty($_POST['telephone']))){
        $body.='<p><strong>Телефон:</strong> '.$_POST['telephone'].'</p>';
    }

    if(!$mail->send()){
        $message = 'Ошибка';
    } else {
        $message = 'дынные отправлены';
    }
    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
    ?>