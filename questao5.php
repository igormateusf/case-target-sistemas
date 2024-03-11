<?php

/*
5) Escreva um programa que inverta os caracteres de um string.


IMPORTANTE:

a) Essa string pode ser informada através de qualquer entrada de sua preferência ou pode ser previamente definida no código;

b) Evite usar funções prontas, como, por exemplo, reverse;
*/

// ***** FUNÇÕES *****
function inverteString($string) {
	if($string == "" || $string == null) {
		return false;
	}else {
		$stringInvertida = "";
		$tamanhoDaString = strlen($string);

		for($i = $tamanhoDaString - 1; $i >= 0; $i--) {
			$stringInvertida .= $string[$i];
		}

		return $stringInvertida;
	}
}

// Input da string

echo "Por favor, informe uma string: ";
$string = readline();

if(!inverteString($string)) {
	echo "A string informada é vazia ou nula.";
}else {
	echo "A string invertida é: " . inverteString($string);
}


?>