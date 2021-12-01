<?php
    include("../../private/conecta.php");
    if($banco->connect_errno !=0){
        //if($banco->connect_errno != 0){
        //!=0 representa o código do erro
        echo "<h1> Erro de conexão</h1> <h2>Erro: ". $banco->connect_errno . "</h2>";
    }else{
        // 0 indica que conseguiu conectar no banco
        // echo "<h1> Conectou no banco de dados</h1>"
    }
    //cadastra as perguntas
    if (isset($_POST["btCadastrar"])) {
        //dados para cadastrar
        $pergunta = $_POST["pergunta"];
        $resposta = $_POST["resposta"];

        $sql = "insert into perguntas(pergunta,resposta) values('$pergunta','$resposta')";
        //echo $sql;
        //$sql = "INSERT INTO perguntas VALUES (null, '$pergunta','$resposta')";
        if (mysqli_query($banco, $sql)) {
            $msg = "<h2> Cadastro efetuado corretamente </h2>";
        }else{
            $msg = "<h2> Erro ao efetuar cadastro</h2>";
        }
    }
    //excluir pergunta
    if (isset($_GET["id"])) {
        //dados para cadastrar
        $id = $_GET["id"];
        $sql = "delete from perguntas where id = $id";
        //echo $sql;
        mysqli_query($banco, $sql);       
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jogo de perguntas - Cadastro de perguntas</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/jogoadivinha.css">
</head>
<body>
    <div class="cadconteudo">
        <h1 class="cadtitulo">Jogo de perguntas - Cadastro de perguntas</h1>
        <form method="POST" action="" class="titulo">
            <input type="text" name="pergunta" placeholder="Insira uma nova pergunta" class="cadPergunta"><br>
            <input type="text" name="resposta" placeholder="Informe a resposta da pergunta" class="cadResposta">
            <input type="submit" name="btCadastrar">
        </form>
        <h2 class="titulo">Lista de perguntas</h2>
        <form method="post" action="#" class="titulo">
            <input type="text" name="texto" placeholder="Informe o texto da pergunta" class="cadtextperg">
            <input type="submit" name="btLocalizar" value="Localizar">
        
        <div class="titulo">
            <?php
                echo $msg;
                //Lista todas as perguntas
                $sql = "SELECT * FROM perguntas";
                if (isset($_POST["btLocalizar"])) {
                $valor = $_POST["texto"];
                $sql = "SELECT * FROM perguntas where pergunta like '%$valor%'";
                }
                $perguntas = mysqli_query($banco, $sql);

                echo "<table border = '1'>";
                echo "<tr>  <td>Id</td> <td>Pergunta</td> <td>Resposta</td> <td>Opções</td> </tr>";
                    while ($pergunta = mysqli_fetch_array($perguntas)) {
                        echo "<tr><td>".$pergunta["id"]."</td><td>".$pergunta["pergunta"]."</td><td>".$pergunta["resposta"]."</td> <td><a href='cadastrarperguntas.php?id=".$pergunta["id"]."'>Excluir</a></td></tr>";
                    }
                echo "</table>";
            ?>
    </div>
    </form>

</body>
</html>