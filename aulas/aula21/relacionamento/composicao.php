<?php

    include_once 'Caracteristica.php';
    include_once 'Produto.php';

    # Instanciando um obj do tipo produto
    $feijao = new Produto("Feijão de Corda 1gk",100, 7.99);

    # Adicionando as caracteristicas do produto
    $feijao->addCaracteristica("TIPO","A");
    $feijao->addCaracteristica("COR","MARRON");
    $feijao->addCaracteristica("EMBALAGEM","PLASTICA");
    $feijao->addCaracteristica("PESO","1 kg");

    echo "Produto: ".$feijao->getDescricao()."<br>";

    foreach($feijao->getCaracteristicas() as $c){
        echo "Caracteristica: ".$c->getTitulo()." - ".$c->getDescricao()."<br>";
    }