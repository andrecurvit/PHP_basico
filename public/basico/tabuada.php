<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP com MySQL</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Site criado no curso de PHP com MySQL" />
<meta name="keywords" content="curso php mysql site exemplo">
<meta name="autor" content="Andre Almeida">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

<link rel="stylesheet" type="text/css" href="../../assets/css/stylebasico.css">

<!-- Cabeçalho importado -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/33f4eb0ae3.js" crossorigin="anonymous"></script>

</head>

<body>

	<?php
		include "cabecalho.php";
		echo "<hr>";
		echo "<h1 class='tituloh'>Tabuada</h1>";
	?>
	<div class="formulario">
		<form method="POST">
			<fieldset>
				<legend>Informe um número para efetuar o cálculo da tabuada:</legend>
					<label for="valor">Número:</label>
					<input type="number" name="valor" value="0"><br>
					<input type="submit" name="enviar" value="Calcular">
			</fieldset>
		</form>
	</div>
	<?php
		include ("BibliotecaFuncoes.php");
		if (isset($_POST["valor"])) {
			$n = $_POST["valor"];
			ExibeTabuada($n);
		}
	?>
</body>
</html>