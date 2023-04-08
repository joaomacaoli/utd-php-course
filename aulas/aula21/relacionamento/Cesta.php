<?php

    class Cesta{

        private $itens;
        private $time;

        public function __construct(){
            $this->itens = array();
            $this->time = date("d/m/Y H:i:s");
        }

        public function addItem(Produto $p){
            $this->itens[] = $p;
        }

        public function getItens(){
            return $this->itens;
        }

        public function getTime(){
            return $this->time;
        }
    }