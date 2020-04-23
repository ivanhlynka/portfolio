<?php

/* 
https://api.telegram.org/bot1033013361:AAFI3NsETDu9TKClWfVkogo0txrgtIoWmwU/getUpdates
,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$token = "1033013361:AAFI3NsETDu9TKClWfVkogo0txrgtIoWmwU";
$chat_id = "-373247226";
$arr = array(
  'Email' => $email
  'Телефон: ' => $phone,
  'Повідомлення: ' => $message,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "404-404";
}
?>