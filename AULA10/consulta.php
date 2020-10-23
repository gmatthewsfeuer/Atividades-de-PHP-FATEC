<?php

$cep = (isset($_POST['cep'])) ? $_POST['cep'] : '';

if ($cep == '') {
  echo 'INFORME O CEP!';
  exit;
}

$cep = str_replace(['/', '.', ' ', '-'], '', $cep);

$nomeArquivo = $cep . '.json';

if (file_exists($nomeArquivo)) {
  $json = file_get_contents("./$nomeArquivo");
} else {
  $json = file_get_contents("http://viacep.com.br/ws/$cep/json/");

  $file = fopen($nomeArquivo, 'a+');
  fwrite($file, $json);
  fclose($file);
}

$endereco = json_decode($json);

echo 'RUA: ' . $endereco->logradouro . '<br>';
echo 'BAIRRO: ' . $endereco->bairro . '<br>';
echo 'CIDADE: ' . $endereco->localidade . '<br>';
echo 'UF: ' . $endereco->uf . '<br>';
