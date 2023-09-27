<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Desafio 010</title>
</head>

<body class="bg-dark text-white">

  <?php
  $anoAtual = date("Y");
  $anoDeNascimento = $_GET["anoDeNascimento"];
  if ($anoDeNascimento == "") {
    $anoDeNascimento = 2005;
  };

  $anoInformado =  $_GET["anoInformado"];
  if ($anoInformado == "") {
    $anoInformado = $anoAtual;
  };

  $idadeResultante =  $anoInformado -$anoDeNascimento 
  ?>

  <h1 class="p-1 text-center">Informe um número</h1>
  <div class="container text-right text-black bg-white rounded p-2" style="width: 370px">
    <form action="" method="get">
      <div class="mb-3">
        <label for="anoDeNascimento" class="form-label">Em que ano você nasceu? </label>
        <input type="number" class="form-control" id="anoDeNascimento" name="anoDeNascimento" aria-describedby="seuNome" value="<?= $anoDeNascimento ?>" max="<?=$anoInformado?>"/>
      </div>
      <div class="mb-3">
        <label for="anoInformado" class="form-label">Quer saber sua idade em que ano? <br>(atualmente estamos em <?= $anoAtual ?>)</label>
        <input type="number" class="form-control" id="anoInformado" name="anoInformado" aria-describedby="seuNome" value="<?= $anoInformado ?>" />
      </div>

      <div class="text-center"><button type="submit" class="btn btn-primary w-75">Qual será minha idade?</button></div>
    </form>
  </div>
  <div class="container text-right text-black bg-white rounded p-2 mt-2" style="width: 370px">
    <h3 class="m-1">Resultado Final</h3>
    <?php
    echo "<p>Quem nasce em <strong>$anoDeNascimento</strong> vai ter $idadeResultante em $anoInformado!</p>"

    ?>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>