<?php
// sendform.php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  die('Доступ запрещен.');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Подключаем автозагрузчик Composer
require 'vendor/autoload.php';

// Загружаем переменные окружения из .env файла
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Функция для проверки наличия ссылок в тексте
function containsLink($string) {
  // Регулярное выражение для поиска URL-адресов (http, https, ftp, www)
  $pattern = '/\b(?:https?:\/\/|www\.|[a-zA-Z0-9][a-zA-Z0-9\-]{0,61}[a-zA-Z0-9]?\.)+[a-zA-Z]{2,}(?:\/[^\s]*)?\b/i';
  return preg_match($pattern, $string);
}

$mail = new PHPMailer(true);

try {
  // Настройки SMTP из переменных окружения
  $mail->isSMTP();
  $mail->Host       = $_ENV['SMTP_HOST'];
  $mail->SMTPAuth   = true;
  $mail->Username   = $_ENV['SMTP_USERNAME'];
  $mail->Password   = $_ENV['SMTP_PASSWORD'];
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port       = $_ENV['SMTP_PORT'];
  $mail->CharSet    = 'UTF-8';
  $mail->isHTML(true);
  $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
  $mail->addAddress($_ENV['MAIL_TO_ADDRESS']);

  // --- НАЧАЛО ОСНОВНОЙ ЛОГИКИ ---

  session_start();

  // Получение и базовая проверка данных
  $data = $_POST;

  if (empty($data)) {
      http_response_code(400); // Bad Request
      die("Ошибка: Нет данных для отправки.");
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
  // Проверка поля 'name' на наличие ссылок
  if (isset($data['name']) && containsLink($data['name'])) {
  // Если найдена ссылка, прерываем выполнение скрипта
  die("Отправка ссылок запрещена.");
  }

  // Проверка поля 'message' на наличие ссылок
  if (isset($data['message']) && containsLink($data['message'])) {
  // Если найдена ссылка, прерываем выполнение скрипта
  die("Отправка ссылок запрещена.");
  }

  // Очистка honeypot-полей из данных
  foreach ($honeypots as $fieldName) {
    unset($data[$fieldName]);
  }

  // Формирование письма
  $mail->Subject = 'Новое сообщение с AI Tools';
  $mail->Body = '
    <h3>Получено новое сообщение:</h3>
    <p><strong>Цель пользователя:</strong> ' . htmlspecialchars($data['subject']) . '</p>
    <p><strong>Имя:</strong> ' . htmlspecialchars($data['name']) . '</p>
    <p><strong>Телефон:</strong> ' . htmlspecialchars($data['phone']) . '</p>
    <p><strong>Email:</strong> ' . htmlspecialchars($data['email']) . '</p>
    <p><strong>Сообщение:</strong><br>' . nl2br(htmlspecialchars($data['message'])) . '</p>
    <p><strong>Formcheck:</strong> ' . htmlspecialchars($data['formcheck']) . ' Yes</p>
  ';

  // Для AltBody также используем очищенные данные
  $mail->AltBody = 'Цель пользователя: ' . htmlspecialchars($data['subject']) . "\n" .
                   'Имя: ' . htmlspecialchars($data['name']) . "\n" .
                   'Телефон: ' . htmlspecialchars($data['phone']) . "\n" .
                   'Email: ' . htmlspecialchars($data['email']) . "\n" .
                   'Сообщение: ' . htmlspecialchars($data['message']) . "\n" .
                   'Formcheck: ' . htmlspecialchars($data['formcheck']);

  // Отправляем письмо
  $mail->SMTPDebug = 0; // Рекомендуется установить в 0 на рабочем сайте
  $mail->Debugoutput = function($str, $level) {
    file_put_contents(__DIR__ . '/mail_error.log', date('Y-m-d H:i:s') . " [Level $level] $str\n", FILE_APPEND);
  };

  $mail->send();
  echo "Сообщение отправлено.";

} catch (Exception $e) {
  // Логируем ошибку для администратора
  error_log("Mailer Error: {$mail->ErrorInfo}");
  // Выводим общее сообщение для пользователя
  echo "Не удалось отправить сообщение. Пожалуйста, попробуйте еще раз позже.";
}
?>
