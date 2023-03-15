<?php
session_start(); 
header("location: ".$_SERVER['HTTP_REFERER']);		

$id = $_SESSION['id'];
$msg = $_POST['msg'];
$user = $_POST['user'];

$con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");
	
$sql = "insert into mensagens (Msg, User, id_sala) values ('$msg', '$user', '$id')";
$res = $con->query($sql);
				
$con->close();
?>