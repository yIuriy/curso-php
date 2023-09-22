<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Resultado</title>
</head>

<body class="bg-dark text-white text-right">

    <div class="container text-right text-black bg-white rounded p-1 mt-4" style="width: 370px">
        <h2 class="p-1 text-center">Resultado do Final</h2>
        <?php
        $numeroInformado =  $_GET["numeroInformado"];
        $antecessorDoNumero = $numeroInformado - 1;
        $sucessorDoNumero = $numeroInformado + 1;
        echo "O número escolhido foi <strong>$numeroInformado</strong><br>
        O seu <em>antecessor</em> é $antecessorDoNumero<br>
        O seu <em>sucessor</em> é $sucessorDoNumero<br>";
        ?>
        <p class="text-center mt-2 mb-1"><a href="javascript:history.go(-1)" class="text-black btn bg-primary text-white">→ Voltar para a página anterior.</a></p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>