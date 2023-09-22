<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Exe004</title>
</head>

<body class="bg-dark text-white text-center">
    <h1 class="p-1">Tipo Primitivos Escalares</h1>
    <div class="container text-right text-black bg-white rounded p-1">


        <?php
        // 0x = hecadecimal 0b = binário 0 = Octal


        $numeroInt = 300; //int ou integer
        echo "O Valor da variável inteira é $numeroInt.<br>";

        $numeroIntHex = 0x1F; //int hexadecimal
        echo "O Valor da variável em formato hexadecimal (<strong>0x</strong>) é $numeroIntHex.<br>";

        $numeroIntBinario = 0b1011;
        echo "O Valor da variável em formato binário (<strong>0b</strong>) é $numeroIntBinario.<br>";

        $numeroIntOcta = 020;
        echo "O Valor da variável em formato octadecimal (<strong>0</strong>) é $numeroIntOcta.<br>";

        $numeroFloatPotencia = 3e2;
        echo "O Valor da variável do tipo float para potência (<strong>e</strong>) é $numeroFloatPotencia.<br>";

        $numeroString = (int) "567";
        echo "O Valor da variável é do tipo string convertida para integer graças a <strong>(int)</strong>, $numeroString.<br>";
        var_dump($numeroString)
        ?>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</html>