<?php
//Сбор данных из полей формы. 
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
$email = $_POST['mail']; // Берём данные из input c атрибутом name="mail"
$coment = $_POST['coment']; // Берём данные из input c атрибутом name="coment"

$token = "1299894601:AAG1s-oE3AnZDbZJnV0ybyBAOO4uLADfEaY"; // Тут пишем токен
$chat_id = "-1001415249802"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "webmedia.ge"; //Указываем название сайта

$arr = array(

  'Заказ с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Почта' => $email,
  'Комментарий' => $coment
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>