<?php
    /*
    Nome do banco jogoperguntas
    Tabela perguntas

    CREATE TABLE `perguntas` (
    `id` int(11) NOT NULL,
    `pergunta` text NOT NULL,
    `resposta` text NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    */
  //Mensagens
  $msg = "";
  //conectar no banco de dados
  $banco = new mysqli("localhost","root","","jogoperguntas");
  if($banco->connect_errno != 0){
      //!= 0 representa o código do erro
    echo "<h1> Erro de conexão</h1> <h2>Erro: ". $banco->connect_errno . "</h2> ";
  }else{
      //0 indica que conseguiu conectar no banco
    //echo "<h1> Conectou no banco de dados</h1>";
  }
  //fim do conectar no banco de dados
  //cadastrar uma pergunta
  if(isset($_POST["btCadastrar"])){
    //dados para cadastrar
    $pergunta = $_POST["pergunta"];
    $resposta = $_POST["resposta"];

    $sql = "INSERT INTO perguntas VALUES (null, '$pergunta','$resposta')";
	if(mysqli_query($banco, $sql)) {
			$msg = "<h1>Cadastro efetuado corretamente</h1>";
		}else{
			$msg = "<h1>Erro ao efetuar o cadastro</h1>";
		}

  }
  //fim do cadastrar
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogo de pergunta e resposta - Cadastro de perguntas</title>
    <link rel="stylesheet" type="text/css" href="folha.css">
</head>
<body>
    <h1>Jogo de pergunta e resposta - Cadastro de perguntas</h1>
    <form method="post" action="#">
        <input type="text" name="pergunta" placeholder="Informe a pergunta"/>
        <input type="text" name="resposta" placeholder="Informe a resposta"/>
        <input type="submit" name="btCadastrar" value="Cadastrar"/> 
    </form>
    <?php
        //listar os items cadastrados
        $sql = "SELECT * FROM perguntas";
        //mysqli_query retorna true, false ou um objeto
        $perguntas = mysqli_query($banco, $sql);
        //$resultBusca = $banco->query($sqlBusca);
        echo "<table>";
        echo "<tr><td>Código</td><td>Pergunta</td><td>Resposta</td></tr>";
        //mysqli_fetch_array - Obtem uma linha do resultado como uma matriz associativa, numérica, ou ambas
        while($pergunta = mysqli_fetch_array($perguntas)){
            echo "<tr><td>".$pergunta["id"]."</td><td>".$pergunta["pergunta"]."</td><td>".$pergunta["resposta"]."</td></tr>";
        }
        echo "</table>";
        //Mensagens para o usuário
        echo $msg;
    ?>
</body>
</html>