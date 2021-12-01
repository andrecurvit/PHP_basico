<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Operadores Aritméticos</title>
</head>
<body>
	<h1>Operadores Aritméticos</h1>
	<?php  
		echo "<h3> 5 + 3 = ".(5+3)."</h3>";
		echo "<h3> 5 * 3 = ".(5*3)."</h3>";
		echo "<h3> 5 - 3 = ".(5-3)."</h3>";
		echo "<h3> 5 / 3 = ".(5/3)."</h3>";
		echo "<h3> 5 % 3 = ".(5%3)."</h3>";
	?>
	<hr>
	<h1> Tabuada do número cinco</h1>
	<?php
		echo "<p>5 * 1 = ".(5*1)."</p>";
		echo "<p>5 * 2 = ".(5*2)."</p>";
		echo "<p>5 * 3 = ".(5*3)."</p>";
		echo "<p>5 * 4 = ".(5*4)."</p>";
		echo "<p>5 * 5 = ".(5*5)."</p>";
		echo "<p>5 * 6 = ".(5*6)."</p>";
		echo "<p>5 * 7 = ".(5*7)."</p>";
		echo "<p>5 * 8 = ".(5*8)."</p>";
		echo "<p>5 * 9 = ".(5*9)."</p>";
		echo "<p>5 * 10 = ".(5*10)."</p>";
	?>	
	<hr>
	<h1>Variáveis - Conceito e prática</h1>
	<?php
		$v1 = 7;
		$v2 = 6;

		echo "<h3> $v1 + $v2 = ". ($v1+$v2)."</h3>";
		echo "<h3> $v1 - $v2 = ". ($v1-$v2)."</h3>";
		echo "<h3> $v1 * $v2 = ". ($v1*$v2)."</h3>";
		echo "<h3> $v1 / $v2 = ". ($v1/$v2)."</h3>";
		echo "<h3> $v1 % $v2 = ". ($v1%$v2)."</h3>";
	?>
	<hr>
	<h1>Variáveis - Conceito e prática Aula 2</h1>
	<?php
		$v1 = 7;
		$v2 = 6;

		echo "<h3> $v1 + $v2 = ". ($v1+$v2)."</h3>";
		echo "<h3> $v1 - $v2 = ". ($v1-$v2)."</h3>";
		echo "<h3> $v1 * $v2 = ". ($v1*$v2)."</h3>";
		echo "<h3> $v1 / $v2 = ". ($v1/$v2)."</h3>";
		echo "<h3> $v1 % $v2 = ". ($v1%$v2)."</h3>";
	?>
	<hr>
	<h1>Comando de decisão</h1>
	<h2>Comando de decisão if</h2>
	<?php
		$opcao = "PHP";
		$opcao = "ASP.NET";
		if ($opcao == "PHP") {
			echo "<h2>Curso de programação PHP com MySql</h2>";
		}
		if ($opcao == "ASP.NET") {
			echo "<h2>Curso de programação ASP.NET</h2>";
		}
		
	?>
	<hr>

	<h1>Comando de decisão</h1>
	<h2>Utilizando expressões de comparação</h2>
	
	<?php
		$v1 = 150;
		$v2 = 15;
		if ($v1 < $v2) {
			echo "<h3>O valor $v1 é menor do que $v2 </h3>";
		}
		if ($v1 <= $v2) {
			echo "<h3>O valor $v1 é menor ou igual do que $v2 </h3>";
		}
		if ($v1 > $v2) {
			echo "<h3>O valor $v1 é maior do que $v2 </h3>";
		}
		if ($v1 >= $v2) {
			echo "<h3>O valor $v1 é maior ou igual do que $v2 </h3>";
		}
		if ($v1 == $v2) {
			echo "<h3>O valor $v1 é igual ao que $v2 </h3>";
		}
		if ($v1 != $v2) {
			echo "<h3>O valor $v1 é diferente do que $v2 </h3>";
		}

	?>
	<hr>

	
</body>
</html>