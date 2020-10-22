<?php

// 1

$idade = 20;

for ($i = 0; $i <= $idade; $i++) {
  if ($i % 2 == 0) {
    echo "$i ";
  }
}

echo "<br> <br>";

// 2

$qtdImpares = 0;

for ($i = $idade; $i >= 0; $i--) {
  if ($i % 2 != 0) {
    $qtdImpares++;
  }
}

echo $qtdImpares;

echo "<br> <br>";

// 3

// for ($i = 1; $i <= 100; $i++) { 
//   for ($j = 0; $j <= 100; $j++) { 
//     echo "$i x $j = " . ($i * $j) . "<br>";
//   }
// }
//
// echo "<br> <br>";

// 4

$contador = 10;
$soma = 0;

while ($contador <= 100) {
  $soma += $contador;

  $contador++;
}

echo "$soma ";

echo "<br> <br>";

// 5

$uf = [
  'SP',
  'MG',
  'SC',
  'SP',
  'BA',
  'SC'
];

$qtdSP = 0;

foreach ($uf as $estado) {
  if ($estado === 'SP') {
    $qtdSP++;
  }
}

echo $qtdSP;

echo "<br> <br>";

// 6

$pessoas = [
  ['nome' => 'João', 'sexo' => 'M'],
  ['nome' => 'Joana', 'sexo' => 'F'],
  ['nome' => 'Rodrigo', 'sexo' => 'M'],
  ['nome' => 'Jessica', 'sexo' => 'F'],
  ['nome' => 'Marcela', 'sexo' => 'F'],
  ['nome' => 'Pedro', 'sexo' => 'M'],
  ['nome' => 'Milena', 'sexo' => 'F']
];

foreach ($pessoas as $valor) {
  if ($valor['sexo'] === 'F') {
    echo "${valor['nome']} <br>";
  }
}
