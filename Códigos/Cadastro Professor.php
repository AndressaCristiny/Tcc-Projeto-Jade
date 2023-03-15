<?php session_start();
if (isset($_GET['cadP'])){
    $cadP = "Cadastro realizado com sucesso!";
}
if (isset($_GET['cadPf'])){
    $cadPf = "Erro ao cadastrar, chave incorreta!";
}
if (isset($_GET['cadPc'])){
    $cadPc = "Preencha todos dos campos corretamente!";
}
?>
?>
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Professor</title>
    <link rel="icon" type="image/x-icon" href="imgs/IconJade.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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
         <?php echo $cadP ?? '' ?>
      </div>
      <div style="background-color:red; margin:0px; text-align: center;">
         <font color="white"><?php echo $cadPf ?? '' ?>  </font>
      </div>
       <div style="background-color:red; margin:0px; text-align: center;">
         <font color="white"><?php echo $cadPc ?? '' ?>  </font>
      </div>
          
            <p class="text-center"><font size="10px" face="Amatic SC">Cadastro Professor</font></p>

            <form class="row g-3" name="f" id="f" method="post" action="Usuarios-Professor/criar-cadastro-prof.php">
              <div class="col-lg-4">
                <label for="inputZip" class="form-label">Chave para cadastrar</label>
                <input type="password" class="form-control" id="inputZip" name="Chaveadm" value="" placeholder="Insira a chave">
              </div>
              
              <div class="col-lg-4">
                <label for="inputZip" class="form-label">Número de Matrícula</label>
                <input type="text" class="form-control" id="inputZip"  name="NumMatricula" value="" placeholder="Número de Matrícula">
              </div>
                
              <div class="col-lg-4">
                    <label for="inputZip" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="inputZip" name="senha" value="" placeholder="Senha">
                  </div>
                <div class="col-lg-6">
                  <label for="inputPassword4" class="form-label">Nome completo</label>
                  <input type="text" class="form-control" id="inputPassword4" name="nome" value="" placeholder="Nome completo">
                </div>

                  <div class="col-lg-6">
                    <label for="inputAddress" class="form-label">User</label>
                    <input type="text" class="form-control" id="inputAddress" name="user" value="" placeholder="User">
                  </div>



                  
                <!-- FIMMMMMMMMMMMMMMM ----------------------------------------------------------------------------------------------- -->
                  <input type="text" name="acao" id="acao" style="display:none"></input><br>

                  <div class="modal-footer">
                <div class="col-md-2">
                  <button type="submit" class="btn btn-primary" style="background-color: #383838;" onclick="submeterForm('c');">Cadastrar</button>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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