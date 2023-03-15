<?php
    session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
  }
$logado = $_SESSION['nome'];
$id = $_SESSION['id'];

   $con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");
	$cod = "select * from sala where id_sala='".$id."'";
	$resul = $con->query($cod);
	while($row = mysqli_fetch_array($resul)){
	    $id = $row['id_sala'];
        $sala = $row['Nome_sala'];
        $curso = $row['Curso_sala'];
        $serie = $row['Serie_sala'];
        $turma = $row['Turma_sala'];
        $ano = $row['Ano_sala'];
        $professor = $row['Nome_professor'];
        $cor = $row['Cor_sala'];
	}


?>


<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sala de Aula</title>
    <link rel="icon" type="image/x-icon" href="/imgs/IconJade.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> <!--bootstrap CSS-->
    <link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'> <!--bootstrap fontes-->
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'> <!--bootstrap fontes-->

    <style>
        .banner{ 
            position: static;
            width: 90%;
            height: 450px;
            background: #34eba4;
        }

        .centro{
          position: relative;
          text-align: center;
          line-height: 350px;
          font-size: 50px;
        }
        
        .containerr{
          width: 100px;
          height: 450px;
        }
       

        #Myelement {
          position: static;
          width: 90%;
          height: 450px;
          
        }
        
        #ChatMensagens{
            display: flex;
            justify-content: center;
        }
        
        .texto{
            color: #000;
     -webkit-text-stroke: 1px #FFF;
      text-stroke: 1px #FFF;
        }
       
       
       
       thead{
    background-color: #aeb0af;
}

table {
  width: 100%;
  margin-bottom : .5em;
  table-layout: fixed;
  text-align: center;
}

th, td {
    padding: 20px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    text-align: center;
}

tr:hover{background-color:#f5f5f5}

.scroll{
    height: 350px;
     overflow-y: scroll;
}


.container {
  position: relative;
  overflow: hidden;
  padding: 0.5em;
}

.txt{
  position: relative;
  color: #fff;
  width: 300px;
  height: auto;
  background: #383838;
  border-radius: 20px 20px 20px 20px;
  box-sizing: border-box;
  padding: 10px 10px 30px 10px;
}

#cor{
    width: 20px;
    height: 20px;
}
    </style>
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
         
        </nav>
        <nav>
        <ul class="nav nav-tabs justify-content-center" style="background-color: #bddec4;">
          <li class="nav-item">
            <a class="nav-link" href="Professor Inicio.php" style="color: black;">Salas</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="salvar2.php" style="color: black;">Horário</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Sala de aula Professor.php" style="background-color: #4a4a49; color: white;">Sala de aula</a>
          </li>
        </ul>
      </nav>

        <div id="Myelement" class="container-sm texto" style="background-color:<?php echo $cor?>"><p class="centro"> <?php echo $sala; ?> </p></div>
<br><br>





    <div class="d-flex justify-content-evenly">

          <div class="containerr"> </div>

        <div> <p class="text-break">
            <div class="card text-center" style="width: 700px; height: 652px;" id="cardd">
          <div class="card-body">
            <div class="card-header">
              <h5 class="card-title">Arquivos</h5>
            </div> <br>
            <p class="text-center">Anexar arquivos</p>
            <div class="d-flex justify-content-center">
             
             <form class="row g-3" method="post" action="arquivo.php" enctype="multipart/form-data" name="arq" id="arq">
             
                      <!--<input type="text" name="acao" id="acao" style="display:none"></input>-->
                      <input type="file" name="arquivo" class="form-control">
                      <button type="submit" value="Enviar" class="btn btn-primary" style="background-color: #383838;">Enviar</button>
                  
          </form>
          </div>
          <br>
           <div class="scroll">
          <?php
  	$cod = "select * from Arquivos where id_sala ='".$id."'";
	$resul = $con->query($cod);
	

    if($resul->num_rows > 0) {

        $table  = '<table>';
        $table .= '<tbody>';

    while($row = mysqli_fetch_array($resul)){
        $table .="<form method='POST' action='DeleteArq.php'>";
        $table .= "<tr>";
        $table .= "<td><input type='text' name='arq' value='{$row['endereco']}' style='display:none'><a href='{$row['endereco']}'>{$row['Nome_arquivos']}</a></td>";
        $table .= "<td><button type='submit' style='background-color: #db3232; color: #ffffff;'>Excluir</button></td>";
        $table .= "</tr>";
        $table .= "</form>";
    }
    
    $table .= '</tbody>';
    $table .= '</table>';
    
    echo $table;


    } else {
    ?>
    <br><br><br>
      <img src="../../imgs/vazio.png" class="rounded mx-auto d-block" alt="vazio">
      <br><br><br>
      <p class="text-center" style="color:black">Está área ainda está vazia :(</p>
        <?php
    }
    ?>
             
      </div>      
              
          </div>
          
        </div>
        
        </div>
        
        
        <div class="card text-center" style="max-width: 300px; max-height: auto;" id="cardd" >
          <div class="card-body">
            <div class="card-header">
              <h5 class="card-title">Configurações</h5>
            </div> <br>
            <p class="text-center">Escolha a cor do banner</p>
            <div class="d-flex justify-content-center">
                <div class="accordion-item">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #b8b8b8; width: 200px">
        Cores
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
          <form method="post" action="Banner.php">
             <div class="form-check">
                  <input class="form-check-input" type="radio" name="cor" id="flexRadioDefault1" value="#81CC91">
                  <div id="cor" style="background-color:#81CC91">
                      
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cor" id="flexRadioDefault2" value="#74C4C3">
                  <div id="cor" style="background-color:#74C4C3">
                      
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cor" id="flexRadioDefault3" value="#BA4141">
                  <div id="cor" style="background-color:#BA4141">
                      
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cor" id="flexRadioDefault4" value="#BD5C98">
                  <div id="cor" style="background-color:#BD5C98">
                      
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="cor" id="flexRadioDefault5" value="#363635">
                  <div id="cor" style="background-color:#363635">
                      
                  </div>
                </div>
                </br>
                
             <button type="submit" class="btn btn-primary" style="background-color: #383838;">Alterar</button>
             </form>
      </div>
    </div>
  </div>
  </div>
            </div>
             
              <br>
              <hr>
              <br>
              
              <div class="card-header">
              <h5 class="card-title">Informações gerais da sala</h5>
              </div>
              <p class="text-center"> <b>Sala:</b> <?php echo $sala; ?></p>
              <p class="text-center"> <b>Curso:</b> <?php echo $curso; ?></p>
              <p class="text-center"> <b>Série:</b> <?php echo $serie; ?></p>
              <p class="text-center"> <b>Turma:</b> <?php echo $turma; ?></p>
              <p class="text-center"> <b>Ano de entrada da turma</b>: <?php echo $ano; ?></p>
              <p class="text-center"> <b>Professor:</b> <?php echo $professor; ?></p>
          </div>
        </div>
        <div class="containerr"> </div>
      </div>
      <br><br><br><br>
      
          <div class="d-flex justify-content-evenly">

 <div class="card text-center" style="width: 40%; max-height: auto;" id="cardd">
          <div class="card-body">
            <div class="card-header">
              <h5 class="card-title">Chat</h5>
            </div> <br>
              <br>
               <div id="MostrarMsg">
                   <div class="scroll">
                   <?php
   $con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");
  	$codd = "select * from mensagens where id_sala ='".$id."' order by IdMsg";
	$resull = $con->query($codd);
	

    if($resull->num_rows > 0) {

       $chat  = '<table>';
        $chat .= '<tbody>';

    while($roww = mysqli_fetch_array($resull)){
        
        /*$chat = "
<div class='container'>
  <div class='txt'>{$row['Msg']}</div>
</div>";*/
        
        $chat .= "<tr>";
        $chat .= "<td><p class='text-start'><font face='monospace'>{$roww['User']}</font></p><div class='container'><div class='txt'>{$roww['Msg']}</div></div></td>";
        $chat .= "</tr>";
    }
    
    $chat .= '</tbody>';
    $chat .= '</table>';
    
    echo $chat;

    } else {
    ?>
    <br><br><br>
      <img src="../../imgs/vazio.png" class="rounded mx-auto d-block" alt="vazio">
      <br><br><br>
      <p class="text-center" style="color:black">Está área ainda está vazia :(</p>
        <?php
    }
    ?>
                   </div>
               </div>
        <div id="ChatMensagens">
            <form id="Chat" method="POST" action="chat.php">
                <input type='text' id='TxtMensagem' name='msg' placeholder='Envie uma mensagem'/>
                <input type=“text” name='id' value='<?php echo $id;?>' style="display:none"/>
                <input type=“text” name='user' value='<?php echo $logado;?>' style="display:none"/>
                <button type='submit'>Enviar</button>
            </form>
        </div>
          </div>
        </div>
     
        <div class="containerr"> </div>
        </div>




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
<br><br><br><br>
  </body>
</html>
