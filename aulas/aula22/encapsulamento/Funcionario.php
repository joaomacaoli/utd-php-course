<?php

    class Funcionario extends Pessoa{

        private $cargo;
        private $salario;


        public function contratacao($c, $s){
            if(is_numeric($s) AND $s > 0){
                $this->cargo = $c;
                $this->salario = $s;
            }
        }

        public function getInfo(){
            echo "Nome: ".$this->nome.", salário: ".$this->salario."<br>";
        }


    }