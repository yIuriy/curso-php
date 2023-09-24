<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Exe007</title>
</head>

<body class="bg-dark text-white text-right">
    <h1 class="p-1 text-center"></h1>
    <div class="container text-right text-black bg-white rounded p-3">
        <pre>
            <?php
            setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

            session_start();
            $_SESSION["teste"] = "FUNCIONOU!";

            echo "<h1>Superglobal GET</h1>";
            var_dump($_GET);

            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST);

            echo "<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST);

            echo "<h1>Superglobal COOKIES</h1>";
            var_dump($_COOKIE);

            echo "<h1>Superglobal SESSION</h1>";
            var_dump($_SESSION);

            echo "<h1>Superglobal ENV</h1>";
            var_dump($_ENV);
            //  foreach(getenv() as $c => $v){
            //     echo"<br> $c -> $v";}

            echo "<h1>Superglobal SERVER</h1>";
            var_dump($_SERVER);

            echo "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS);
            ?>
        </pre>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>