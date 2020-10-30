<?php

function gravarLog($nomeUsuario, $nomeScript) {
  $file = fopen('log.txt', 'a+');
  fwrite($file, dataToBr('2020-10-29') . ' - ' . $nomeUsuario . ' - ' . $nomeScript . PHP_EOL);
  fclose($file);
}

date_default_timezone_set('America/Sao_Paulo');

function dataToIng($data) {
  $arrayData = explode('/', $data);
  $dataNova = $arrayData[2] . '-' . $arrayData[1] . '-' . $arrayData[0];

  return $dataNova;
}

function dataToBr($data) {
  $arrayData = explode('-', $data);
  $dataNova = $arrayData[0] . '/' . $arrayData[1] . '/' . $arrayData[2];

  return $dataNova;
}

function mesExtenso($data) {
  switch (date('n', strtotime($data))) {
    case 1: {
      return "JANEIRO";
      break;
    }

    case 2: {
      return "FEVEREIRO";
      break;
    }

    case 3: {
      return "MARÇO";
      break;
    }

    case 4: {
      return "ABRIL";
      break;
    }

    case 5: {
      return "MAIO";
      break;
    }

    case 6: {
      return "JUNHO";
      break;
    }

    case 7: {
      return "JULHO";
      break;
    }

    case 8: {
      return "AGOSTO";
      break;
    }

    case 9: {
      return "SETEMBRO";
      break;
    }

    case 10: {
      return "OUTUBRO";
      break;
    }

    case 11: {
      return "NOVEMBRO";
      break;
    }

    case 12: {
      return "DEZEMBRO";
      break;
    }

    default: {
      return "Erro";
      break;
    }
  }
}

function diaSemanaExtenso($data) {
  switch (date('N', strtotime($data))) {
    case 1:
      return "SEGUNDA";
      break;
    case 2: 
      return "TERÇA-FEIRA";
      break;
    case 3: 
      return "QUARTA-FEIRA";
      break;
    case 4:
      return "QUINTA-FEIRA";
      break;
    case 5: 
      return "SEXTA-FEIRA";
      break;
    case 6: 
      return "SÁBADO";
      break;
    case 7: 
      return "DOMINGO";
      break;
    default:
      return "ERRO";
      break;
  }
}
