<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alo mundo!!!</title>
</head>
<body>
	<?php
		$msg = "Clique para informar um nome na página de entrada";
		var_dump($_POST);
		if(isset($_POST["usuario"])){
			$nome = $_POST["usuario"];
			//genero
			if ($_POST["genero"] == "Masculino") {
				$msg = "Olá, amigo ".$nome. ", tudo bem?";
			}else {
				if ($_POST["genero"] == "Feminino") {
				$msg = "Olá, amiga ".$nome. ", tudo bem?";
				}
				if ($_POST["genero"] == "Outro") {
				$msg = "Olá, amigx ".$nome. ", tudo bem?";
				}
			}
		}
	?>
	<script>
		alert("<?php echo $msg; ?>");
	</script>
	<a href="alomundoformentrada.php"> Voltar </a>
</body>
</html>