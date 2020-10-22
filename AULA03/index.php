<?php

// 1

date_default_timezone_set('UTC');

echo date("d") % 2 == 0 ? "É par" : "É ímpar";

echo "<br> <br>";

// 2

$aposentadoriaHomem = 65;
$aposentadoriaMulher = 60;

$aposentadoria = $aposentadoriaHomem - (date("Y") - 2000);

echo $aposentadoria;

echo "<br> <br>";

// 3

$venda = 90;

$acrescimo = 0;
$desconto = 0;

$total = 0;

if ($venda > 100) {
  $desconto = $venda * 0.1;
  $total = $venda - $desconto;
} else {
  $acrescimo = $venda * 0.2;
  $total = $venda + $acrescimo;
}

echo "${total}, ${desconto}, ${acrescimo}";

echo "<br> <br>";

// 4

$porcentagem = date("d") * 0.6;

echo $porcentagem;

if ($porcentagem > 10) {
  echo "MAIOR, ${porcentagem}";
} elseif ($porcentagem % 2 != 0) {
  echo date("d") + 100;
}

echo "<br> <br>";

// 5

$dia = date("N");

switch ($dia) {
  case 1: {
    echo "DOMINGO";
    break;
  }

  case 2: {
    echo "SEGUNDA-FEIRA";
    break;
  }

  case 3: {
    echo "TERÇA-FEIRA";
    break;
  }

  case 4: {
    echo "QUARTA-FEIRA";
    break;
  }

  case 5: {
    echo "QUINTA-FEIRA";
    break;
  }

  case 6: {
    echo "SEXTA-FEIRA";
    break;
  }

  case 7: {
    echo "SÁBADO";
    break;
  }

  default: {
    echo "Erro";
    break;
  }
}

echo "<br> <br>";


// 6

$nome = "Gustavo";

$testeNovo = strlen($nome) / 2;

if ($testeNovo == 0) {
  echo strlen($testeNovo) * 2;
} else {
  echo $testeNovo;
}
