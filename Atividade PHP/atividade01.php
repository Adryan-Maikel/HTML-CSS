<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Adryan Maikel :: maikeladryan@gmail.com">
    <meta name="description" content="Site para mostrar modelo de uma pagina One Page">
    <meta name="keywords" content="PHP, Soma, Subtração, Multiplicação">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Atividade PHP</title> 
</head>
<body class="corpo">
    <main class="container">
        <a href="index.php" class="text-decoration-none">
            <header class="topo">
                <h1 class="text-center display-3 text-warning">Atividade PHP</h1>
            </header>
        </a>
        <section>
            <h2>Atividade 01</h2>
            <p>
                Desenvolva um algoritmo que receba três número, sendo eles:<br>
                $numero1 = 10 <br>
                $numero2 = 20 <br>
                $numero3 = 20 <br>
                Seu programa deve encontrar e mostrar na tela a soma dos três números.
            </p>
            <p>
                <?php
                    //declarando
                    $numero1;
                    $numero2;
                    $numero3;
                    $somaDosNumeros;
                    //atribuindo valor
                    $numero1 = 10;
                    $numero2 = 20;
                    $numero3 = 20;
                    //calculo
                    $somaDosNumeros = $numero1 + $numero2 + $numero3;
                    //saida
                    echo 'A soma dos números é: '.$somaDosNumeros;
                ?>

            </p>
        </section>
        <footer>
            <address class="text-warning">Adryan Maikel</address>
        </footer>
    </main>
</body>
</html>
