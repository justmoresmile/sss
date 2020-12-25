<?php 

require_once('../phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'belka1993-1993@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '1993Ak74'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('belka1993-1993@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('justmoresmile@Yandex.ru');     // Кому будет уходить письмо 

$mail->isHTML(true);                                  // Set email format to HTML


$body = '<p><strong>Заявка с сайта svs-tech.pro</strong></p>';
$mail->Subject = 'Необходима консультация';

if(trim(!empty($_POST['name']))){
	$body.='<p><strong>Имя: </strong> '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['email']))){
	$body.='<p><strong>E-mail: </strong>'.$_POST['email'].'</p>';
}
if(trim(!empty($_POST['tel']))){
	$body.='<p><strong>Телефон: </strong>'.$_POST['tel'].'</p>';
}
$mail->Body = $body;

if(!$mail->send()) {
    echo 'Error';
} else {
    
}
?>

