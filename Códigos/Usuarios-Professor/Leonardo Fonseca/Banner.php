<?php 
session_start(); 
	 header("location: ".$_SERVER['HTTP_REFERER']);
$id = $_SESSION['id'];
$cor = $_POST["cor"];
    $con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");
   
	$sql = "update sala set Cor_sala='$cor' where id_sala='$id'";
	$res = $con->query($sql);
	

       
            die;
		$con->close();
?>