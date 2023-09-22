<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <title>Sorteador de Números</title>
  </head>

  <body class="bg-dark text-white">
    <header></header>
    <div
      class="container text-right text-black bg-white rounded p-2 mt-3"
      style="width: 500px"
    >
      <h1 class="p-1 text-center">Trabalhando com números aleatórios</h1>
      <p class="m-0">Gerando um número aleatório entre 0 e 100...</p>
<?php 
  $numeroSorteado = mt_rand(0,100);
  echo "<p>O valor gerado foi <strong>$numeroSorteado</strong></p>";

?>
<p class="text-center"><input type="button" value="De novo" class="btn bg-danger" onclick="javascript:document.location.reload()"></p>
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
</html>
