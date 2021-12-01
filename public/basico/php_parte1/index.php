<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Título da página</title>
</head>
<body>
	<h1>Aula de PHP básico</h1>
	<button><a href="../index.html">Voltar</a></button>
	<button><a href="index.html">Acessar index.html</a></button>
	<button><a href="./basico/operadoresAritmeticos.php">Acessar pasta "basico"</a></button>
	<button class="opar"><a href="basico/operadoresAritmeticos.php">Operadores Aritméticos (.php)</a></button>
	<button class="medsem"><a href="basico/mediasemestral.php">Media Semestral</a></button>
	<button class="opelog"><a href="basico/operadoreslogicos.php">Operadores Lógicos</a></button>
	<button class="repetwhile"><a href="basico/repeticaowhile.php">Repetição While</a></button>
	<button class="repetfor"><a href="basico/repeticaofor.php">Repetição For</a></button>

	<?php
		echo "<p>Minha primeira conta";
		echo '<p> 20 + 20 = ';
		echo 20+20;
	?>

</body>
</html>