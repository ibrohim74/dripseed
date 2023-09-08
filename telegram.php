<?php

/* https://api.telegram.org/bot6224412857:AAFeIq9iBUgbqqeHtF3zLSVKvjNKrrfBGBI/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "6224412857:AAFeIq9iBUgbqqeHtF3zLSVKvjNKrrfBGBI";
$chat_id = "-1001920805722";

$arr = array(
  'Ism: ' => $name,
  'Telefon nomer: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram) {
  header('Location: /');
} else {
  echo "Error";
}
?>
