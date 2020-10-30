<?php

// ARGUMENTOS POR VALOR (faz uma cópia da variável, impossibilitando alterar o valor inicial)

function somaNumeros($numero1, $numero2) {
  return $numero1 + $numero2;
}

// ARGUMENTOS POR REFERÊNCIA (pega o valor na memória e é possível alterá-la)

function somaNumeros2(&$numero1, &$numero2) {
  $numero1 = 10;  // <- mudando o valor inicial da variável

  return $numero1 + $numero2;
}

echo somaNumeros(10, 5) . '<br>';

$valor1 = 4;
$valor2 = 65;
echo somaNumeros2($valor1, $valor2) . '<br>';

// IMPORTANDO SCRIPTS PARA SEREM REUTILIZADOS:

/*
include: caso não exista o script que esteja sendo importado, mostra uma mensagem de erro
include_once: caso exista o script que esteja sendo importado, ele insere uma vez, porém caso contrário mostra uma mensagem de erro

require: caso não exista o script que esteja sendo importado, mostra uma mensagem de fatal error e não roda as demais linhas de código
require_once: caso exista o script que esteja sendo importado, ele insere uma vez, porém caso contrário mostra uma mensagem de fatal error
*/

// RECOMENDADO:
require_once 'helper/helper_function.php';

gravarLog('GUSTAVO', basename(__FILE__, '.php') . '.php');
