<?php
    session_start();
if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['senha']) == true))
{
     header('location:../../index.php?erro=true');
     exit;
  }
$logado = $_SESSION['nome'];

$con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");
	$cod = "select * from aluno where Nome_aluno='".$logado."'";
	$resul = $con->query($cod);
	while($row = mysqli_fetch_array($resul)){
        $user = $row['User_aluno'];
        $curso = $row['Curso'];
        $turma = $row['Turma'];
        $ano = $row['Ano'];
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
    <link href="../../css/Aluno/EstrelasA.css" rel="stylesheet">
   <!--<script>
	function submeterForm(acao){
		document.getElementById('acao').value = acao;
		document.getElementById('f').submit();
	}

  function submeterForm(acao){
		document.getElementById('acaoo').value = acaoo;
		document.getElementById('ff').submit();
	}
	</script>-->
	
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
	</style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> <!--bootstrap JS-->

    <nav class="navbar navbar-dark bg-dark navbar sticky-top bg-light">
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          &nbsp;&nbsp;<img src="../../imgs/settings.svg" alt="" width="20" height="40"> &nbsp;&nbsp;&nbsp;
          <font color="white" face="Amatic SC" size="6px">Aluno</font>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2"> <!--Coisas do botão de configuração-->
          <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Nova senha</button></li>
          <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal2">Excluir conta</button></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="../../php/Cadastro/Logout.php">Sair</a></li>
        </ul>
      </div>
          <div class="d-flex justify-content-center">

            <img src="/imgs/VetorLogoJadeRework.png" alt="" width="50" height="50" class="d-flex justify-content-end">
        </div>      
    </nav>
        
        <nav style="background-color: #bddec4;">
            <div class=" justify-content-center">
        <ul class="nav nav-tabs justify-content-center" style="background-color: #bddec4;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Sala de aula Aluno.php" style="background-color: #4a4a49; color: white;">Salas</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="horario.php" style="color: black;">Horário</a>
          </li>
        </ul>
         </div>
        </nav>
       

      <div class="containerr">
          <div class="stars" ></div>
          <div class="stars2"></div>

        <div class="position-absolute top-50 start-50 translate-middle">
                    <br><br><br><br><br><br><br>
                    <h3> <font color="white" face="Amatic SC" size="100px"> <p class="text-center"> Jade </p></font></h3>
                    <br><br><br>
                    <h3> <font color="white"> <p class="text-center"> Bem vindo(a) <?php echo "$logado";
?>  </p></font></h3>

                  <br><br><br>
                  
                  <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded" style="max-width: 500px;">
                    
                          <h5 class="card-title" style="text-align: center;">Dados Pessoais</h5>
                          <p class="card-text"><b>Nome:</b> <?php echo $logado; ?></p>
                          <p class="card-text"><b>User:</b> <?php echo $user; ?></p>
                          <p class="card-text"><b>Curso:</b> <?php echo $curso; ?></p>
                          <p class="card-text"><b>Turma:</b> <?php echo $turma; ?></p>
                </div>
        </div>
        
      </div>
      
      <br><br><br><br><br>
<?php

$sqll = "select * from sala where Curso_sala = '".$curso."' and Ano_sala = '".$ano."' and Turma_sala = '".$turma."' or Turma_sala = 'A/B'";
$codd = $con->query($sqll);

/////$row2 = mysqli_fetch_assoc($cod2);/////

if($codd->num_rows > 0) {

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
        $table .= "<td>----</td>";
        $table .= '</tr>';
        $table .= '</thead>';
        $table .= '<tbody>';

    while($row2 = mysqli_fetch_array($codd)){
        $table .= "<form method='POST' action='salvar.php'>";
        $table .= "<tr>";
        $table .= "<td><input type='text' name='id' value='{$row2['id_sala']}' style='display:none'>{$row2['id_sala']}</td>";
        $table .= "<td><input type='text' name='sala' value='{$row2['Nome_sala']}' style='display:none'>{$row2['Nome_sala']}</td>";
        $table .= "<td><input type='text' name='curso' value='{$row2['Curso_sala']}' style='display:none'>{$row2['Curso_sala']}</td>";
        $table .= "<td><input type='text' name='serie' value='{$row2['Serie_sala']}' style='display:none'>{$row2['Serie_sala']}</td>";
        $table .= "<td><input type='text' name='turma' value='{$row2['Turma_sala']}' style='display:none'>{$row2['Turma_sala']}</td>";
        $table .= "<td><input type='text' name='ano' value='{$row2['Ano_sala']}' style='display:none'>{$row2['Ano_sala']}</td>";
        $table .= "<td><input type='text' name='professor' value='{$row2['Nome_professor']}' style='display:none'>{$row2['Nome_professor']}</td>";
        $table .= "<td><button type='submit' style='background-color: #383838; color: #c4c4c4;'>Entrar</button></td>";
        $table .= "</tr>";
        $table .= "</form>";
    }
    
    $table .= '</tbody>';
    $table .= '</table>';
    
    echo $table;


    } else {
    ?>
      <img src="../../imgs/vazio.png" class="rounded mx-auto d-block" alt="vazio">
      <br><br><br>
      <p class="text-center" style="color:black">Está área ainda está vazia :(</p>
      <p class="text-center" style="color:black"> Quando algum professor criar uma sala, aparecerá para você! </p>

        <?php
    }
    ?>

<br><br><br><br><br>



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
          <form class="row g-3" name="f" id="f" method="post" action="../../php/Aluno/Nova Senha.php">
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
          <form class="row g-3" name="ff" id="ff" method="post" action="../../php/Aluno/Excluir Conta.php">
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
