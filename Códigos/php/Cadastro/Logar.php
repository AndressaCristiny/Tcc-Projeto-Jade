<?php
session_start(); 

		$user = $_POST["user"];
		$senha = $_POST["senha"];
		$acao = $_POST["acao"];

$con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");


	$sqlA = "select Nome_aluno from aluno where User_aluno='$user' and Senha_aluno='$senha'";
	$resA = $con->query($sqlA);
	$sqlP = "select Nome_professor from professor where User_professor='$user' and Senha_Professor='$senha'";
	$resP = $con->query($sqlP);
	$resAp =  mysqli_fetch_assoc($resA);
	$pastaA = $resAp ['Nome_aluno'];
	$resPp =  mysqli_fetch_assoc($resP);
	$pastaP = $resPp ['Nome_professor'];


    if(mysqli_num_rows($resA) > 0){
        $_SESSION['user'] = $user;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $pastaA;
		header("location:/Usuarios-Aluno/".$pastaA."/Aluno Inicio.php");
	}
	elseif(mysqli_num_rows($resP) > 0){
	    $_SESSION['user'] = $user;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $pastaP;
		header("location: ../../Usuarios-Professor/".$pastaP."/Professor Inicio.php");
	}
else{
    unset ($_SESSION['user']);
    unset ($_SESSION['senha']);
    header('location:../../index.php?conta=true');

  }

$con->close();
?>