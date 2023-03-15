<?php	 
        session_start(); 

		$ChaveAdm = $_POST['Chaveadm'];
	    $Curso_aluno = $_POST['curso'];
		$Nome_aluno = $_POST['nome'];
		$User_aluno = $_POST['user'];
		$Senha_aluno = $_POST['senha'];
		$Ano = $_POST['ano'];
		$Turma = $_POST['turma'];
		$Serie = $_POST ['serie'];
		$acao = $_POST["acao"];
		$idturma = $Turma."_".$Curso_aluno."_".$Ano;
		$Nome_tab = "$Turma";
		$Nome_tab .= "_";
		$Nome_tab .= "$Curso_aluno";
		$Nome_tab .= "_";
		$Nome_tab .= "$Ano";
		$a = "";

		$con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");
      	if ($con->connect_error) {
    	    echo "erro";
    	    die;
	    }
			$cod = "select * from chave where Num_chave='".$ChaveAdm."'";
			$resul = $con->query($cod);
            
			if ($resul->num_rows > 0) {
			  
				$sql = "insert into aluno (Nome_aluno, User_aluno, Senha_aluno, Ano, Curso, Turma, Serie) values ('$Nome_aluno', '$User_aluno', '$Senha_aluno', '$Ano', '$Curso_aluno', '$Turma', '$Serie')";
				$res = $con->query($sql);
                if ($res){
    				 $dir_path = "Leonardo Fonseca/";
                     $dir_destino = $Nome_aluno;
                     $dir_copy = opendir($dir_path);
                     if(!is_dir($dir_destino))
                     mkdir($dir_destino,0777);
                     while($file=readdir($dir_copy))
                     {
                     if(substr($file,0,1) != ".")
                     {
                     copy($dir_path."/".$file,$dir_destino."/".$file);
                     }
                     }
                     
                     $sql = "insert into turma (id_turma, id_aluno, id_sala) values ('$idturma', '$Nome_aluno', '0')";
                     $resultado = $con->query($sql);
                     
                     header("location: ../Cadastro Aluno.php?cadA=true"); //.$_SERVER['HTTP_REFERER']
				die;
                }
                
                else {
                    header("location: ../Cadastro Aluno.php?cadAc=true");
                }
                
                
                 
                 
                 

				
			}
			else{
			    header("location: ../Cadastro Aluno.php?cadAf=true");
			}

		
		$con->close();
?>