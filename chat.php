<?php

if (isset($_GET['message'])){
    $message = $_GET["message"];
    $file = fopen('http://chat.txt', 'a+');
    fputs($file, $message . "\n");
    echo "ok";
    die();
}
$message = file_get_contents('chat.txt');
echo  $message;
