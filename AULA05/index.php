<?php
  $nome = isset($_GET['nome']) ? $_GET['nome'] : '';
  $cpf = isset($_GET['cpf']) ? $_GET['cpf'] : '';
  $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : '';
  $idade = isset($_GET['idade']) ? $_GET['idade'] : '';

  echo $nome . "<br>";
  echo $cpf . "<br>";
  echo $sexo . "<br>";
  echo $idade . "<br>";

  if ((($sexo === 'M') && ($idade >= 65)) || (($sexo === 'F') && ($idade >= 60))) {
    echo "A PESSOA JÁ SE APOSENTOU <br>";
  } else {
    $restante = $sexo === 'M' ? 65 - $idade : 60 - $idade;

    echo "FALTA {$restante} ANO(S) PARA SE APOSENTAR <br>";
  }

  for ($i=0; $i <= $idade; $i++) {
    echo "{$i} – {$nome} <br>";
  }
