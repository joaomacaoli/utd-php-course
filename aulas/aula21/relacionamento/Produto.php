<?php

    class Produto{

        private $descricao;
        private $estoque;
        private $preco;
        private $fornecedor;

        private $caracteristicas;


        public function __construct($descricao, $estoque, $preco){
            $this->descricao = $descricao;
            $this->estoque = $estoque;
            $this->preco = $preco;
        }

       
        public function getDescricao(){
            return $this->descricao;
        }

        public function getEstoque(){
            return $this->estoque;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setFornecedor(Fornecedor $f){
            $this->fornecedor = $f;
        }

        public function getFornecedor(){
            return $this->fornecedor;
        }

        public function addCaracteristica($titulo, $descricao){
            $this->caracteristicas[] = new Caracteristica($titulo, $descricao);
        }

        public function getCaracteristicas(){
            return $this->caracteristicas;
        }


        public function mostraProduto(){
            echo "---------- Produto -------------- <br>";
            echo "Descrição: ".$this->descricao."<br>";      
            echo "Estoque: ".$this->estoque."<br>";      
            echo "Preço: ".$this->preco."<br>";
            echo "------------ FIM ---------------- <br><br>"; 
                 
        }


    }

