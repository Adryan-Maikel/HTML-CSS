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
            <h2>Atividade 05</h2>
            <a href="index.php"><button type="button" class="btn btn-dark btn-lg">Voltar</button></a>
        </section>
        <section>
            <p>
                5. Faça um programa que receba o preço de um produto= 260.50, e o n° de parcelas desejado = 3. O programa deverá seguir a tabela abaixo e informar o valor total a pagar, e o valor de cada parcela.
                Até 3 parcelas = Terá 12% de juros sobre o valor do produto.
                Acima de 3 parcelas = Terá 25% de juros sobre o valor do produto.
                Utilize if.<br>
                Exemplo de resposta:<br>
                "Produto custa: R$ 260.5<br>
                Número de Parcelas: 3<br>
                Valor à Pagar: R$ 291,76<br>
                Valor de Cada Parcela: R$ 97,25"
            </p>
            <p>
                <?php
                    $precoProduto;
                    $numeroParcelas;
                    $totalAPagar;
                    $precoProduto = 260.50;
                    $numeroParcelas = 3;
                    if($numeroParcelas <= 0) {
                        echo 'Digite um valor de parcelas valido.';
                    } else if($numeroParcelas <= 3) {
                        $totalAPagar = $precoProduto*1.12;
                        echo 'O valor total a pagar é de R$ '.$totalAPagar;
                    } else {
                        $totalAPagar = $precoProduto*1.25;
                        echo 'O valor total a pagar é de R$ '.$totalAPagar;
                    }
                ?>

            </p>
        </section>
        <footer class="text-center">
            <address>Adryan Maikel &#128187;</address>
        </footer>
    </main>
</body>
</html>