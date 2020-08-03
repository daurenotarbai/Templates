<?php

/* https://api.telegram.org/bot912236488:AAGEk1Q7g9V6c2Hiax4vOc-PjbrGxRJa5bY
/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */


$emaill = $_POST['email']

$token = "912236488:AAGEk1Q7g9V6c2Hiax4vOc-PjbrGxRJa5bY";
$chat_id = "-374676412";
$arr = array(

  'Email: ' => $emaill,

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