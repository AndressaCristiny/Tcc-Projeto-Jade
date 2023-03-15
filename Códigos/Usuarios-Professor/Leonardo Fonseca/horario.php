<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Horário</title>
    <link rel="icon" type="image/x-icon" href="/imgs/IconJade.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> <!--bootstrap CSS-->
    <link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'> <!--bootstrap fontes-->
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'> <!--bootstrap fontes-->
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> <!--bootstrap JS-->

    <nav class="navbar navbar-dark bg-dark navbar sticky-top bg-light">
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          &nbsp;&nbsp;<img src="/imgs/settings.svg" alt="" width="20" height="40"> &nbsp;&nbsp;&nbsp;
          <font color="white" face="Amatic SC" size="6px">Professor</font>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2"> <!--Coisas do botão de configuração-->
          <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Nova senha</button></li>
          <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal2">Excluir conta</button></li>
          <li><a class="dropdown-item" href="../../php/Cadastro/Logout.php">Sair</a></li>
        </ul>
      </div>
          

<div class="d-flex justify-content-center">

            <img src="/imgs/VetorLogoJadeRework.png" alt="" width="50" height="50" class="d-flex justify-content-end">
        </div>
        </nav>
        <ul class="nav nav-tabs justify-content-center" style="background-color: #bddec4;">
          <li class="nav-item">
            <a class="nav-link" href="Professor Inicio.php" style="color: black;">Salas</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="background-color: #4a4a49; color: white;">Horário</a>
          </li>
        </ul>

<br><br><br><br>
<div class="d-flex justify-content-evenly">
        <div class="card text-center" style="width: 700px; height: auto;" id="cardd">
          <div class="card-body">
            <div class="card-header">
              <h5 class="card-title">Horário</h5>
            </div> <br>
            <p class="text-center">Anexar horário</p>
            <div class="d-flex justify-content-center">
             
             <form class="row g-3" method="post" action="arquivo.php" enctype="multipart/form-data" name="arq" id="arq">
             
                      <!--<input type="text" name="acao" id="acao" style="display:none"></input>-->
                      <input type="file" name="arquivo" class="form-control">
                      <button type="submit" value="Enviar" class="btn btn-primary" style="background-color: #383838;">Enviar</button>
                  
          </form>
            
          </div><br>
          <form method='POST' action='DeleteHora.php'>
              <button type="submit" value="0" class="btn btn-primary" style="background-color: #db3232;">Excluir</button>
            </form>
          <br>
           <div class="scroll">
                
              
          </div>
          
        </div>
        
        </div>
</div>
          <?php
             $con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");

  	$cod = "select * from Arquivos where id_sala ='".$id."'";
	$resul = $con->query($cod);
	

    if($resul->num_rows > 0) {

    while($row = mysqli_fetch_array($resul)){
        $foto = "<img src='{$row['endereco']}' alt='horario'>";
    }
    
    echo '<br><br><br>';
    echo '<div class="d-flex justify-content-center">';
    echo $foto;
    echo "</div>";


    } else {
    ?>
    <br><br><br>
      <img src="../../imgs/vazio.png" class="rounded mx-auto d-block" alt="vazio">
      <br><br><br>
      <p class="text-center" style="color:black">Está área ainda está vazia :(</p>
      <p class="text-center" style="color:black">Adicione o horário para as turmas poderem visualizarem</p>
        <?php
    }
    ?>
             
      <br><br><br>
      
      
      
      
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nova senha</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <br>
          <form class="row g-3" name="f" id="f" method="post" action="../../php/Professor/Nova Senha.php">
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nova senha</label>
                <div class="col-sm-10">
                  <div class="form-floating mb-3">
                    <input class="form-control" id="floatingInput" placeholder="" name="nova" value="">
                    <label for="floatingInput">Nova senha</label>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Senha atual</label>
                <div class="col-sm-10">
                  <div class="form-floating">
                    <input class="form-control" id="floatingPassword" placeholder="" name="atual" value="">
                    <label for="floatingPassword">Senha atual</label>
                  </div>
                </div>
              </div>
            

          </div>
          <div class="modal-footer">
            <input type="text" name="acao" id="acao" style="display:none"></input>
            <button type="submit" class="btn btn-primary" style="background-color: #383838;" onclick="submeterForm('rs');">Atualizar senha</button>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>



<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Certeza que deseja excluir essa conta?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <br>
          <form class="row g-3" name="ff" id="ff" method="post" action="../../php/Professor/Excluir Conta.php">
              <div class="row mb-3">
                <div class="col-sm-10">
                <label for="inputEmail3" class=" col-form-label">Insira seu user para confirmar que deseja deletar sua conta</label>
                
                  <div class="form-floating mb-3">
                    <input class="form-control" id="floatingInput" placeholder="user" name="user" value="">
                    <label for="floatingInput">User</label>
                  </div>
                </div>
              </div>           

          </div>
          <div class="modal-footer">
            <input type="text" name="acaoo" id="acaoo" style="display:none"></input>
            <button type="submit" class="btn btn-primary" style="background-color: #383838;" onclick="submeterForm('d');">Excluir</button>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>
  </body>
</html>
