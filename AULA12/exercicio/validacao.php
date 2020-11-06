<?php

$nomeInput = isset($_POST['name']) ? $_POST['name'] : '';
$emailInput = isset($_POST['email']) ? $_POST['email'] : '';
$cpfInput = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$tipoInput = isset($_POST['type']) ? $_POST['type'] : '';

function validarNome(string $nome): String {
  $teste = strpos($nome, " ");

  if ($teste === false) {
    echo "DEVE POSSUIR SOBRENOME";
  } else {
    return $nome;
  }
}

function validarEmail(string $email): String {
  $testeArroba = strpos($email, "@");
  $testePontos = strpos($email, ".");

  if (($testeArroba === false) || ($testePontos === false)) {
    echo "DEVE POSSUIR '@'e 2x '.' no e-mail";
  } else {
    return $email;
  }
}

function validarCpf(string $cpf): int {
  $cpfLimpo = str_replace(['.', '-'], "", $cpf);

  if (strlen($cpfLimpo) !== 11) {
    echo "DEVE ENTRAR COM TAMANHO CORRETO DE NÚMEROS DO CPF";
  } else {
    return intval(substr($cpfLimpo, 0, 9));
  }
}

function printDados(string $nome, string $email, string $tipo, string $cpf) {
  echo validarNome($nome) . "<br>";
  echo validarEmail($email) . "<br>";
  echo $tipo . "<br>";
  echo validarCpf($cpf);
}

printDados($nomeInput, $emailInput, $tipoInput, $cpfInput);
