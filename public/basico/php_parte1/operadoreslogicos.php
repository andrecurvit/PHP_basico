<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Operadores Lógicos</title>
</head>
<body>
	<h1>Operadores lógicos</h1>
	<h1>Operador lógico &&</h1>
	<?php 
	
		$a = 100;
		$b = 10;
		$c = 10;
		//a+b > c - A+C > B - B+C > A
		$msg = "<h1>Os valores informados não representam os dados de um triangulo </h1>";
		$msg2 = "<h1>Os valores informados representam os dados de um triangulo </h1>";
		if (($a+$b>$c)){
			if (($a+$c>$b)){
				if (($b+$c>$a)){
					$msg = "<h1>Os valores informados representam os dados de um triangulo </h1>";
				}
			}
		}
		
		if (($a+$b>$c) && ($a+$c>$b) && ($b+$c>$a)) {
			echo $msg2;
		}
		else{
		echo $msg;
		}
	
	?>

	<hr>
	<h1>Oprador lógico ||</h1>
	<?php
		$op1 = 10;
		$op2 = 10;

		if( ( $op1>15) || ($op2>15)) {
			echo "<h1>Entrou no if</h1>";
		} else {
			echo "<h1>Não entrou no if</h1>";
		}
	?>
	<p>Olhar o código fonte</p>

</body>
</html>