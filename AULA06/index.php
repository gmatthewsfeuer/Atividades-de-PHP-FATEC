<?php
  eval('echo ' .$_GET['v1'].$_GET['op'].$_GET['v2'].';');

  // $valor1 = isset($_POST['valor1']) ? $_POST['valor1'] : '';
  // $valor2 = isset($_POST['valor2']) ? $_POST['valor2'] : '';

  // $operacao = isset($_POST['operacoes']) ? $_POST['operacoes'] : '';

  // switch ($operacao) {
  //   case 'soma':
  //     $resultado = $valor1 + $valor2;
  //     $op_sinal = '+';
  //     break;
  //   case 'subtracao':
  //     $resultado = $valor1 - $valor2;
  //     $op_sinal = '-';
  //     break;
  //   case 'multiplicacao':
  //     $resultado = $valor1 * $valor2;
  //     $op_sinal = 'x';
  //     break;
  //   case 'divisao':
  //     $resultado = $valor1 / $valor2;
  //     $op_sinal = ':';
  //     break;
  //   case 'modulo':
  //     $resultado = $valor1 % $valor2;
  //     $op_sinal = '%';
  //     break;
  //   case 'potencia':
  //     $resultado = $valor1 ** $valor2;
  //     $op_sinal = '^';
  //     break;
  //   default:
  //     echo 'Erro';
  //     break;
  // }

  // echo "<h1>RESULTADO:</h1>";
  // echo "<h3>{$valor1} {$op_sinal} {$valor2} = {$resultado}</h3>";
