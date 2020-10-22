<?php

if(!file_exists('dados.txt')) {
  echo "Arquivo inexistente";
  exit;
} else {
  $codigo = 0;
  $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $salario = isset($_POST['salario']) ? $_POST['salario'] : '';
  $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
  
  $arquivo_ler = fopen('./dados.txt', 'r');
  
  while (!feof($arquivo_ler)) {
    $linha = fgets($arquivo_ler);
  
    if ($linha != '') {
      $codigo++;
    }
  
    $codigo_string = str_pad($codigo, 8, '0', STR_PAD_LEFT) . str_pad('', 3, ' | ', STR_PAD_RIGHT);
  }
  
  $arquivo_escrever = fopen('./dados.txt', 'a+');
  
  $dados = [$codigo_string, $nome . str_pad('', 3, ' | ', STR_PAD_RIGHT), $email . str_pad('', 3, ' | ', STR_PAD_RIGHT), $salario . str_pad('', 3, ' | ', STR_PAD_RIGHT), $telefone];
    
  foreach ($dados as $valor) {
    fwrite($arquivo_escrever, $valor);
  }
  
  fwrite($arquivo_escrever, PHP_EOL);
  
  echo "<h1>Cadastro realizado com sucesso!</h1>";
  echo "<a href='./index.html'>Voltar</a>";
  
  fclose($arquivo_escrever);
  fclose($arquivo_ler);
}
