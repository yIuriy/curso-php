<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Desafio 012</title>
</head>

<body class="bg-dark text-white">

  <?php
  $totalSegundos = $_GET["totalSegundos"];
  if ($totalSegundos == "") {
    $totalSegundos = 0;
  };
  $sobra = $totalSegundos;
  $totalSemanas = (int) ($sobra / 604800);
  $sobra = $sobra % 604800;
  $totalDias = (int) ($sobra / 86400);
  $sobra = $sobra % 86400;
  $totalHoras = (int) ($sobra / 3600);
  $sobra = $sobra % 3600;
  $totalMinutos = (int) ($sobra / 60);
  $sobra = $sobra % 60

  ?>

  <h1 class="p-1 text-center">Calculadora de Tempo</h1>
  <div class="container text-right text-black bg-white rounded p-2" style="width: 370px">
    <form action="" method="get">
      <div class="mb-3">
        <label for="totalSegundos" class="form-label">Qual é o total de segundos?</label>
        <input type="number" class="form-control" id="totalSegundos" name="totalSegundos" aria-describedby="seuNome" value="<?= $totalSegundos ?>" />
      </div>

      <div class="text-center"><button type="submit" class="btn btn-primary w-50">Calcular</button></div>
    </form>
  </div>
  <div class="container text-right text-black bg-white rounded p-2 mt-2" style="width: 370px">
    <h3 class="m-1">Totallizando tudo</h3>
    <p>Analisando o valor que você digitou, <strong><?= number_format($totalSegundos, 2, ",", ".") ?> segundos</strong> equivalem a um total de:</p>
    <ul>
      <li><?= $totalSemanas ?> semanas</li>
      <li><?= $totalDias ?> dias</li>
      <li><?= $totalHoras ?> horas</li>
      <li><?= $totalMinutos ?> minutos</li>
      <li><?= $sobra ?> segundos</li>
    </ul>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>