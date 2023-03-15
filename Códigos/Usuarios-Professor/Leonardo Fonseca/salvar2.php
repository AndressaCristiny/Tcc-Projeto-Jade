<?php
session_start(); 

$id = '0';
$_SESSION['id'] = $id;
header('location: horario.php')
?>