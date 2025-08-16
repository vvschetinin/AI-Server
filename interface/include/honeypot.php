<?php
session_start();
// Генерируем несколько уникальных имён для honeypot-полей
$honeypots = [
    'hp_helpmess' => 'hp_' . substr(md5(rand()), 0, 8),
    'hp_email' => 'hp_' . substr(md5(rand()), 0, 8),
    'hp_tel' => 'hp_' . substr(md5(rand()), 0, 8)
];
// Сохраняем их в сессии для проверки в обработчике
$_SESSION['honeypots'] = $honeypots;
?>
