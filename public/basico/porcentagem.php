<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Aplicacao criada para fins matematicos" />
	<meta name="keywords" content="calculo porcentagem matematica">
	<meta name="autor" content="Andre Almeida">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<!-- Cabeçalho importado -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/33f4eb0ae3.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/css/stylebasico.css">

	<title>Porcentagem</title>

</head>
<body class="porcent">
	<?php
		include 'cabecalho.php';
		include 'menu.php';
	?>
	<div class="corpoporcent">
		<h1>Cálculo da porcentagem (%)</h1>
		<form method="POST" action="#">
			<legend>Insira o primeiro valor:</legend>
			<input type="number" name="valor"><br>
			<legend>Insira o valor da porcentagem:</legend>
			<input type="number" name="valor2">%.<br><br>
			<input type="submit" name="Calcular">
		</form>
		<?php
				//$resultado = (int)($resultado / 2); Se caso o valor for só inteiro
			$valor = 0; // meu número
			if (isset($_POST["Calcular"])) {
				$valor = $_POST["valor"];
				$porcent = $_POST["valor2"];
				
				echo "<h2>".$porcent."% de ".$valor."<br><hr>";
				$porcentagem = 100;
				$result = (float)($valor / 100);
				echo "<h2>".$valor." ÷ ".$porcentagem." = ".$result."</h2>";
				$resultado = $result * $porcent;
				echo "<h2>".$result." * ".$porcent." = ".$resultado."</h2>";
				echo "<h1>Calculando...</h1>";
				echo "<h1>".$porcent."% de ".$valor." é: ".$resultado."</h1>";
			}
		?>
	</div>
	<footer class="porcent">
		<p>Site desenvolvido por <a href="http://andrealmeida.epizy.com">&copy João Guilherme</a></p>
	</footer>
</body>
</html>