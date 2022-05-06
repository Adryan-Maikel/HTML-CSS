<?php
    class Funcionario {
        private $nome;
        private $cpf;
        private $cargo;
        private $valorHora;
        private $quantidadeHoras;
        private $dependentes;
        private $horasExtras50;
        private $horasExtras100;
        private $tipoInsalubridade;
        private $valorTransporteMensal;
        private $valorRefeicaoDiaria;

        public function Funcionarios($nome,$cargo,$cpf,$valorHora,$quantidadeHoras,$dependentes,$horasExtras50,$horasExtras100,$tipoInsalubridade,$valorTransporteMensal,$valorRefeicaoDiaria){
            $this->nome = $nome;
            $this->cargo = $cargo;
            $this->cpf = $cpf;
            $this->valorHora = $valorHora;
            $this->quantidadeHoras = $quantidadeHoras;
            $this->dependentes = $dependentes;
            $this->horasExtras50 = $horasExtras50;
            $this->horasExtras100 = $horasExtras100;
            $this->tipoInsalubridade = $tipoInsalubridade;
            $this->valorTransporteMensal = $valorTransporteMensal;
            $this->valorRefeicaoDiaria = $valorRefeicaoDiaria;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        public function getCargo(){
            return $this->cargo;
        }
        public function setCargo($cargo){
            $this->cargo = $cargo;
        }
        public function getValorHora(){
            return $this->valorHora;
        }
        public function setValorHora($valorHora){
            $this->valorHora = $valorHora;
        }
        public function getQuantidadeHoras(){
            return $this->quantidadeHoras;
        }
        public function setQuantidadeHoras($quantidadeHoras){
            $this->quantidadeHoras = $quantidadeHoras;
        }
        public function getHorasExtras50(){
            return $this->horasExtras50;
        }
        public function setHorasExtras50($horasExtras50){
            $this->horasExtras50 = $horasExtras50;
        }
        public function getHorasExtras100(){
            return $this->horasExtras100;
        }
        public function setHorasExtras100($horasExtras100){
            $this->horasExtras100 = $horasExtras100;
        }
        public function getDependentes(){
            return $this->dependentes;
        }
        public function setDependentes($dependentes){
            $this->dependentes = $dependentes;
        }
        public function getTipoInsalubridade(){
            return $this->tipoInsalubridade;
        }
        public function setTipoInsalubridade($tipoInsalubridade){
            $this->tipoInsalubridade = $tipoInsalubridade;
        }
        public function getValorTransporteMensal(){
            return $this->valorTransporteMensal;
        }
        public function setValorTransporteMensal($valorTransporteMensal){
            $this->valorTransporteMensal = $valorTransporteMensal;
        }
        public function getValorRefeicaoDiaria(){
            return $this->valorRefeicaoDiaria;
        }
        public function setValorRefeicaoDiaria($valorRefeicaoDiaria){
            $this->valorRefeicaoDiaria = $valorRefeicaoDiaria;
        }
        public function calcularSalarioBruto(){
            return $this->valorHora * $this->quantidadeHoras;
        }
        public function calcularValeTransporte(){
            return $this->calcularSalarioBruto() * 0.06;
        }
        public function calcularSalarioFamilia(){
            $salarioFamilia = 0;
            if($this->calcularSalarioBruto() <= 1425.56){
                $salarioFamilia = 48.62 * $this->getDependentes();
            } else {
                $salarioFamilia;
            }
            return $salarioFamilia;
        }
        public function calcularInsalubridade(){
            $valorBase = 1045;
            $salarioInsalubirdade = 0;
            switch ($this->getTipoInsalubridade()){
                case 0:
                    $salarioInsalubirdade;
                    break;
                case 1:
                    $salarioInsalubirdade = $valorBase * 0.1;
                    break;
                case 2:
                    $salarioInsalubirdade = $valorBase * 0.2;
                    break;
                default:
                    $salarioInsalubirdade = $valorBase * 0.4;
            }
            return $salarioInsalubirdade;
        }
        public function calcularInss(){
            $salario = $this->calcularSalarioBruto();
            if($salario <= 1751.81){
                return $salario * 0.08;
            } else if ($salario <= 2919.72) {
                return $salario * 0.09;
            } else if ($salario <= 5839.45) {
                return $salario * 0.11;
            } else {
                return $salario * 0.27;
            }
        }
        public function calcularValeRefeicao(){
            return (25*$this->getValorRefeicaoDiaria()) * 0.2;
        }
        public function calcularHorasExtra50(){
            return $this->getHorasExtras50() * 1.5;
        }
        public function calcularHorasExtras100(){
            return $this->getHorasExtras100() * 2;
        }
        public function calcularTotalHorasExtras(){
            return $this->calcularHorasExtra50() + $this->calcularHorasExtras100();
        }
        public function calcularDescontos(){
            return $this->calcularValeTransporte() + $this->calcularInss() + $this->calcularValeRefeicao();
        }
        public function calcularBeneficios(){
            return $this->calcularInsalubridade() + $this->calcularTotalHorasExtras() + $this->calcularSalarioFamilia();
        }
        public function calcularSalarioLiquido(){
            return $this->calcularSalarioBruto() + $this->calcularBeneficios() - $this->calcularDescontos();
        }
        public function __toString(){
            return  "Dados:<br>Nome: ".$this->getNome().
                    "<br>CPF: ".$this->getCpf().
                    "<br>Cargo: ".$this->getCargo().
                    "<br>Valor hora: ".$this->getValorHora().
                    "<br>Quantidade de horas: ".$this->getQuantidadeHoras().
                    "<br>Horas extras 50: ".$this->getHorasExtras50().
                    "<br>Horas extras 100: ".$this->getHorasExtras100().
                    "<br>Quantidade de dependentes: ".$this->getDependentes().
                    "<br>Valor trasporte mensal: ".$this->getValorTransporteMensal().
                    "<br>Valor refeição diario: ".$this->getValorRefeicaoDiaria();
        }   
    }
?>