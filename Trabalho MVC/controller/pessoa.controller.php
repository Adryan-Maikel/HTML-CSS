<?php
    include '../model/pessoa.class.php';
    $nome = $_GET['txtnome'];
    $sexo = $_GET['selsexo'];
    $peso = $_GET['numpeso'];
    $altura = $_GET['numaltura'];
    $p1 = new Pessoa($nome,$sexo,$peso,$altura);
    echo '<p>'.$p1.'</p>';
?>
