<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

<?php

if(!file_exists('./estoque.txt')) {
  echo "Arquivo inexistente";
  exit;
}

$arquivo = fopen('./estoque.txt', 'a+');

$cabecalho = ['ID', 'CODIGO', 'CODIGO DE BARRA', 'DESCRICAO', 'CNPJ DO FABRICANTE', 'VALOR', 'ESTOQUE', 'STATUS', 'DATA/HORA CADASTRO'];

echo "<main class='d-flex flex-column align-items-center justify-content-center container'><table class='table table-sm table-bordered'><thead class='thead-dark'><tr>";

foreach ($cabecalho as $valor) {
  echo "<th scope='col'>$valor</th>";
}

echo "</tr></thead><tbody>";

while (!feof($arquivo)) {
  $linha = fgets($arquivo);

  if (!$linha == "") {
    $linha = explode("|", $linha);
    
    $dado = array();

    for ($i = 0; $i < count($linha); $i++) {
      $dado[$i] = trim($linha[$i]);
    }

    if ($dado[7] == 'INATIVO') {
      echo "<tr class='inativo'>";
    } else {
      echo "<tr>";
    }
  
    for ($i = 0; $i < count($linha); $i++) {
      echo "<td>$dado[$i]</td>";
    }
  
    echo "</tr>";
  }
}

echo "</tbody></table><br>";
echo "<a class='btn btn-secondary' href='./index.html'>Voltar</a></main>";

fclose($arquivo);
