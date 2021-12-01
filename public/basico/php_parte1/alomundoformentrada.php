<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alo mundo!!!</title>
</head>
<body>
	<form method="POST" action="alomundoform.php">
		<p>Qual o seu nome:</p>
		<input type="text" name="usuario">
		<input type="radio" name="genero" value="Masculino"> Masculino<br>
		<input type="radio" name="genero" value="Feminino"> Feminino<br>
		<input type="radio" name="genero" value="Outro" checked> Outro<br>
		<input type="submit" value="Enviar">
	</form>
	<?php
	/*
		//$_GET[]
		//$_POST[]
		//var_dump($_GET);
		if(isset($_POST["usuario"])){
			$nome = $_POST["usuario"];
			$msg = "Olá ".$nome." Tudo ok";
			?>
			<script>
				alert("<?php echo $msg; ?>");
			</script>
			<?php
			//echo "<h1> $msg </h1>";		
		}
		*/
	?>
</body>
</html>