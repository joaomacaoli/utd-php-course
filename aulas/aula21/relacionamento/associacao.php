<?php

    include_once 'Fornecedor.php';
    include_once 'Produto.php';

    # Criando os objetos
    $chocolate = new Produto("Chocolate em barra 300g", 50, 7.99);
    $fornecedor = new Fornecedor("Willy Wonka", "Rua bem alí 222",'78945654321345');

    # Associação
    $chocolate->setFornecedor($fornecedor);

    echo "Produto: ".$chocolate->getDescricao()."<br>";
    echo "Fornecedor: ".$chocolate->getFornecedor()->getNome();