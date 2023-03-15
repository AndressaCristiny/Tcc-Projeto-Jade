<?php
session_start(); 

$id = $_POST['id'];
$_SESSION['id'] = $id;
header('location: Sala de aula Aluno.php')
?>