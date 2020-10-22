<?php

// Fuso Horário
date_default_timezone_set('America/Sao_Paulo');

// echo date('d/m/Y H:i:s');

// Formatando data e hora
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

$dataBr = '15/10/2020';

$dataIng = dataToIng($dataBr);
echo $dataIng . '<br>';

// Interpreta qualquer descrição de data/hora em texto em inglês em timestamp Unix
$timestamp = strtotime(date('Y-m-d'));

echo date('d/m/Y', $timestamp) . "<br>";

$data = '2020-10-15';

// Adicionando anos, meses e dias à data selecionada
$novaData = date('Y-m-d', strtotime('+1 Years 10 days', strtotime($data)));
echo $novaData;
