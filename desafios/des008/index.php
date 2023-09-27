<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Desafio 008</title>
</head>

<body class="bg-dark text-white">

  <?php
    $numeroInformado = (float) $_GET["numeroInformado"] ?? 0;
    $raizQuadradaDoNumero = sqrt($numeroInformado);
    $raizCubicaDoNumero = pow($numeroInformado,1.0/3.0);
  ?>

  <h1 class="p-1 text-center">Informe um número</h1>
  <div class="container text-right text-black bg-white rounded p-2" style="width: 370px">
    <form action="" method="get">
      <div class="mb-3">
        <label for="numeroInformado" class="form-label">Número:</label>
        <input type="number" class="form-control" id="numeroInformado" name="numeroInformado" aria-describedby="seuNome" value="<?=$numeroInformado?>" />
      </div>

      <div class="text-center"><button type="submit" class="btn btn-primary w-50">Calcular Raízes</button></div>
    </form>
  </div>
  <div class="container text-right text-black bg-white rounded p-2 mt-2" style="width: 370px">
    <h3 class="m-1">Resultado Final</h3>
    <?php
  echo "<p>Analisando o <strong>número $numeroInformado</strong>, temos:</p>";
  echo"<ul>
  <li> A sua raiz quadrada é <strong>".number_format($raizQuadradaDoNumero,3)."</strong>
  <li> A sua raiz cúbiva é <strong>".number_format($raizCubicaDoNumero,3)."</strong>
  </ul>"

    ?>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>