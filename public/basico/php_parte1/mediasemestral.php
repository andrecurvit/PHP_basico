<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício - média de um aluno</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h1>Exercício - média de um aluno</h1>
	<?php
		$n1 = 5;
		$n2 = 7;
		$n3 = 3.2;
		$n4 =8.5;
		$nap = 6;
		$media = ($n1+$n2+$n3+$n4) / 4;
		echo "<h3>Primeira nota: $n1</h3>";
		echo "<h3>Segundaa nota: $n2</h3>";
		echo "<h3>Terceira nota: $n3</h3>";
		echo "<h3>Quarta nota: $n4</h3>";
		echo "<h3>Média geral: $media</h3>";
		echo "<h3>Média para aprovação: $nap</h3>";
		if ($media > $nap) {
			echo "<h1>Você foi aprovado(a)!!!</h1>";
		}
		if ($media < $nap) {
			echo "<h1>Você não foi aprovado(a)!!!</h1";
		}
		else{
			echo "<h1>Você ficou de recuperação!!!<h1";
		}
	?>

	<hr>
	
	<h1>Comando de decisão composto</h1>
	<h3>Quando if tem o else, demos o nome de composto!</h3>
	<?php
		$n1 = 5;
		$n2 = 7;
		$n3 = 3.2;
		$n4 =8.5;
		$nap = 6;
		$media = ($n1+$n2+$n3+$n4) / 4;
		echo "<h3>Primeira nota: $n1</h3>";
		echo "<h3>Segundaa nota: $n2</h3>";
		echo "<h3>Terceira nota: $n3</h3>";
		echo "<h3>Quarta nota: $n4</h3>";
		echo "<h3>Média geral: $media</h3>";
		echo "<h3>Média para aprovação: $nap</h3>";
		if ($media > $nap) {
			echo "<h1>Você foi aprovado(a)!!!</h1>";
		}
		if ($media < $nap) {
			echo "<h1>Você não foi aprovado(a)!!!</h1";
		}
		else{
			echo "<h1>Você ficou de recuperação!!!<h1";
		}
	?>

</body>
</html>