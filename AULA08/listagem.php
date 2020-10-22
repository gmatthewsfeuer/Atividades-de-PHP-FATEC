<?php

if(!file_exists('./dados.txt')) {
  echo "Arquivo inexistente";
  exit;
}

$arquivo = fopen('./dados.txt', 'r');

$cabecalho = ['CÓDIGO', 'NOME', 'E-MAIL', 'SALÁRIO', 'TELEFONE'];

echo "<table border='1'><thead><tr>";

foreach ($cabecalho as $valor) {
  echo "<th>$valor</th>";
}

echo "</tr></thead><tbody>";

while (!feof($arquivo)) {
  $linha = fgets($arquivo);

  if (!$linha == "") {
    $linha = explode("|", $linha);
    
    $dado = array();
  
    echo "<tr>";
  
    for ($i = 0; $i < count($linha); $i++) {
      $dado[$i] = trim($linha[$i]);
  
      echo "<td>$dado[$i]</td>";
    }
  
    echo "</tr>";
  }
}

echo "</tbody></table>";

fclose($arquivo);
