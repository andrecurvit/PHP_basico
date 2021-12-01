<?php
  $perguntas = array("Qual é a cor do céu?",
  "Qual é o melhor site de desenvolvimento para programadores de sites?",
  "Qual é o melhor canal do YouTube?",
  "Qual é o endereço do site dfilitto");
  $respostas = array("Azul",
  "dfilitto",
  "dfilitto",
  "https://www.dfilitto.com.br");
  $pos = 0;
  $msg = "";
  if(isset($_POST["btNovaPergunta"])){
    $pos = SortearPergunta(4);
  }
  if(isset($_POST["btResponder"])){
    $pos = $_POST["pos"];  
    $resposta = $respostas[$pos];
    if($resposta == $_POST["resposta"]){
        $msg = "<h1>Parabens!!!! Você acertou.</h1>";
    }else{
        $msg = "<h1>Que pena!!!! Você Errou. Tente novamente</h1>";
    }
  }else{
    $pos = SortearPergunta(4);
  }
  

  function SortearPergunta ($tl){
      return rand (0, $tl-1);
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jogo de pergunta e resposta - simples</title>
</head>
<body>
    <h1>Jogo de pergunta e resposta - simples</h1>
    <h2>Tente responder a pergunta</h2>
    <h2>Pergunta: <?php echo $perguntas[$pos]; ?></h2>
    <form method="post" action="#">
        <input type="text" name="resposta"/>
        <input type="hidden" name="pos" value="<?php echo $pos; ?>">
        <input type="submit" name="btResponder" value="Responder"/> 
    </form>
    <form method="post" action="#">
    <input type="submit" name="btNovapergunta" value="Nova pergunta"/>
    </form>
    <?php echo $msg; ?>
</body>
</html>