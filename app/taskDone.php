<?php
session_start();
$line = $_GET['id'];
$sessao = $_SESSION['user'];
$filename = $sessao.'.csv';
$file = file($filename);
$explode = explode(';;;', $file[$line]);
$explode[1] = 'done';
$file[$line] = $explode[0].';;;'.$explode[1]; 

$file_str = implode('', $file);

file_put_contents($filename, $file_str);

header('location: index.php');








?>