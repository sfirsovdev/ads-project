<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language');
    $mail->IsHTML(true);

    // От кого письмо
    $mail->setFrom('info@good-adverts.com', 'good-adverts.com');
    // Кому отправить
    $mail->addAddress('s.firsov1985@gmail.com');
    // Тема письма
    $mail->Subject = 'Новая заявка с сайта';

    // // Тело письма
    // $body='<h1>Тут тело письма если надо</h1>';

    if(trim(!empty($_POST['name']))){
        $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p';
    }
    if(trim(!empty($_POST['email']))){
        $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p';
    }
    if(trim(!empty($_POST['phone']))){
        $body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p';
    }
    if(trim(!empty($_POST['comment']))){
        $body.='<p><strong>Комментарий:</strong> '.$_POST['comment'].'</p';
    }

$mail->Body = $body;

// Отправляем
if (!$mail->send()) {
    $message = 'Ошибка';
    } else {
        $message = 'Данные отправлены!';
    }

    $response = ['message' => $message];

    header('Content-type: applicantion/json');
    echo json_encode($response);

?>