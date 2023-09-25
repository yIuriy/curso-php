<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Desafio 007</title>
</head>

<body class="bg-dark text-white">

  <?php
  $padraoMonetario = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
  $salarioTotal = (int) $_GET["salarioTotal"] ?? 1;
  if ($salarioTotal <= 0) {
    echo '<div class="alert alert-danger text-center">O valor do salário deve ser maior que zero.</div>';
  }
  const SALARIOMININO =  1380;
  $quantidadeDeSalariosInteirosNecessarios = intdiv($salarioTotal, SALARIOMININO);
  $quantidadeRestanteDoSalarioMinino =  $salarioTotal % SALARIOMININO;
  ?>

  <h1 class="p-1 text-center">Informe seu salário</h1>
  <div class="container text-right text-black bg-white rounded p-2" style="width: 370px">
    <form action="" method="get">
      <div class="mb-3">
        <label for="salarioTotal" class="form-label">Salário (R$)</label>
        <input type="number" class="form-control" id="salarioTotal" name="salarioTotal" aria-describedby="seuNome" value="<?= "$salarioTotal" ?>" />
      </div>
      <p>Considerando o salário minímo de <strong><?= numfmt_format_currency($padraoMonetario, SALARIOMININO, "BRL") ?></strong></p>

      <div class="text-center"><button type="submit" class="btn btn-primary w-50">Enviar</button></div>
    </form>
  </div>
  <div class="container text-right text-black bg-white rounded p-1 mt-2" style="width: 370px">
    <h3 class="m-1">Resultado Final</h3>
    <?php
    echo "<p class='m-2'>Quem recebe um salário de <strong>" . numfmt_format_currency($padraoMonetario, SALARIOMININO, "BRL") . "</strong> ganha <strong>$quantidadeDeSalariosInteirosNecessarios salários minímos </strong>+ " . numfmt_format_currency($padraoMonetario, $quantidadeRestanteDoSalarioMinino, "BRL");
    ?>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>