<?php	 
	session_start(); 
		$user = $_POST['user'];
		$acao = $_POST["acaoo"];

$con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");

            $sql = "delete from professor where User_professor='$user'";
            $res = $con->query($sql);
            header('location: /index.php');
       
            die;
		$con->close();
?>