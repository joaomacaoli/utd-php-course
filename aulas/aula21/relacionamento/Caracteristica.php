<?php

    class Caracteristica{

        private $titulo;
        private $descricao;

        public function __construct($titulo, $descricao){
            $this->titulo = $titulo;
            $this->descricao = $descricao;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getDescricao(){
            return $this->descricao;
        }

    }