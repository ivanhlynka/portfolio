<?php

/* https://api.telegram.org/bot1108154460:AAGCb0pT16Cw6CVzf7L81CtgqzT2yU42Ycs/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$token = "1108154460:AAGCb0pT16Cw6CVzf7L81CtgqzT2yU42Ycs";
$chat_id = "-373247226";
$arr = array(
  'Email: ' => $email,
  'Телефон: ' => $phone,
  'Повідомлення: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

// if ($sendToTelegram) {
//   header('Location: index.html#home');
// } else {
//   echo "Error";
// }
?>