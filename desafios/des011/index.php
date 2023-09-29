<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Desafio 011</title>
</head>

<body class="bg-dark text-white">

  <?php
  $padraoMonetario = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

  $precoDoProduto = $_GET["precoDoProduto"];
  if ($precoDoProduto == "") {
    $precoDoProduto = 0;
  };
  $percentualReajuste = $_GET["percentualReajuste"] ?? 0;
  $porcentagemReajuste = $percentualReajuste / 100;
  $precoFinalDoProduto = ($precoDoProduto * $porcentagemReajuste) + $precoDoProduto
  ?>

  <h1 class="p-1 text-center">Reajustador de Preços</h1>
  <div class="container text-right text-black bg-white rounded p-2" style="width: 370px">
    <form action="" method="get">
      <div class="mb-3">
        <label for="precoDoProduto" class="form-label">Preço do Produto(R$)</label>
        <input type="number" class="form-control" id="precoDoProduto" name="precoDoProduto" aria-describedby="seuNome" value="<?= $precoDoProduto ?>" step="0.01"/>
      </div>
      <div class="mb-3">
        <label for="percentualReajuste" class="form-label">Qual será o percentual de reajuste? (<span id="percentualVisor"><?= $percentualReajuste ?></span>)</label>
        <input type="range" class="btn w-100" id="percentualReajuste" name="percentualReajuste" aria-describedby="seuNome" value="<?= $percentualReajuste ?>" oninput="atualizarValorPercentual()" />
      </div>

      <div class="text-center"><button type="submit" class="btn btn-primary w-75">Reajustar</button></div>
    </form>
  </div>
  <div class="container text-right text-black bg-white rounded p-2 mt-2" style="width: 370px">
    <h3 class="m-1">Resultado do Reajuste</h3>
    <?php
    echo "<p>O produto que custava " . numfmt_format_currency($padraoMonetario, $precoDoProduto, "BRL") . ", com <strong>$percentualReajuste% de aumento</strong> vai passsar a custar <strong>" . numfmt_format_currency($padraoMonetario, $precoFinalDoProduto, "BRL") . "</strong> a partir de agora.</p>";

    ?>
  </div>
</body>
<script>
  function atualizarValorPercentual() {
    let porcentagemRecebida = Number(document.getElementById("percentualReajuste").value)
    let percentualVisor = document.getElementById("percentualVisor")
    percentualVisor.innerHTML = porcentagemRecebida
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>