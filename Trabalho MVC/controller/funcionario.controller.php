<?php
    //Include - Fazemos o arquivo enxergar a classe:
    include '../model/funcionario.class.php';
    //Inserindo dados:
    $nome = $_GET['txtnome'];
    $salario = $_GET['txtsalario'];
    $valorVendas = $_GET['txtvendas'];
    //Instanciamos a classe:
    $f1 = new Funcionario();
    $f1->Funcionario($nome,$salario,$valorVendas);
    //Saida de dados - mostrando as respostas.
    echo '<p>'.$f1.'<br>Comissão: R$ '.number_format($f1->calcularComissao(),2,',','.').'<br>Salário final: R$ '.number_format($f1->calcularSalarioFinal(),2,',','.').'</p>';