<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cadastro PHP</title>
</head>

<body class="bg-dark text-white text-center">
    <h1 class="p-1">Resultado do Processamento</h1>
    <div class="container text-right text-black bg-white rounded p-1">
        <?php
            $nome = $_GET["nomeCadastrado"] ?? "Nome não informado" ;
            $sobrenome = $_GET["sobrenomeCadastrado"] ?? "Sobrenome não informado" ;
            echo "É um grande prazer te conhecer,<strong> $nome $sobrenome</strong>!"

            
        ?>
        <p><a href="javascript:history.go(-1)" class="text-black">Voltar para a página anterior.</a></p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>