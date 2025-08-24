<?php
// sendform.php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  die('Доступ запрещен.');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function containsLink($string) {
  $pattern = '/\b(?:https?:\/\/|www\.|[a-zA-Z0-9][a-zA-Z0-9\-]{0,61}[a-zA-Z0-9]?\.)+[a-zA-Z]{2,}(?:\/[^\s]*)?\b/i';
  return preg_match($pattern, $string);
}

$mail = new PHPMailer(true);

try {
  // Настройки SMTP из .env
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
  $data = $_POST;

  if (empty($data)) {
      http_response_code(400);
      die("Ошибка: Нет данных для отправки.");
  }

  if (!isset($_SESSION['honeypots'])) {
    die("Ошибка: неверный запрос");
  }

  $honeypots = $_SESSION['honeypots'];

  foreach ($honeypots as $fieldName) {
    if (!empty($data[$fieldName])) {
        die("Подозрение на спам. Форма заблокирована.");
    }
  }

  // --- НАЧАЛО: ВАЛИДАЦИЯ ДЛИНЫ ПОЛЕЙ ---
  $errors = [];

  // Проверка поля 'name'
  if (isset($data['name'])) {
      $nameLength = mb_strlen(trim($data['name']));
      if ($nameLength < 3 || $nameLength > 20) {
          $errors[] = "Поле 'Имя' должно содержать от 3 до 20 символов.";
      }
  } else {
      $errors[] = "Поле 'Имя' обязательно для заполнения.";
  }

  // Проверка поля 'message'
  if (isset($data['message'])) {
      $messageLength = mb_strlen(trim($data['message']));
      if ($messageLength < 3 || $messageLength > 500) {
          $errors[] = "Поле 'Требуемые работы' должно содержать от 3 до 500 символов.";
      }
  } else {
      $errors[] = "Поле 'Требуемые работы' обязательно для заполнения.";
  }

  // Если есть ошибки, прерываем выполнение
  if (!empty($errors)) {
      // В будущем мы заменим этот die() на красивый JSON-ответ
      http_response_code(400); // Bad Request
      die("Ошибка валидации: " . implode("<br>", $errors));
  }
  // --- КОНЕЦ: ВАЛИДАЦИЯ ДЛИНЫ ПОЛЕЙ ---

  // Проверка полей на наличие ссылок
  if (isset($data['name']) && containsLink($data['name'])) {
    die("Отправка ссылок запрещена.");
  }
  if (isset($data['message']) && containsLink($data['message'])) {
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
    <p><strong>Требуемые работы:</strong><br>' . nl2br(htmlspecialchars($data['message'])) . '</p>
    <p><strong>Formcheck:</strong> ' . htmlspecialchars($data['formcheck']) . ' Yes</p>
  ';

  $mail->AltBody = 'Цель пользователя: ' . htmlspecialchars($data['subject']) . "\n" .
                   'Имя: ' . htmlspecialchars($data['name']) . "\n" .
                   'Телефон: ' . htmlspecialchars($data['phone']) . "\n" .
                   'Email: ' . htmlspecialchars($data['email']) . "\n" .
                   'Требуемые работы: ' . htmlspecialchars($data['message']);

  $mail->SMTPDebug = 0;
  $mail->Debugoutput = function($str, $level) {
    file_put_contents(__DIR__ . '/mail_error.log', date('Y-m-d H:i:s') . " [Level $level] $str\n", FILE_APPEND);
  };

  $mail->send();
  echo "Сообщение отправлено.";

} catch (Exception $e) {
  error_log("Mailer Error: {$mail->ErrorInfo}");
  echo "Не удалось отправить сообщение. Пожалуйста, попробуйте еще раз позже.";
}
?>
