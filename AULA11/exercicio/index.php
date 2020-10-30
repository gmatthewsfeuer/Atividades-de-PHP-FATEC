<?php

require_once '../helper/helper_function.php';

function parImpar(int $numero): string {
  if ($numero % 2 != 0) {
    return "${numero} É ÍMPAR";
  } else {
    return "${numero} É PAR";
  }
}

echo parImpar(11) . '<br><br>';

function multiplicacao(int $numero1, int $numero2, int $numero3): int {
  return $numero1 * $numero2 * $numero3;
}

echo "MULTIPLICAÇÃO: " . multiplicacao(2, 5, 2) . '<br><br>';

function menorNumero($array = []): int {
  $menor = $array[0];

  foreach ($array as $valor) {
    if ($valor < $menor) $menor = $valor;
  }

  return $menor;
}

echo "MENOR NÚMERO: " . menorNumero([5, 2, 1, 20, 11]) . '<br><br>';

function dataExtenso(string $data): string {
  $dataIng = dataToIng($data);
  return "MÊS: " . mesExtenso($dataIng) . ' – ' . "DIA DA SEMANA: " . diaSemanaExtenso($dataIng);
}

echo dataExtenso('29/10/2020') . '<br><br>';

function tabuada(int $numero, int $limite = 10) {
  for ($i = 0; $i <= $limite; $i++) { 
    echo "${numero} x ${i} = " . ($numero * $i) . '<br>';
  }
}

tabuada(5, 12);
