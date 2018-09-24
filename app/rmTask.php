<?php 
session_start();
$line = $_GET['id'];
$fillename = $_SESSION['user'];
$name = $fillename.'.csv';
$file = file($name);
unset($file[$line]);
$data_str = implode('', $file);
file_put_contents( $name, $data_str);
header('location: index.php');
?>