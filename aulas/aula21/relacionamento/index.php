<?php

    include_once 'Produto.php';

    $arroz = new Produto("Arroz Branco", 100, 5.99);
    //$arroz->setDescricao("Arroz Parborizado");

    //echo $arroz->getPreco();

    $feijao = new Produto("Feijão Mulatinho", 100, 8.99);

    $arroz->mostraProduto();
    $feijao->mostraProduto();