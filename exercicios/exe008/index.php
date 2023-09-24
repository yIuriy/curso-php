<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Exe008</title>
</head>

<body class="bg-dark text-white">
    <?php
    // Capturando os dados do formúlario Retroalimentado
    $primeiroValor = $_GET['primeiroValor'];
    $segundoValor = $_GET['segundoValor'];
    ?>

    <h1 class="p-1 text-center">Somador de Valores</h1>
    <div class="container text-right text-black bg-white rounded p-2" style="width: 370px">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="mb-3">
                <label for="primeiroValor" class="form-label">Primeiro Valor: </label>
                <input type="number" class="form-control" id="primeiroValor" name="primeiroValor" aria-describedby="seuNome" value="<?= $primeiroValor ?>" />
            </div>
            <div class="mb-3">
                <label for="segundoValor" class="form-label">Segundo Valor: </label>
                <input type="number" class="form-control" id="segundoValor" name="segundoValor" value="<?= $segundoValor ?>" />
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <div class="container text-right text-black bg-white rounded p-1
    mt-3" style="width: 370px">
        <h2 class="text-center">Resultado da Soma</h2>
        <?php
        if ($primeiroValor == "" && $segundoValor == "") {
            echo "<p><strong>Nenhum</strong> valor foi <em>inserido</em>!</p>";
        } elseif ($primeiroValor != "" && $segundoValor == "") {
            echo "<p>Somente o <strong>primeiro</strong> valor foi <em>inserido</em>!</p>";
        } elseif ($primeiroValor == "" && $segundoValor != "") {
            echo "<p>Somente o <strong>segundo</strong> valor foi <em>inserido</em>!</p>";
        } else {
            $somaDosValores = $primeiroValor + $segundoValor;


            echo  "<p>A soma entre os valores $primeiroValor e $segundoValor é igual <strong>$somaDosValores</strong></p>";
        }
        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>