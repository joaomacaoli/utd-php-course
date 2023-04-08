<?php

    class Produto{

        public $descricao;
        public $estoque;
        public $preco;
        
        public function __construct($descricao, $estoque, $preco){   
            if(is_string($descricao)){
                $this->descricao = $descricao;
            }else{
                echo die("Você nao forneceu uma descriçao no formato válido");
            }
            
            if(is_numeric($estoque)){
                $this->estoque = $estoque;
            }
            
            if(is_numeric($preco) AND $preco > 0){
                $this->preco = $preco;
            }

            echo "Objeto construído: ".$this->descricao." com estoque de ".$this->estoque." no valor de ".$this->preco."<br>";

        }

        public function __destruct(){
            echo "Objeto destruído: ".$this->descricao." com estoque de ".$this->estoque." no valor de ".$this->preco."<br>";
        }

    }