<?php
    class Pessoa {
        private $nome;
        private $idade;
        public function Pessoa($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function acharAnoNascimento(){
            return date('Y') - $this->idade;
        }
    }
?>