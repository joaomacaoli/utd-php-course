<?php

    include_once 'Cesta.php';
    include_once 'Produto.php';

    $cesta = new Cesta();

    $cesta->addItem($arroz = new Produto("Arroz Branco",2,5.99));
    $cesta->addItem($feijao = new Produto("Feijão Mulatinho", 2, 8.99));
    $cesta->addItem($cafe = new Produto("Café St Clara Vacuo",1 , 8.99));

    $total = 0;
    foreach($cesta->getItens() as $i){
        echo "Item: ".$i->getDescricao()."<br>";
        echo "---> Valor: ".$i->getPreco()."<br>";
        $total += $i->getPreco()*$i->getEstoque();
    }

    echo "Valor Total: R$ ".$total."<br>";