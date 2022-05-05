<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Cadastramento Produto </title>
    <meta name="author" content="Adryan Maikel">
    <meta name="description" content="Programa cadastrando Produto">
    <meta name="keywords" content="PHP, CSS, Estilização, HTML, MVC">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/png">
</head>
<body>
    <a href="../index.html">
    <header class="jumbotron container">
        <h1 class="d-none">Cadastro dados Funcionario</h1>
    </header>
    </a>
    <section class="container">
        <h2 class="text-center">Formulario: </h2>
        <?php
            include '../model/funcionario.class.php';
            $nome = $_GET['txtNome'];
            $cargo = $_GET['txtCargo'];
            $cpf = $_GET['numCpf'];
            $valorHora = $_GET['numValorHora'];
            $quantidadeHora = $_GET['numQuantidadeHoras'];
            $dependentes = $_GET['numDependentes'];
            $horasExtras50 = $_GET['numHorasExtras50'];
            $horasExtras100 = $_GET['numHorasExtras100'];
            $tipoInsalubridade = $_GET['selInsalubridade'];
            $valorTransporteMensal = $_GET['numTransporteMensal'];
            $valorRefeicaoDiaria = $_GET['numRefeicaoDiaria'];
            $f1 = new Funcionario($nome,$cargo,$cpf,$valorHora,$quantidadeHora,$dependentes,$horasExtras50,$horasExtras100,$tipoInsalubridade,$valorTransporteMensal,$valorRefeicaoDiaria); 
            echo '<p class="text-reset">'.$f1.'</p>';

        ?>
    </section>    
</body>
</html>