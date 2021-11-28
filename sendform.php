<!-- https://api.telegram.org/bot2141463904:AAGTKYfk9OlcbkaM65TEmNcmDb6XWeeKxSw/getUpdates -->

<?php
$phone = $_POST['phone'];
$name = $_POST['name'];
// $model = $_POST['model'];


$token = "2141463904:AAGTKYfk9OlcbkaM65TEmNcmDb6XWeeKxSw";
$chat_id = "-790359111";
$sitename = "http://retrophones.ru/";

$jsonText = $_POST['Товары'];
$myArray = json_decode($jsonText, true);

$prod = '';





$arr = array(
    'Заявка с сайта: ' => $sitename,
    'Телефон: ' => $phone,
    'Имя: ' => $name,
    'Модель: ' => $jsonText,

);

foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

// header("Location: http://index.php");
