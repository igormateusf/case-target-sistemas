<?php

/*
2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.



IMPORTANTE:

Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;
*/

// ***** FUNÇÕES *****
function éFibonacci($numero) {
	$primeiroNumero = 0;
	$segundoNumero = 1;
	$numeroAuxiliar = 0;

	if ($numero == 0 || $numero == 1) {
		return true;
	}else if($numero > 1) {
		while($numeroAuxiliar < $numero) {
			$numeroAuxiliar = $primeiroNumero + $segundoNumero;
			$primeiroNumero = $segundoNumero;
			$segundoNumero = $numeroAuxiliar;
		}

		if($numeroAuxiliar == $numero) {
			return true;
		}else {
			return false;
		}
	}else {
		return false;
	}
}

// Input do número

echo "Por favor, informe um número: ";
$numero = readline();

if(éFibonacci($numero)) {
	echo "O número informado pertence a sequência de Fibonacci.";
}else {
	echo "O número informado não pertence a sequência de Fibonacci.";
}

?>