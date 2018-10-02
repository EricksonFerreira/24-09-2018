<?<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('location: login.php');
}
$tarefa = $_POST['title'].';;;todo'."\n";
$arquivo = fopen($_SESSION['user'].".csv", "a");
$escrever = fwrite($arquivo, $tarefa);
header('location: index.php');

?>