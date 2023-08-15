<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$site = $_POST['site'];

$token = '5927410286:AAFPSp6WnzQlU6iPs0W8qP500gp0Y735iOc';
$chat_id = '-772048241';
$arr = [
    'Форма: ' => $site,
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
];


foreach ($arr as $key => $value) {
    $txt .= '<b>' . $key . '</b> ' . $value . '%0A';
}


$sendToTelegram = fopen(
    "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}",
    'r'
);

if ($sendToTelegram) {
    header('Location: spasibo');
} else {
    echo 'Error';
}
