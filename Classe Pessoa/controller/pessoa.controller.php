<?php
    //Include - Fazemos o arquivo enxergar a classe:
    include '../model/pessoa.class.php';
    //Inserindo dados:
    $nome = $_GET['txtnome'];
    $idade = $_GET['txtidade'];
    //Instanciamos a classe:
    $p1 = new Pessoa();
    $p1->Pessoa($nome,$idade);
    //Saida de dados - mostrando as respostas.
    echo '<p>Resolução:<br>'.$p1->getNome().'<br> Tem '.$p1->getIdade().' anos.<br>Nasceu em '.$p1->acharAnoNascimento().'</p>';
?>