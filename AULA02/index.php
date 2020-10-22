<?php

// 1

$nome = 'Gustavo Matheus';
$idade = 20;
$ultimoSalario = 500.00;
$casado = 'solteiro';
$hobbie1 = 'tocar guitarra';
$hobbie2 = 'jogar videogame';
$hobbie3 = 'assistir vídeos';

echo "Meu nome é ${nome}, tenho ${idade} anos, meu último salário foi de R$ ${ultimoSalario}, <br> 
estou ${casado} e meus hobbies são: ${hobbie1}, ${hobbie2} e ${hobbie3}.";

echo '<br> <br>';

// 2

$idade2 = 20;
$anoAtual = 2020;

echo "Meu ano de nascimento é " . ($anoAtual - $idade2);

echo '<br> <br>';

// 3

$nome1 = 'Gustavo';
$nome2 = 'Matheus';
$sobrenome1 = 'Morinaga';
$sobrenome2 = 'Cardoso';
$idade3 = 20;

echo 'Meu nome é ' . $nome1 . ' ' . $nome2 . ' ' . $sobrenome1 . ' ' . $sobrenome2 . ' e tenho ' . $idade3 . ' anos.';

echo '<br> <br>';

// 4

$cidades = [ 'Rio de Janeiro', 'Belo Janeiro', 'São Paulo', 'Brasília', 'Porto Alegre' ];

echo $cidades[4];

echo '<br> <br>';

//5

$estados = [ 'São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Santa Catarina', 'Espiríto Santo' ];

echo implode(" – ", $estados);
