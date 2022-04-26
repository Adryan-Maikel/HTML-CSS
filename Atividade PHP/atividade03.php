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
            <h2>Atividade 03</h2>
            <p>
                Desenvolva um algoritmo que receba o nome de uma pessoa, o ano de nascimento e ano atual. Sendo:<br>
                $nome = "Borigodolfa";<br>
                $nascimento = 2000;<br>
                $atual = 2020;<br>
                Seu programa deve calcular a idade que a pessoa fará neste ano atual e mostrar na tela.
            </p>
            <p>
                <?php
                    //declarando
                    $nome;
                    $nascimento;
                    $atual;
                    $idade;
                    //atribuindo valor
                    $nome = "Borigodolfa";
                    $nascimento = 2000;
                    $atual = 2020;
                    //calculo
                    $idade = $atual - $nascimento;
                    //saida
                    echo '<p>Hello '.$nome.' você tem '.$idade.' anos</p>'
                ?>

            </p>
        </section>
        <footer>
            <address class="text-warning">Adryan Maikel</address>
        </footer>
    </main>
</body>
</html>
