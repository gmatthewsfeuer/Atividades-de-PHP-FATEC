<?php

// 1 - BASEADO NA DATA DO SEU ANIVERSÁRIO EXIBA O DIA DA SEMANA POR EXTENSO
// 2 - BASEADO NA DATA DO SEU ANIVERSÁRIO EXIBA O MÊS POR EXTENSO
// 3 - A PARTIR DA DATA ATUAL, INCREMENTE 15, 30, 45, 60 DIAS E EXIBA EM TELA (USAR LOOP)
// 4 - A PARTIR DE JANEIRO DO ANO ATUAL, INCREMENTE MESES ATÉ CHEGAR NO MÊS ATUAL, 
// EXIBE CADA UM DOS MESES POR EXTENSO EM TELA (USAR LOOP)
// 5 - BASEADA EM UMA DETERMINADA DATA (ANIVERSÁRIO) 
// CALCULE A DIFERENÇA EM ANOS SOBRE A DATA ATUAL

date_default_timezone_set('America/Sao_Paulo');

$dataNasc = '27/10/2000';

echo "<h2>MEU ANIVERSÁRIO: ${dataNasc}</h2><ol>";

function dataToIng($data) {
  $arrayData = explode('/', $data);
  $dataNova = $arrayData[2] . '-' . $arrayData[1] . '-' . $arrayData[0];

  return $dataNova;
}

echo "<li><u>DIA DA SEMANA DO MEU ANIVERSÁRIO: </u><b>";

$dataNascAtual = "27/10/" . date('Y');

switch (date('N', strtotime(dataToIng($dataNascAtual)))) {
  case 1: {
    echo "SEGUNDA-FEIRA";
    break;
  }

  case 2: {
    echo "TERÇA-FEIRA";
    break;
  }

  case 3: {
    echo "QUARTA-FEIRA";
    break;
  }

  case 4: {
    echo "QUINTA-FEIRA";
    break;
  }

  case 5: {
    echo "SEXTA-FEIRA";
    break;
  }

  case 6: {
    echo "SÁBADO";
    break;
  }

  case 7: {
    echo "DOMINGO";
    break;
  }

  default: {
    echo "Erro";
    break;
  }
}

echo "</b></li><br>";

function mesPorExtenso($mes) {
  switch ($mes) {
    case 1: {
      $mesNome = "JANEIRO";
      break;
    }

    case 2: {
      $mesNome = "FEVEREIRO";
      break;
    }

    case 3: {
      $mesNome = "MARÇO";
      break;
    }

    case 4: {
      $mesNome = "ABRIL";
      break;
    }

    case 5: {
      $mesNome = "MAIO";
      break;
    }

    case 6: {
      $mesNome = "JUNHO";
      break;
    }

    case 7: {
      $mesNome = "JULHO";
      break;
    }

    case 8: {
      $mesNome = "AGOSTO";
      break;
    }

    case 9: {
      $mesNome = "SETEMBRO";
      break;
    }

    case 10: {
      $mesNome = "OUTUBRO";
      break;
    }

    case 11: {
      $mesNome = "NOVEMBRO";
      break;
    }

    case 12: {
      $mesNome = "DEZEMBRO";
      break;
    }

    default: {
      $mesNome = "Erro";
      break;
    }
  }

  return $mesNome;
}

echo "<li><u>MÊS POR EXTENSO DO MEU ANIVERSÁRIO: </u><b>" . mesPorExtenso(date('m', strtotime(dataToIng($dataNasc)))) . "</b></li><br>";

echo "<li><u>INCREMENTAÇÃO 15, 30, 45 E 60 DIAS:</u> <br><ul>";

$arrayIncr = [15, 30, 45, 60];

for ($i = 0; $i < count($arrayIncr); $i++) { 
  echo "<li><b>" . date('d-m-Y', strtotime("+" . $arrayIncr[$i] . " days")) . "</b></li>";
}

echo "</ul></li><br>";

echo "<li><u>INCREMENTAR MESES ATÉ O MÊS ATUAL:</u> <br><ul>";

$mes = 1;

while($mes <= date('n')) {
  echo "<li><b>" . mesPorExtenso($mes) .  "</b></li>";

  $mes++;
}

echo "</ul></li><br>";

echo "<li><u>DIFERENÇA EM ANOS ENTRE DATA ATUAL E DE ANIVERSÁRIO:</u> ";

function diferencaAnos($anoNasc) {
  return "<b>" . (date('Y') - $anoNasc) . " anos.</b></li></ol>";
}

echo diferencaAnos(date('Y', strtotime(dataToIng($dataNasc))));
