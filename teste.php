<?php 
	function mostraConteudo($array)
	{
		for ($i=0; $i < sizeof($array); $i++) { 
			echo "<br>chave: ". $i . " Valor " . $array[$i];
		}
	}

$arrayMaluco = array(0,1,"banana","alura",4,5,"curso php",7,8,9);
$numeros = array(1,3,9,4,5,8,2,6,7,0);
mostraConteudo($arrayMaluco);
echo "<br>";
mostraConteudo($numeros);


/*Tente criar uma função que recebe um array de números. O retorno da função será a soma de todos os números de dentro do array.*/

function somaArray($arraynumeros)
{
	$soma = 0;
	for ($i=0; $i < sizeof($arraynumeros); $i++) { 
		$soma += $arraynumeros[$i];
	}
	return $soma;
}
$as = array(8,7,5);
echo "<br> O valor da soma do array é ";
echo somaArray($as);