<?php session_start();

if (isset($_GET['cadA'])){
    $cadA = "Cadastro realizado com sucesso!";
}
if (isset($_GET['cadAf'])){
    $cadAf = "Erro ao cadastrar, chave incorreta!";
}
if (isset($_GET['cadAc'])){
    $cadAc = "Preencha todos dos campos corretamente!";
}
?>

?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Aluno</title>
    <link rel="icon" type="image/x-icon" href="/imgs/IconJade.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
		table{
			width:50%;
			border:1px solid black;
			text-align:center
		}
		th, td{
			border:1px solid black;
		}
		
		 .gradient {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 90vh;
      width: 90vw;
		
		background: linear-gradient(45deg, #383838, #81cc91, #bddec4);
      background-size: 300% 300%;
      animation: colors 15s ease infinite;
    }

    @keyframes colors {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }

    .fundo-container { background-color: white; }
		
</style>
<script>
	function submeterForm(acao){
		document.getElementById('acao').value = acao;
		document.getElementById('f').submit();
	}
	</script>
    
  </head>
   </head>
  <body class="gradient">
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <div class="position-absolute top-50 start-50 translate-middle">
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="container fundo-container">
            
      <div style="background-color:#a8f2a0; margin:0px; text-align: center;">
         <?php echo $cadA ?? '' ?>
      </div>
      <div style="background-color:red; margin:0px; text-align: center;">
         <font color="white"><?php echo $cadAf ?? '' ?>  </font>
      </div>
      <div style="background-color:red; margin:0px; text-align: center;">
         <font color="white"><?php echo $cadAc ?? '' ?>  </font>
      </div>
          
            <p class="text-center"><font size="10px" face="Amatic SC">Cadastro Aluno</font></p>

            <form class="row g-3" name="f" id="f" method="post" action="Usuarios-Aluno/criar-cadastro-aluno.php">
              <div class="col-lg-6">
                <label for="inputZip" class="form-label">Chave para cadastrar</label>
                <input type="password" class="form-control" id="inputZip" name="Chaveadm" value="" placeholder="Insira a chave">
              </div>
              
                 <div class="col-lg-6">
                  <label for="inputState" class="form-label">Ano</label>
                    <select id="inputState" class="form-select" name="ano">
                      <option selected>...</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                    </select>
                </div>
                <div class="col-lg-6">
                  <label for="inputState" class="form-label">Curso</label>
                    <select id="inputState" class="form-select" name="curso">
                      <option selected>...</option>
                      <option value="Desenvolvimento de Sistema">Desenvolvimento de Sistema</option>
                      <option value="Automação Industrial">Automação Industrial</option>
                      <option value="Administração">Administração</option>
                    </select>
                </div>  
                <div class="col-lg-6">
                  <label for="inputState" class="form-label">Turma</label>
                    <select id="inputState" class="form-select" name="turma">
                      <option selected>...</option>
                      <option value="A">Turma A</option>
                      <option value="B">Turma B</option>
                    </select>
                </div> 
                
                <div class="col-lg-6">
                  <label for="inputState" class="form-label">Série</label>
                    <select id="inputState" class="form-select" name="serie">
                      <option selected>...</option>
                      <option value="1">1ª</option>
                      <option value="2">2ª</option>
                      <option value="3">3ª</option>
                    </select>
                </div>
               
                <div class="col-lg-6">
                  <label for="inputPassword4" class="form-label">Nome Completo</label>
                  <input type="text" class="form-control" name="nome" value="" placeholder="Nome completo">
                </div>
                <div class="col-lg-6">
                  <label for="inputPassword4" class="form-label">User</label>
                  <input type="text" class="form-control" name="user" value="" placeholder="User">
                </div>
                 <div class="col-lg-6">
                  <label for="inputAddress" class="form-label">Senha</label>
                  <input type="password" class="form-control" name="senha" value="" placeholder="Senha">
                </div>
                
                  <input type="text" name="acao" id="acao" style="display:none"></input><br>

                  <div class="modal-footer">
                <div class="col-md-2">
                  <button type="submit" class="btn btn-primary" style="background-color: #383838;" onclick="submeterForm('c');">Cadastrar</button>
                </div>
                <div class="col-md-2">
                    <a class="nav-link" href="Cadastro.html"><font color="black">Voltar</font></a>
                </div>
              </div>
              </form>
        </div>
    </div>
    </div>
    
  </body>
</html>