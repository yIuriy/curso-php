<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Desafio 009</title>
</head>

<body class="bg-dark text-white">

  <?php
  $primeiroValor =  $_GET["primeiroValor"] ?? 0;
  $primeiroPeso =  $_GET["primeiroPeso"] ?? 0;
  $segundoValor =  $_GET["segundoValor"] ?? 0;
  $segundoPeso =  $_GET["segundoPeso"] ?? 0;

  // Médias
  $mediaSimples =  ($primeiroValor + $segundoValor) / 2;
  $mediaPonderada = (($primeiroValor * $primeiroPeso) +  ($segundoValor * $segundoPeso)) / ($primeiroPeso + $segundoPeso);
  ?>

  <h1 class="p-1 text-center">Médias Aritméticas</h1>
  <div class="container text-right text-black bg-white rounded p-2" style="width: 370px">
    <form action="" method="get">
      <!-- Primeira Nota -->
      <div class="mb-3">
        <label for="primeiroValor" class="form-label bg-dark rounded p-1 text-white">1º Valor ⇩</label>
        <input type="number" class="form-control" id="primeiroValor" name="primeiroValor" aria-describedby="seuNome" value="<?= $primeiroValor ?>" step="0.01" />
      </div>
      <div class="mb-3">
        <label for="primeiroPeso" class="form-label bg-dark rounded p-1 text-white ">1º Peso ⇩</label>
        <input type="number" class="form-control" id="primeiroPeso" name="primeiroPeso" aria-describedby="seuNome" value="<?= $primeiroPeso ?>" step="0.01" />
      </div>
      <!-- Segunda Nota -->
      <div class="mb-3">
        <label for="segundoValor" class="form-label bg-dark rounded p-1 text-white">2º Valor ⇩</label>
        <input type="number" class="form-control" id="segundoValor" name="segundoValor" aria-describedby="seuNome" value="<?= $segundoValor ?>" step="0.01" />
      </div>
      <div class="mb-3">
        <label for="segundoPeso" class="form-label bg-dark rounded p-1 text-white">2º Peso ⇩</label>
        <input type="number" class="form-control" id="segundoPeso" name="segundoPeso" aria-describedby="seuNome" value="<?= $segundoPeso ?>" step="0.01" />
      </div>

      <div class="text-center"><button type="submit" class="btn btn-primary w-50">Calcular Média</button></div>
    </form>
  </div>
  <div class="container text-right text-black bg-white rounded p-2 mt-2" style="width: 370px">
    <h3 class="m-1">Cálculo das Médias</h3>
    <?php
    echo "Analisando os valores $primeiroValor e $segundoValor:";
    echo  "<ul>
    <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($mediaSimples, 2, "," , ".") . "
    <li>A <strong>Média Aritmética Ponderada</strong> com pesos $primeiroPeso e $segundoPeso é igual a " . number_format($mediaPonderada, 2, ",", ".") . "
    </ul>"
    ?>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>