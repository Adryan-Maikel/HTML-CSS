<?php
    class Pessoa{
        private $nome;
        private $genero;
        private $peso;
        private $altura;

        public function Pessoa($nome, $genero, $peso, $altura){
            $this->nome = $nome;
            $this->genero = $genero;
            $this->peso = $peso;
            $this->altura = $altura;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getGenero(){
            if($this->genero == 1){
                $this->genero = 'homem';
            } else {
                $this->genero = 'mulher';
            }
            return $this->genero;
        }
        public function setGenero($genero){
            $this->genero = $genero;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function setPeso($peso){
            $this->peso = $peso;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }
        public function calcularImc(){
            return $this->peso * / pow($this->altura,2);
        }
        public function pesoIdeal(){
            $pesoIdeal = "";
            $imc = $this->calcularImc();
            if ($imc >= 18.5 && $imc <= 24.9) {
                $pesoIdeal = "Você está no peso ideal.";
            } else {
                $pesoIdeal = "Você não está no peso ideal.";
            }
            return $pesoIdeal;
        }
        public function __toString(){
            return '<br>Nome: '.$this->getNome().'<br>Você é '
            .$this->getGenero().'<br>Seu peso é '
            .number_format($this->getPeso(),1,'.','.').' KG<br>Sua altura é '
            .$this->getAltura().' M<br>Seu imc é '
            .number_format($this->calcularImc(),2,'.','.').
            '<br>'.$this->pesoIdeal();
        }
    }
?>
