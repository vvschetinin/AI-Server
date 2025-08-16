<?php
// send.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Настройки SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'grossvladlen0@gmail.com';
    $mail->Password   = 'mrkcofqxjiriwqfv'; // Используйте пароль приложения!
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->CharSet    = 'UTF-8';
    $mail->isHTML(true);
    $mail->setFrom('grossvladlen0@gmail.com', 'My Site');
    $mail->addAddress('born-1965@mail.ru');

    session_start();

    // Получаем данные из формы
    $data = $_POST;

    if (empty($data)) {
        die("Нет данных.");
    }

    // Проверка на наличие honeypot в сессии
    if (!isset($_SESSION['honeypots'])) {
        die("Ошибка: неверный запрос");
    }

    $honeypots = $_SESSION['honeypots'];

    // Проверяем каждое honeypot-поле
    foreach ($honeypots as $fieldName) {
        if (!empty($data[$fieldName])) {
            die("Подозрение на спам. Форма заблокирована.");
        }
    }

    // Очистка honeypot-полей из данных
    foreach ($honeypots as $fieldName) {
        unset($data[$fieldName]);
    }

    // Формирование письма
    $mail->Subject = 'Новое сообщение с сайта';
    $mail->Body = '
        <h3>Получено новое сообщение:</h3>
        <p><strong>Имя:</strong> ' . htmlspecialchars($data['name']) . '</p>
        <p><strong>Телефон:</strong> ' . htmlspecialchars($data['phone']) . '</p>
        <p><strong>Email:</strong> ' . htmlspecialchars($data['email']) . '</p>
        <p><strong>Сообщение:</strong><br>' . nl2br(htmlspecialchars($data['message'])) . '</p>
    ';

    $mail->AltBody = 'Имя: ' . $data['name'] . "\n" .
                     'Email: ' . $data['email'] . "\n" .
                     'Сообщение: ' . $data['message'];

    // Отправляем письмо
    $mail->send();
    echo "Сообщение отправлено.";

} catch (Exception $e) {
    echo "Не удалось отправить сообщение. Ошибка: {$mail->ErrorInfo}";
    echo "<br>Детали ошибки: " . $e->getMessage();
}
?>
