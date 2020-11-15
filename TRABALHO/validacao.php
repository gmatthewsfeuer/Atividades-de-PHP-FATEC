<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

<main class="d-flex flex-column align-items-center justify-content-center">

<?php

/* ENTRADAS */

$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';
$codigoDeBarras = isset($_POST['codigoDeBarras']) ? $_POST['codigoDeBarras'] : '';
$valor = isset($_POST['valor']) ? $_POST['valor'] : '';
$quantidade = isset($_POST['quantidade']) ? $_POST['quantidade'] : '';
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';

$status = isset($_POST['status']) ? $_POST['status'] : '';

/* VALIDAÇÕES */

function validarCodigo($codigo = 0) {
  if ($codigo < 1) {
    return palavraSublinhada("CÓDIGO") . " DEVE SER MAIOR QUE 0 (ZERO)";
    exit;
  } else {
    return true;
  }
}

function validarCNPJ(string $cnpj) {
  $cnpjLimpo = str_replace(['.', '/', '-'], '', $cnpj);

  if (strlen($cnpjLimpo) !== 14) {
    return palavraSublinhada("CNPJ") . " DEVE CONTER 14 DÍGITOS, FOI DIGITADO " . strlen($cnpjLimpo);
    exit;
  } else {
    return true;
  }
}

function validarCodigoDeBarras(string $codigoDeBarras) {
  $tamanho = intval(strlen(substr($codigoDeBarras, 0, 14)));

  if (($tamanho >= 13) && ($tamanho <= 14)) {
    return true;
  } else {
    return palavraSublinhada("CÓDIGO DE BARRAS") . " DEVE CONTER 14 DÍGITOS, FOI DIGITADO " . strlen((string)$codigoDeBarras);
    exit;
  }
}

function validarValor(float $valor = 0) {
  if (($valor < 1)) {
    return palavraSublinhada("VALOR") . " DEVE SER MAIOR QUE 0 (ZERO)";
    exit;
  } else {
    return true;
  }
}

function validarQuantidade(int $quantidade) {
  if ($quantidade < 1) {
    return palavraSublinhada("QUANTIDADE EM ESTOQUE") . " DEVE SER MAIOR QUE 0 (ZERO)";
  } else {
    return true;
  }
}

function validar($codigo, $cnpj, $codigoDeBarras, $valor, $quantidade) {
  if (($codigo !== 1) && ($cnpj !== 1) && ($codigoDeBarras !== 1) && ($valor !== 1) && ($quantidade !== 1)) {
    $validacoes = [$codigo, $cnpj, $codigoDeBarras, $valor, $quantidade];

    foreach ($validacoes as $chave) {
      if (gettype($chave) === "string") {
        echo "<h1>Erro</h1>";
        echo "<p><b>PROBLEMA</b>: ${chave}</p>";
        echo "<a class='btn btn-danger' href='./index.html'>OK</a></main>";
      }
    }

    exit;
  } else {
    gravarDados();
  }
}

validar(validarCodigo($codigo), validarCNPJ($cnpj), validarCodigoDeBarras($codigoDeBarras), validarValor($valor), validarQuantidade($quantidade));

/* GRAVAÇÃO DOS DADOS */

function gravarDados() {
  if(!file_exists('estoque.txt')) {
    echo "<h1>Arquivo inexistente</h1>";
    exit;
  } else {
    $id = 1;

    date_default_timezone_set('America/Sao_Paulo');

    $arquivo = fopen('./estoque.txt', 'a+');

    while(!feof($arquivo)) {
      $linha = fgets($arquivo);

      if ($linha != '') {
        $id++;
      }

      $id_string = str_pad($id, 8, '0', STR_PAD_LEFT) . str_pad('', 3, ' | ', STR_PAD_RIGHT);
    }

    global $codigo;
    global $cnpj;
    global $codigoDeBarras;
    global $valor;
    global $quantidade;
    global $status;
    global $descricao;

    $dados = [
      $id_string . str_pad('', 0, ' | ', STR_PAD_RIGHT),
      $codigo . str_pad('', 3, ' | ', STR_PAD_RIGHT),
      $codigoDeBarras . str_pad('', 3, ' | ', STR_PAD_RIGHT),
      $descricao . str_pad('', 3, ' | ', STR_PAD_RIGHT),
      $cnpj . str_pad('', 3, ' | ', STR_PAD_RIGHT),
      textoMoeda(converterMoeda($valor)) . str_pad('', 3, ' | ', STR_PAD_RIGHT),
      $quantidade . str_pad('', 3, ' | ', STR_PAD_RIGHT),
      converterStatus($status) . str_pad('', 3, ' | ', STR_PAD_RIGHT),
      dataToBr() . " " . horarioToBr()
    ];

    foreach ($dados as $valor) {
      fwrite($arquivo, $valor);
    }

    fwrite($arquivo, PHP_EOL);

    echo "<main class='d-flex flex-column align-items-center justify-content-center container'>";
    echo "<h1>Cadastro realizado com sucesso!</h1>";
    echo "<a class='btn btn-secondary' href='./listagem.php'>Listagem de produtos</a><br>";
    echo "<a class='btn btn-secondary' href='./index.html'>Voltar</a></main>";

    fclose($arquivo);
  }
}

/* FUNÇÕES ADICIONAIS */

function dataToBr(): String {
  $data = date('d-m-Y');

  $arrayData = explode('-', $data);
  $dataNova = $arrayData[0] . '/' . $arrayData[1] . '/' . $arrayData[2];

  return $dataNova;
}

function horarioToBr(): String {
  return date('H:i:s');
}

function converterStatus(int $status): String {
  switch ($status) {
    case 0:
      return "INATIVO";
      break;
    case 1:
      return "ATIVO";
      break;
    default:
      return "DEU PAU";
      break;
  }
}

function converterMoeda(float $valor): String {
  return number_format($valor, 2, ',', '.');
}

function textoMoeda(string $valor): String {
  return "R$ ${valor}";
}

function palavraSublinhada($palavra) {
  return "<u>${palavra}</u>";
}

?>

</main>
