<?php	 
		session_start(); 

		$nova = $_POST["nova"];
		$atual = $_POST["atual"];
		$acao = $_POST["acao"];

$con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");

			$sql = "update aluno set Senha_aluno='$nova' where Senha_aluno='$atual'";
			$atulizacao = $con->query($sql);
			header("location: ".$_SERVER['HTTP_REFERER']);
			
			die;
	
		$con->close();
?>