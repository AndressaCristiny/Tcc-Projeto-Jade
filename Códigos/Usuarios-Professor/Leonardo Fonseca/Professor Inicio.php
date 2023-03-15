<?php
   session_start();
if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['senha']) == true))
{
     header('location:../../index.php?erro=true');
     exit;
  }
$logado = $_SESSION['nome'];

 $con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");
	$cod = "select * from professor where Nome_professor='".$logado."'";
	$resul = $con->query($cod);
	while($row = mysqli_fetch_array($resul)){
        $user = $row['User_professor'];
        $num = $row['NumMatricula_professor'];
	}
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início</title>
    <link rel="icon" type="image/x-icon" href="/imgs/IconJade.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> <!--bootstrap CSS-->
    <link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'> <!--bootstrap fontes-->
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'> <!--bootstrap fontes-->
    <link href="../../css/Professor/EstrelasP.css" rel="stylesheet">

    <!--babel-->
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

<style>
thead{
    background-color: #aeb0af;
}

table {
  width: 70%;
  margin-bottom : .5em;
  margin-left: 220px;
  table-layout: fixed;
  text-align: center;
}

th, td {
    padding: 40px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}


#sala{
  display: flex; 
  justify-content: center;
}

</style>

<script>
	function submeterForm(acao){
		document.getElementById('acao').value = acao;
		document.getElementById('f').submit();
	}
	</script>
	
  </head>
  <body>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> <!--bootstrap JS-->

    <nav class="navbar navbar-dark bg-dark navbar sticky-top bg-light">
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          &nbsp;&nbsp;<img src="../../imgs/settings.svg" alt="" width="20" height="40"> &nbsp;&nbsp;&nbsp;
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
       <nav>
        <ul class="nav nav-tabs justify-content-center" style="background-color: #bddec4;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Professor Inicio.php" style="background-color: #4a4a49; color: white;">Salas</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="salvar2.php" style="color: black;">Horário</a>
          </li>
        </ul>
      </nav>

      <div class="containerr">
          <div class="stars" ></div>
          <div class="stars2"></div>

        <div class="position-absolute top-50 start-50 translate-middle">
                    <br><br><br><br><br><br><br>
                    <h3> <font color="white" face="Amatic SC" size="100px"> <p class="text-center"> Jade </p></font></h3>
                    <br><br><br>
                    <h3> <font color="white"> <p class="text-center"> Bem vindo(a) <?php echo "$logado";
?> </p></font></h3>

                  <br><br><br>
                  
                  <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded" style="max-width: 500px;">
                    
                          <h5 class="card-title" style="text-align: center;">Dados Pessoais</h5>
                          <p class="card-text"><b>Nome:</b> <?php echo $logado; ?></p>
                          <p class="card-text"><b>User:</b> <?php echo $user; ?></p>
                          <p class="card-text"><b>Matrícula:</b> <?php echo $num; ?></p>
                </div>
        </div>
        
      </div>
      
<br><br>

<?php
  
  	$cod = "select * from sala where Nome_professor ='$logado'";
	$resul = $con->query($cod);
	

    if($resul->num_rows > 0) {

        $table  = '<table>';
        $table .= '<thead>';
        $table .= '<tr>';
        $table .= '<td>ID</td>';
        $table .= '<td>Nome</td>';
        $table .= '<td>Curso</td>';
        $table .= '<td>Serie</td>';
        $table .= '<td>Turma</td>';
        $table .= '<td>Ano</td>';
        $table .= '<td>Nome Professor</td>';
        $table .= "<td><a class='btn btn-primary' style='background-color: #81CC91;' data-bs-toggle='modal' data-bs-target='#exampleModal23'>Criar sala</a></td>";
        $table .= '</tr>';
        $table .= '</thead>';
        $table .= '<tbody>';

    while($row = mysqli_fetch_array($resul)){
        $table .= "<form method='POST' action='salvar.php'>";
        $table .= "<tr>";
        $table .= "<td><input type='text' name='id' value='{$row['id_sala']}' style='display:none'>{$row['id_sala']}</td>";
        $table .= "<td><input type='text' name='sala' value='{$row['Nome_sala']}' style='display:none'>{$row['Nome_sala']}</td>";
        $table .= "<td><input type='text' name='curso' value='{$row['Curso_sala']}' style='display:none'>{$row['Curso_sala']}</td>";
        $table .= "<td><input type='text' name='serie' value='{$row['Serie_sala']}' style='display:none'>{$row['Serie_sala']}</td>";
        $table .= "<td><input type='text' name='turma' value='{$row['Turma_sala']}' style='display:none'>{$row['Turma_sala']}</td>";
        $table .= "<td><input type='text' name='ano' value='{$row['Ano_sala']}' style='display:none'>{$row['Ano_sala']}</td>";
        $table .= "<td><input type='text' name='professor' value='{$row['Nome_professor']}' style='display:none'>{$row['Nome_professor']}</td>";
        $table .= "<td><button type='submit' style='background-color: #383838; color: #c4c4c4;'>Entrar</button></td>";
        $table .= "</tr>";
        $table .= "</form>";
    }
    
    $table .= '</tbody>';
    $table .= '</table>';
    
    echo $table;
    
    echo "<br><br><div class='d-flex justify-content-evenly'>
    <a class='btn btn-primary' style='background-color: #db3232;' data-bs-toggle='modal' data-bs-target='#exampleModal234'>Excluir</a>
    </div>";

    } else {
    ?>
      <img src="../../imgs/vazio.png" class="rounded mx-auto d-block" alt="vazio">
      <br><br><br>
      <p class="text-center" style="color:black">Está área ainda está vazia :(</p>
      <p class="text-center" style="color:black"> Deseja criar sua primeira sala de aula? Clique nesse botão abaixo </p>
      <div class="d-flex justify-content-center">
        <button class="btn btn-primary" type="button" style="background-color: #81CC91;" data-bs-toggle="modal" data-bs-target="#exampleModal23">Criar sala</button>
      </div>

        <?php
    }
    ?>
 



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


<div class="modal fade" id="exampleModal23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" >
            <h5 class="modal-title" id="exampleModalLabel">Criar nova sala</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <br>
          <form class="row g-3" name="ff" id="ff" method="post" action="CriarSalas.php">
              <div class="row mb-3">
                <div class="col-sm-10">

                <label for="inputEmail3" class=" col-form-label">Nome da Sala</label>
                  <div class="form-floating mb-3">
                    <input class="form-control" id="floatingInput" placeholder="nome sala" name="sala" value="">
                    <label for="floatingInput">sala</label>
                  </div>

                  <label for="inputState" class="form-label">Curso</label>
                    <select id="inputState" class="form-select" name="curso">
                      <option selected>...</option>
                      <option value="Desenvolvimento de Sistema">Desenvolvimento de Sistema</option>
                      <option value="Automação Industrial">Automação Industrial</option>
                      <option value="Administração">Administração</option>
                    </select>

                    <label for="inputState" class="form-label">Série</label>
                    <select id="inputState" class="form-select" name="serie">
                      <option selected>...</option>
                      <option value="1">1ª</option>
                      <option value="2">2ª</option>
                      <option value="3">3ª</option>
                    </select>

                    <label for="inputState" class="form-label">Turma</label>
                    <select id="inputState" class="form-select" name="turma">
                      <option selected>...</option>
                      <option value="A">Turma A</option>
                      <option value="B">Turma B</option>
                      <option value="A/B">Turma A e B</option>
                    </select>

                    <label for="inputState" class="form-label">Ano que a turma entrou na escola</label>
                    <select id="inputState" class="form-select" name="ano">
                      <option selected>...</option>
                      <option value="2022">2022</option>
                      <option value="2021">2021</option>
                      <option value="2020">2020</option>
                    </select>

                </div>
              </div>           

          </div>
          <div class="modal-footer">
            <!--<input type="button" class="btn btn-primary" style="background-color: #383838;" valuer="Criar" name="CriarSala">-->
            
            <input type=“text” name='cor' value='#81CC91' style="display:none"/><br>
            <button type="submit" class="btn btn-primary" style="background-color: #383838;" onclick="submeterForm('Criar');">Cadastrar</button>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="exampleModal234" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Excluir sala?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <br>
          <form class="row g-3" name="ff" id="ff" method="post" action="Delete.php">
              <div class="row mb-3">
                <div class="col-sm-10">
                <label for="inputEmail3" class=" col-form-label">Insira o ID da sala:</label>
                
                  <div class="form-floating mb-3">
                    <input class="form-control" id="floatingInput" placeholder="ID" name="id" value="">
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
 

<br><br><br>

  </body>
</html>