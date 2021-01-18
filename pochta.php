<?php

$data = [
"name"=> $_POST['name'],
"email" => $_POST['email'],
"message" => $_POST['message']

   ];
   
   
$header = "Сообщение с вашего сайта";

if(isset($data['name']) AND $data['email'] AND (filter_var($data['email'], FILTER_VALIDATE_EMAIL) !== false) AND $data['message'] ) {
   $nameClear = filter_var($data['name'], FILTER_SANITIZE_STRING);
   $messageClear = filter_var($data['message'], FILTER_SANITIZE_STRING);
$mes = "Имя: $nameClear \nE-mail: $data[email] \nТема: $header \nТекст: $messageClear";
$send = mail('pressa99983@gmail.com', $header, $mes, 'Content-type:text/plain; charset = UTF-8\r\nFrom:$email');
} 



?>