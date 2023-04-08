<?php

    class Pessoa{

        protected $nome;
        protected $endereco;
        private $dtNasc;

        public function __construct($nome, $endereco){
            $this->nome = $nome;
            $this->endereco = $endereco;         
            
        }

        public function setDtNasc($dtNasc){
            $this->dtNasc = $dtNasc;
        }

    }