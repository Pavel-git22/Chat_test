<?php

if (isset($_GET['message'])){
    $message = $_GET["message"];
    $file = fopen('http://127.0.0.1:5500/chat.txt', 'a+');
    fputs($file, $message . "\n");
    echo "ok";
    die();
}
$message = file_get_contents('chat.txt');
echo  $message;
