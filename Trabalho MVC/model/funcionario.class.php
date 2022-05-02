<?php
    class Funcionario{
        private $nome;
        private $salario;
        private $valorVendas;

        public function Funcionario($nome, $salario, $valorVendas){
            $this->nome = $nome;
            $this->salario = $salario;
            $this->valorVendas = $valorVendas;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getSalario(){
            return $this->salario;
        }
        public function getValorVendas(){
            return $this->valorVendas;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }
        public function setValorVendas($valorVendas){
            $this->valorVendas = $valorVendas;
        }
        public function __toString(){
            return '<br>Nome: '.$this->getNome().'<br>Salario: R$ '
            .number_format($this->getSalario(),2,',','.').'<br>Valor de Vendas: R$ '.number_format($this->getValorVendas(),2,',','.');
        }
        public function calcularComissao(){//4% de comissão
            return $this->valorVendas * 0.04;
        }
        public function calcularSalarioFinal(){
            return $this->salario + $this->calcularComissao();
        }
        
    }
?>