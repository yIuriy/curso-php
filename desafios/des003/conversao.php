<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Conversão De Real para Dólar</title>
</head>

<body class="bg-dark text-white text-right">

    <div class="container text-right text-black bg-white rounded p-1 mt-4" style="width: 470px">
        <h2 class="p-1 text-center">Conversão de moedas v1.0</h2>
        <?php
        $padraMoeda = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $valorEmRealBrasileiro = (float) $_GET["valorEmRealBrasileiro"] ?? 0; 
        const COTACAODOLAR = 4.92;
        $valorEmDolarAmericano = (float) $valorEmRealBrasileiro / COTACAODOLAR;

        echo "<p>Seus " . numfmt_format_currency($padraMoeda, $valorEmRealBrasileiro, "BRL") ." equivalem a <strong>" .numfmt_format_currency($padraMoeda, $valorEmDolarAmericano, "USD"). "</strong></p>";
        echo "*<strong>Cotação fixa de " .numfmt_format_currency($padraMoeda, COTACAODOLAR, "BRL") . "</strong> informada diretamente no código."

        ?>
        <p class="text-center mt-2 mb-1"><a href="javascript:history.go(-1)" class="text-black btn bg-primary text-white">→ Voltar para a página anterior.</a></p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>