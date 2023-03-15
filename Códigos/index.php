<?php session_start();

if (isset($_GET['erro'])){
    $erro = "É necessário logar para acessar o sistema!";
}

if (isset($_GET['conta'])){
    $conta = "É necessário se cadastrar para acessar o sistema!";
}
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jade</title>
    <link rel="icon" type="image/x-icon" href="/imgs/IconJade.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

    <style>
       .etecA {
            position: relative;
        }
        .etecB {
        position: relative;
        z-index: 2;
        height: 5em;
        }
        .etecC {
        position: absolute;
        z-index: 2;
        width: 70%;
        left: 250px;
        top: -10px;
        }

        .D {
        position: relative;
        z-index: 1;
        }

        .banner img {
            width: 100%;
        }

        body {
            padding: 0%;
            margin: 0%;
        }
 
        .geeks {
            padding: 200px;
            text-align: center;
        }
 
        section {
            width: 100%;
            min-height: 300px;
        }

        /*.imgDegrad {
          background-image: linear-gradient(to bottom, rgba(255,0,0,0) 0%,rgb(255, 0, 0) 100%);

        }*/
 
        .pattern {
            position: relative;
            /*background-color: #81cc91;*/
           background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgb(129, 204, 145)28%);

        }
 
        .pattern:before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 306px;
            background: url(
            https://media.geeksforgeeks.org/wp-content/uploads/20200326181026/wave3.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media only screen and (max-width: 480px) {  img {    width: 100%;  }}
        
    </style>

<script>
	function submeterForm(acao){
		document.getElementById('acao').value = acao;
		document.getElementById('f').submit();
	}
	</script>
  </head>
  <body>
      <div style="background-color:red; margin:0px; text-align: center;">
         <font color="white"><?php echo $erro ?? '' ?></font>
      </div>
      <div style="background-color:red; margin:0px; text-align: center;">
         <font color="white"><?php echo $conta ?? '' ?></font>
      </div>
      
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
          <h5 class="text-white h4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a class="nav-link" href="Quem somos.php">Quem somos?</a></font></font></h5>
          <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a class="nav-link" href="Quem somos.php">Quem somos?</a></font></font></span>
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

    <div class="banner">
    <div class="etecA">
        <div class="etecB"><img src="imgs/etecaquarius2.png" class="img-fluid" alt="etec"></div>
        <div class="etecC"><img src="imgs/BannerETECAquarius.png" class="rounded mx-auto d-block" alt="BannerEtec" z-index="auto"></div>
    </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="D">
    <section class="pattern">
      <div class="geeks">
          <h1></h1>
      </div>
    </div>
  </div>

  </section>
  <p class="text-center fw-bold" style="font-size:50px;"><font face="Amatic SC">Nossos cursos...</font></p>
 <br><br><br><br>
    <div class="d-flex justify-content-center">
        <img src="imgs/programming.png" alt="Desenvolvimento de sistema" style="width: 200px;">
        <div>
            <p style="font-size:30px;"><font face="Amatic SC">Desenvolvimento de Sistema</font></p>
            <p><font face="Quicksand">O TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS é o profissional que analisa e projeta sistemas. Constrói,<br> documenta, realiza testes e mantém sistemas de informação. Utiliza ambientes de desenvolvimento<br> e linguagens de programação específica. Modela, implementa e mantém bancos de dados.</font></p>
        </div>
    </div>

    <img src="imgs/line.png" alt="" width="200" height="100" class="rounded mx-auto d-block">
        <br><br>

    <div class="d-flex justify-content-evenly">
        <div>
            <p style="font-size:30px;" class="text-end"><font face="Amatic SC">Automação Industrial</font></p>
            <p class="text-end"><font face="Quicksand">O TÉCNICO EM AUTOMAÇÃO INDUSTRIAL é o profissional que projeta, instala, programa, integra<br> e realiza manutenção em sistemas aplicados a automação e controle de processos industriais; analisa<br> especificações de componentes e equipamentos que compõem sistemas automatizados; coordena<br> equipes de trabalho e avalia a qualidade dos dispositivos e sistemas automatizados. Programa, opera<br> e mantém os sistemas automatizados respeitando normas técnicas de segurança.</font></p>
        </div>
        <img src="imgs/robotic-arm.png" alt="automação industrial" style="width: 200px;">
    </div>

        <img src="imgs/line.png" alt="" width="200" height="100" class="rounded mx-auto d-block">
        <br><br>

    <div class="d-flex justify-content-center">
        <img src="imgs/manager.png" alt="administração" style="width: 200px;">
        <div>
        <p style="font-size:30px;" class="text-start"><font face="Amatic SC">Administração</font></p>
        <p class="text-start"><font face="Quicksand">O TÉCNICO EM ADMINISTRAÇÃO é o profissional que adota postura ética na execução da rotina<br> administrativa, na elaboração do planejamento da produção e materiais, Recursos Humanos, financeiros e <br>mercadológicos. Realiza atividades de controles e auxilia nos processos de direção utilizando<br> ferramentas da informática básica. Fomenta ideias e práticas empreendedoras. Desempenha suas atividades<br> observando as normas de segurança, saúde e higiene do trabalho, bem como as de preservação ambiental.</font></p>
      </div>
    </div>


    <br><br><br><br><br><br><br><br><br><br>

    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://www.instagram.com/etec_sjc195/">
          <img src="imgs/Instagram-Logo.png" alt="" width="30" height="28" class="d-inline-block align-text-top">
        </a>
        <img src="imgs/footer imag.png" alt="" width="245" height="50" class="rounded mx-auto d-block">
        <img src="imgs/VetorLogoJadeRework.png" alt="" width="50" height="50" class="d-flex justify-content-end">
      </div>
    </nav>

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
            <a class="nav-link" href="Cadastro.html"><font color="black">Cadastro</font></a>
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