<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <title>Des006</title>

</head>

<body class="bg-dark text-white">
  <?php
  $valorDividendo = $_GET["valorDividendo"] ?? 0;
  $valorDivisor = $_GET["valorDivisor"] ?? 0;
  if ($valorDividendo == "") {
    $valorDividendo = (int) 0;
  }
  if ($valorDivisor == "") {
    $valorDivisor = (int) 1;
  }
  $valorResto = $valorDividendo % $valorDivisor;
  $valorQuociente = intdiv($valorDividendo,  $valorDivisor);
  ?>
  <h1 class="p-1 text-center">Anatomia de uma divisão</h1>
  <div class="container text-right text-black bg-white rounded p-2" style="width: 370px">
    <form action="" method="get">
      <div class="mb-3">
        <label for="valorDividendo" class="form-label">Dividendo</label>
        <input type="number" class="form-control" id="valorDividendo" name="valorDividendo" aria-describedby="seuNome" value="<?= $valorDividendo ?>" />
      </div>
      <div class="mb-3">
        <label for="valorDivisor" class="form-label">Divisor</label>
        <input type="number" class="form-control" id="valorDivisor" name="valorDivisor" value="<?= $valorDivisor ?>" />
      </div>

      <div class="text-center"><button type="submit" class="btn btn-primary w-50">Analisar</button></div>
    </form>
  </div>

  <div class="container text-right text-black bg-white rounded mt-2 pb-2" style="width: 370px">
    <table class="m-auto display-3" style="width: 200px;">
      <h3 class="text-center p-2">Estrutura da Divisão</h3>
      <tr class="text-center">
        <td  class="border-end border-black">
          <?= "$valorDividendo";
          ?></td>
        <td class="border-bottom border-black">
          <?= "$valorDivisor";
          ?></td>
      </tr>
      <tr class="text-center">
        <td class="border-end border-black text-decoration-underline"><?php echo "$valorResto"; ?></td>
        <td><?php echo "$valorQuociente" ?></td>
      </tr>
    </table>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>