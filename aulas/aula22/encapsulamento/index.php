<?php

    include_once 'Pessoa.php';
    include_once 'Funcionario.php';

    $anthony = new Pessoa("Anthony Jefferson","Rua bem ali 222");        
    $anthony->setDtNasc('04/12/1993');

    print_r($anthony);
    echo "<hr>";

    $joao = new Funcionario("João da Silva", "Rua bem alí, 223");
    $joao->contratacao("Diretor de T.I", '25000');

    echo $joao->getInfo();