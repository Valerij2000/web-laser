<?php
// https://api.telegram.org/bot5254543381:AAHcKmeBMSFCia0BOK0rh3h0DaJsxCRy6oM/getUpdates
// где XXXXXXXXXXXXXX = наш токен полученный ранее

$name=$_POST['name'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$question=$_POST['question'];
$token = "5254543381:AAHcKmeBMSFCia0BOK0rh3h0DaJsxCRy6oM";
$chat_id = "-776345454";

$arr = array(
  '🚶‍♂️Имя: ' => $name,
  '📞Телефон: ' => $phone,
  '✉️Сообщение пользователя: ' => $message
);

foreach ($arr as $key => $value) {
  $txt .= "<b>".$key."</b>".$value."%0A";
};

$txtquest .= "<b>"."Вопрос пользователя: "."</b>".$question."%0A";

if (empty($name) and empty($phone) and empty($message)) {
  $send_to_telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txtquest}", "r");
} else {
  $send_to_telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
}

if ($send_to_telegram) {
  header('Location: index.html');
  return true;
} else {
  echo "Error";
}
 ?>
