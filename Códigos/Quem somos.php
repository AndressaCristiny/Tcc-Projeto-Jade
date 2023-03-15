<?php session_start();?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quem somos?</title>
    <link rel="icon" type="image/x-icon" href="/imgs/IconJade.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <script>
	function submeterForm(acao){
		document.getElementById('acao').value = acao;
		document.getElementById('f').submit();
	}
	</script>
    
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    

    <nav class="navbar navbar-dark bg-dark navbar sticky-top bg-light">
    <ul class="nav nav-pills">
        <li class="nav-item">
          <button type="button" class="btn btn-primary nav-link active" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #81CC91;">Login</button>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Cadastro.html"><font color="white">Cadastro</font></a>
        </li>
      </ul>

      <div class="d-flex justify-content-center">

      <div class="container-fluid">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Alternar de navegação">
          <span><font size="10px" face="Amatic SC" color="white">Jade</font></span>
        </button>
    </div>
    </div>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a class="nav-link" href="index.php">Início</a></font></font></h5>
          <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a class="nav-link" href="index.php">Início</a></font></font></span>
          <h5 class="text-white h4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a class="nav-link" href="Desenvolvedores.php">Desenvolvedores</a></font></font></h5>
          <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a class="nav-link" href="Desenvolvedores.php">Desenvolvedores</a></font></font></span>
        </div>
      </div>


      <div class="d-flex justify-content-end">
        <div class="container">
          <a class="navbar-brand" href="https://www.cps.sp.gov.br/">
            <img src="imgs/logo-cps.png" alt="" width="60" height="44">
          </a>
        </div>
    </div>
    
    </nav>

    <br><br><br><br><br><br><br><br>

    <p class="text-decoration-underline fs-1 text-center"><font face="Amatic SC">Quem somos?</font></p>
    <br><br>
    <p class="text-center fs-3"><font face="Quicksand">As Escolas Técnicas Estaduais são instituições de ensinos técnico, médio e técnico integrado ao médio,<br> pertencentes ao Centro Estadual de Educação Tecnológica Paula Souza, autarquia da Secretaria de<br> Desenvolvimento Econômico, Ciência e Tecnologia do estado de São Paulo.</font></p>
    <p class="text-center fs-3"><font face="Quicksand">Para acessar um dos cursos técnicos gratuitos, é preciso ser aprovado no vestibulinho ETEC.</font></p>



    <div class="fixed-bottom">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://www.instagram.com/etec_sjc195/">
            <img src="imgs/Instagram-Logo.png" alt="" width="30" height="28" class="d-inline-block align-text-top">
          </a>
          <img src="imgs/footer imag.png" alt="" width="245" height="50" class="rounded mx-auto d-block">
        </div>
      </nav>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <br>
            <form class="row g-3" name="f" id="f" method="post" action="php/Cadastro/Logar.php">
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">User</label>
                <div class="col-sm-10">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="floatingInput" placeholder="name@example.com" name="user" value="">
                    <label for="floatingInput">Usuário</label>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha" value="">
                    <label for="floatingPassword">Senha</label>
                  </div>
                </div>
              </div>
            

          </div>
          <div class="modal-footer">
            <a class="nav-link" href="Cadastro.php"><font color="black">Cadastro</font></a>
            <input type="text" name="acao" id="acao" style="display:none"></input>
            <button type="submit" class="btn btn-primary" style="background-color: #383838;" onclick="submeterForm('r');">Logar</button>
          </div>
          </form>
          </div>
        </div>
      </div>
  </div>
  </body>
</html>