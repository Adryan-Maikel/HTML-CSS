<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Adryan Maikel :: maikeladryan@gmail.com">
    <meta name="description" content="Atividade dia 25/04 da aula 14, utilizando PHP.">
    <meta name="keywords" content="PHP, HTML, CSS, IF, Else">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Atividade Aula 14</title>
</head>
<body class="corpo">
    <main class="container">
        <header class="topo">
            <h1 class="text-center display-3">Atividades 2 PHP</h1>
        </header>
        <section class="text-center display-2 secao">
            <h2>Atividade 01</h2>
            <a href="index.php"><button type="button" class="btn btn-dark btn-lg">Voltar</button></a>
        </section>
        <section>
            <p>   
                1. Desenvolva um programa que leia um valor em dólar ($10), e a cotação atual do dólar(4.80). Seu programa deve mostrar a conversão para Reais.
            </p>
            <p>
                <?php
                    $valorDolar;
                    $cotacaoDolar;
                    $valorReal;
                    $valorDolar = 10;
                    $cotacaoDolar = 4.8;
                    $valorReal = $valorDolar * $cotacaoDolar;
                    echo 'A quantidade de '.$valorDolar.' dolares custando R$ '.$cotacaoDolar.' cada dolar, ao todo terá R$ '.$valorReal.'.';
                ?>

            </p>
        </section>
        <footer class="text-center">
            <address>Adryan Maikel &#128187;</address>
        </footer>
    </main>
</body>
</html>