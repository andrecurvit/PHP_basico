<?php
  include("../../private/conecta.php")
  if($banco->connect_errno != 0){
      //!= 0 representa o código do erro
      echo "<h1> Erro de conexão</h1> <h2>Erro: ". $banco->connect_errno . "</h2> ";
  }else{
      //0 indica que conseguiu conectar no banco
      echo "<h1> Conectou no banco de dados</h1>";
  }
  $id = 0;
  $pergunta = "";
  $resposta = "";
  $msg = "";

  //botão nova pergunta
  if(isset($_POST["btNovaPergunta"])){
    //escolher uma pergunta uma pergunta
    $sql = "SELECT * FROM perguntas ORDER BY RAND() LIMIT 1";
    $retorno = mysqli_query($banco, $sql);
    $registro = mysqli_fetch_array($perguntas);
    $id = $registro["id"];
    $pergunta = $registro["pergunta"];
    $resposta = $registro["resposta"];
  }

  //botão responder
  if(isset($_POST["btResponder"])){
    $id = $_POST["id"];
    $pergunta = $_POST["pergunta"];
    $resposta = $_POST["respostacorreta"];
    
    if($resposta == $_POST["resposta"]){
        $msg = "<h1 class='acerto'>Parabens!!!! Você acertou.</h1>";
    }else{
        $msg = "<h1 class='erro'>Que pena!!!! Você Errou. Tente novamente</h1>";
    }
  }else{
    //escolher uma pergunta uma pergunta
    $sql = "SELECT * FROM perguntas ORDER BY RAND() LIMIT 1";
    $retorno = mysqli_query($banco, $sql);
    $registro = mysqli_fetch_array($retorno);
    $id = $registro["id"];
    $pergunta = $registro["pergunta"];
    $resposta = $registro["resposta"];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jogo da adivinhação - Banco de dados</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/jogoadivinha.css">
</head>
<body>
  <div class="conteudo">
    <main>
      <h1 class="titulo">Jogo da adivinhação - Banco de dados</h1>
      <h2 class="titulo">Tente responder a pergunta</h2>
      <h2 class="titulo">Pergunta: <?php echo $pergunta; ?></h2>
      <form method="post" action="jogoadivinhacao.php">
        <input type="text" name="resposta"/>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="pergunta" value="<?php echo $pergunta; ?>">
        <input type="hidden" name="respostacorreta" value="<?php echo $resposta; ?>">
        <input type="submit" name="btResponder" value="Responder"/> 
      </form>
      <form method="post" action="jogoadivinhacao.php">
        <input type="submit" name="btNovapergunta" value="Nova pergunta">
      </form>
      <?php echo $msg; ?>
    </main>
    
</div>
</body>
</html>