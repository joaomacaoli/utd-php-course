<?php

    include_once 'Conta.php';
    include_once 'ContaPoupanca.php';
    include_once 'ContaPoupancaUniversitaria.php';

    $conta = new ContaPoupancaUniversitaria('0123','112233-4','100');

    var_dump($conta);