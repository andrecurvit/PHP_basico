<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP Básico</title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>Informe um número inteiro para converter o mesmo para binário:</legend>
				<label for="valor">Número:</label>
				<input type="number" name="valor">
				<input type="submit" name="enviar" value="Verificar">
		</fieldset>
	</form>
	<?php
		$n = 0; // meu número
		if (isset($_POST["enviar"])) {
			$n = $_POST["valor"];
			$resultado = $n;
			$binario = "";
			while($resultado >= 2){
				$resto = $resultado % 2;
				$resultado = (int)($resultado / 2);
				$binario = $resto . $binario;
			}
			$binario = $resultado . $binario;
			echo "<h1>O número $n em binário é: $binario </h1>";
		}
	?>
</body>
</html>