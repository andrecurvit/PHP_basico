<?php
	function Exibetabuada($n){
		for($i = 0; $i <= 10; $i++){
			// echo "<h3> $n X $i = " . $n*$i . "</h3>";
			echo "<h3> $n X $i = " . EfetuaMultiplicacao($n,$i) . "</h3>";
		}
	}

	function ExibeMensagem ($msg){
		echo "<h1>$msg</h1>";
	}

	function EfetuaMultiplicacao($valorA, $valorB) {
		$total = $valorA * $valorB;
		return $total;
	}

	//exibe dia atual
	function ExibeDiaAtual() {
		$hoje = getdate();
		$retorno = "Domingo";
		switch ($hoje["wday"]) {
			case '0':
				$retorno = "Domingo";
				break;
			case '1':
				$retorno = "Segunda";
				break;
			case '2':
				$retorno = "Terça";
				break;
			case '3':
				$retorno = "Quarta";
				break;
			case '4':
				$retorno = "Quinta";
				break;
			case '5':
				$retorno = "Sexta";
				break;
			case '6':
				$retorno = "Sábado";
				break;
		}
		return $retorno;
	}

	function DeterminaMaiorValor($n1, $n2, $n3){
		$maior = $n1;
		if ($maior < $n2) {
			$maior = $n2;
		}
		if ($maior < $n3) {
			$maior = $n3;
		}
		return $maior;
	}
?>