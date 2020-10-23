<?php

// $json = file_get_contents('dados.json');

// $jsonDecode = json_decode($json);

// foreach ($jsonDecode as $pessoa) {
//   echo 'NOME: ' . $pessoa->nome . ' – SEXO: ' . $pessoa ->sexo . '<br>';
// }

// LEITURA DO JSON:
$json = file_get_contents('cep.json');

$jsonDecode = json_decode($json);

echo 'RUA: ' . $jsonDecode->logradouro . ' – LOCALIDADE: ' . $jsonDecode->localidade;

//ESCRITA NO JSON:
$arrayEstados = [ 'SP', 'RJ', 'RS' ];

echo json_encode($arrayEstados);

$arrayPessoas = [
  [ 'NOME' => 'GUSTAVO', 'idade' => 20, 'salario' => 1477, 'casado' => false ],
  [ 'NOME' => 'MATHEUS', 'idade' => 19, 'salario' => 1500, 'casado' => true ]
];

echo json_encode($arrayPessoas);
