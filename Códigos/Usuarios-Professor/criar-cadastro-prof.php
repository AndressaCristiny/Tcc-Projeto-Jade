<?php	 //if ( $disciplina == ' vazio ' ){ $disciciplina = ' ' }
session_start();
header("location: ".$_SERVER['HTTP_REFERER']);
		$ChaveAdm = $_POST['Chaveadm'];
        $Nome_professor = $_POST['nome'];
		$NumMat_professor = $_POST['NumMatricula'];
		$User_professor = $_POST['user'];
        $Senha_professor = $_POST['senha'];
		$acao = $_POST["acao"];

		$con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");

		

		if($acao == "c"){ 
	    	$cod = "select * from chave where Num_chave='".$ChaveAdm."'";
			$resul = $con->query($cod);
            
			if ($resul->num_rows > 0) {
				$sql = "insert into professor (Nome_professor, NumMatricula_professor, User_professor, Senha_professor) values ('$Nome_professor', '$NumMat_professor', '$User_professor', '$Senha_professor')"; 
				$res = $con->query($sql);
			
			if($res){	
				$dir_path = "Leonardo Fonseca/";
                 $dir_destino = $Nome_professor;
                 $dir_copy = opendir($dir_path) ;
                
                 if(!is_dir($dir_destino))
                 mkdir($dir_destino,0777);
                
                
                 while($file=readdir($dir_copy))
                 {
                 if(substr($file,0,1) != ".")
                 {
                 copy($dir_path."/".$file,$dir_destino."/".$file);
                 }
                 }
				
			    header("location: ../Cadastro Professor.php?cadP=true"); //.$_SERVER['HTTP_REFERER']
				die;
			 }
                
             else {
                    header("location: ../Cadastro Professor.php?cadPc=true");
             }
			}
			else{
			    header("location: ../Cadastro Professor.php?cadPf=true");
			}
			
		}
		$con->close();
?>