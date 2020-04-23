<?php

/* 
https://api.telegram.org/bot1033013361:AAFI3NsETDu9TKClWfVkogo0txrgtIoWmwU/getUpdates
,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$message = $_POST['message'];
$token = "1033013361:AAFI3NsETDu9TKClWfVkogo0txrgtIoWmwU";
$chat_id = "-373247226";
$arr = array(
    'Телефон: ' => $phone,
    'Email' => $email
    'Повідомлення: ' => $message,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>