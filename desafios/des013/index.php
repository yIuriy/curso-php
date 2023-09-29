<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Desafio 013</title>
</head>

<body class="bg-dark text-white">
  <?php
  $padraoMonetario = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
  $valorSaque = $_GET["valorSaque"];
  if ($valorSaque == "") {
    $valorSaque = 0;
  };
  $sobra = $valorSaque;
  $notasDe100 = (int) ($sobra / 100);
  $sobra %= 100;
  $notasDe50 = (int) ($sobra / 50);
  $sobra %= 50;
  $notasDe10 = (int) ($sobra / 10);
  $sobra %= 10;
  $notasDe5 = (int) ($sobra / 5);
  $sobra %=  5;
  ?>

  <h1 class="p-1 text-center">Caixa Eletrônico</h1>
  <div class="container text-right text-black bg-white rounded p-2" style="width: 470px">
    <form action="" method="get">
      <div class="mb-3">
        <label for="valorSaque" class="form-label">Qual valor você deseja sacar? (R$)</label>
        <input type="number" class="form-control" id="valorSaque" name="valorSaque" aria-describedby="seuNome" value="<?= $valorSaque ?>" step="5" />
      </div>
      <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
      <div class="text-center"><button type="submit" class="btn btn-primary w-50">Sacar</button></div>
    </form>
  </div>
  <div class="container text-right text-black bg-white rounded p-2 mt-2" style="width: 470px">
    <h5 class="m-1">Saque de <?= numfmt_format_currency($padraoMonetario, $valorSaque, "BRL") ?> realizado</h4>
      <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
      <ul class="">
        <li style="display: flex; align-items: flex-end;">
          <img src="img/100-reais.jpg" alt="nota100reias" class="w-50 p-1">
          <span>X<strong><?= $notasDe100 ?></strong></span>
        </li>

        <li style="display: flex; align-items: flex-end;">
          <img src="img/50-reais.jpg" alt="nota50reais" class="w-50 p-1">
          <span>X<strong><?= $notasDe50 ?></strong></span>
        </li>

        <li style="display: flex; align-items: flex-end;">
          <img src="img/10-reais.jpg" alt="nota10reais" class="w-50 p-1">
          <span>X<strong><?= $notasDe10 ?></strong></span>
        </li>

        <li style="display: flex; align-items: flex-end;">
          <img src="img/5-reais.jpg" alt="nota5reais" class="w-50 p-1">
          <span>X<strong><?= $notasDe5 ?></strong></span>
        </li>
      </ul>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>