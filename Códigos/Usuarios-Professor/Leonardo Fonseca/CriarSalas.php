<?php	 
session_start();
header("location: ".$_SERVER['HTTP_REFERER']);	
		$NomeSala = $_POST['sala'];
        $Curso = $_POST['curso'];
		$Serie = $_POST['serie'];
		$Turma = $_POST['turma'];
		$AnoTurma = $_POST['ano'];
		$Cor = $_POST['cor'];
		$NomeProf = $_SESSION['nome'];
		
		$con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");

		$sql = "insert into sala (Nome_sala, Curso_sala, Serie_sala, Turma_sala, Ano_sala, Nome_professor, Cor_sala) value('$NomeSala', '$Curso','$Serie', '$Turma','$AnoTurma', '$NomeProf', '$Cor')"; 
				$res = $con->query($sql);
	    
		$con->close();
?>