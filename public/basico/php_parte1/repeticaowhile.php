<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>While - Laço de repetição</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h1>(#Aula 1) While - Laço de repetição</h1>
	<?php
		$i = 1;
		while ($i <= 6) {
			echo"<h$i> Olá mundo! </h$i>"; // <h$i> vai contar todas as tags existentes e vai imprimir na tela
			$i = $i + 1;
		}
	?>
	<hr>
	<h1>(#Aula 2) While - Construindo tabela com laço de repetição While</h1>
	<h2>While - Títulos H </h2>
	<?php
		$i = 1;
		while ($i <= 6) {
			echo"<h$i> Olá mundo! </h$i>"; // <h$i> vai contar todas as tags existentes e vai imprimir na tela
			$i = $i + 1;
		}
	?>
	<?php
		$l = 5;
		$c = 3;
	?>

	<h1>While tabela <?php echo "$l X $c"; ?></h1>
	<?php
		echo '<table border="1">';
		$il = 1;
		while ($il <= $l)
		{
		//criar as linhas da tabela
			echo "<tr>";
			$ic = 1;
			while ($ic <= $c)
			{
				echo '<td><a href="https://www.google.com.br">GOOGLE</a></td>';
				$ic++; //$ic recebe $ic + 1
			}
			echo "<tr>";
			$il = $il+1;
		}
		echo "</tables>";
	?>

</body>
</html>