<?php
 

$token = '1091966620:AAGzE6Pd0L7C0tei6PUJZPupR3It7S1tfmc';

$my = [
    'text' => "Имя: ".$_REQUEST['name'] ."\n" . "Телефон: ".$_REQUEST['phone']."\n" .$_REQUEST['type']."\n" . 'Проект: Repost.uz' ,
    'chat_id' => 642217520
];

$data = [
    'text' => "Имя: ".$_REQUEST['name'] ."\n" . "Телефон: ".$_REQUEST['phone']."\n" .$_REQUEST['type']."\n" . 'Проект: Repost.uz' ,
    'chat_id' => 14861644
];
$data1 = [
    'text' => "Имя: ".$_REQUEST['name'] ."\n" . "Телефон: ".$_REQUEST['phone']."\n" .$_REQUEST['type']."\n" . 'Проект: Repost.uz' ,
    'chat_id' => 466827168
];
$data2 = [
    'text' => "Имя: ".$_REQUEST['name'] ."\n" . "Телефон: ".$_REQUEST['phone']."\n" .$_REQUEST['type']."\n" . 'Проект: Repost.uz' ,
    'chat_id' => 753279670
];
$data3 = [
    'text' => "Имя: ".$_REQUEST['name'] ."\n" . "Телефон: ".$_REQUEST['phone']."\n" .$_REQUEST['type']."\n" . 'Проект: Repost.uz' ,
    'chat_id' => 1414792
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($my) );
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data1) );
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data2) );
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data3) );

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>