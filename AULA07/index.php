<?php

// GRAVAÇÃO DE ARQUIVOS DE TEXTO COM PHP

// 1 – ABRIR O ARQUIVO EM MEMÓRIA
$arquivo = fopen('log.txt', 'a+');

$conteudo = str_pad("Hello World!", 12, '|', STR_PAD_RIGHT);

// 2 – ESCREVER O ARQUIVO (PHP_EOL -> Quebra de linha compatível)
fwrite($arquivo, trim($conteudo) . PHP_EOL);

// 3 – FECHAR O RECURSO/ARQUIVO
fclose($arquivo);

// LEITURA DE ARQUIVOS DE TEXTO COM PHP

if(!file_exists('log.txt')) {
  echo "Arquivo inexistente";
  exit;
}

$arquivo = fopen('log.txt', 'r');

while (!feof($arquivo)) {
  $linha = fgets($arquivo);

  echo $linha . "<br>";
}

fclose($arquivo);

// trim() -> Remove espaços vazios antes e depois de uma string
// explode() -> Remove determinados caracteres de uma string
