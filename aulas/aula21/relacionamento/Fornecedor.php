<?php   

    class Fornecedor{

        private $nome;
        private $endereco;
        private $cnpj;

        public function __construct($nome, $endereco, $cnpj){            
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->cnpj = $cnpj;
        }

        public function getNome(){
            return $this->nome;
        }


    }