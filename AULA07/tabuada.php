<?php

$arquivo = fopen('tabuada.txt', 'a+');

fwrite($arquivo, str_pad("TABUADA", 12, " ", STR_PAD_BOTH) . PHP_EOL);

for ($i = 0; $i <= 100; $i++) { 
  for ($j = 0; $j <= 100; $j++) { 
    fwrite($arquivo, str_pad("$i x $j = " . $i * $j, 12, " ", STR_PAD_BOTH) . PHP_EOL);
  }
}

fclose($arquivo);

$arquivo = fopen('tabuada.txt', 'r');

while (!feof($arquivo)) {
  $linha = fgets($arquivo);

  echo "<h4>$linha</h4>";
}

fclose($arquivo);

$arquivo = fopen('tabuada_impar.txt', 'a+');

for ($i = 0; $i <= 100; $i++) { 
  for ($j = 0; $j <= 100; $j++) { 
    if (($i % 2 !== 0) && ($j % 2 !== 0)) {
      fwrite($arquivo, str_pad("$i x $j = " . $i * $j, 12, " ", STR_PAD_BOTH) . PHP_EOL);
    }
  }
}

fclose($arquivo);

$arquivo = fopen('tabuada_impar.txt', 'r');

while (!feof($arquivo)) {
  $linha = fgets($arquivo);
  
  echo "<h4>$linha</h4>";
}

fclose($arquivo);
