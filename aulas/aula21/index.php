<?php

    include_once 'Conta.php';
    include_once 'ContaPoupanca.php';
    include_once 'ContaCorrente.php';

    # Criando um array 
    $contas = array();

    # Instanciando os objetos
    $contas[] = new ContaCorrente("0288", 'CC: 0174504-2', 100 , 500);
    $contas[] = new ContaPoupanca("3296", 'CP: 33655-6', "100");

    foreach($contas as $conta){
        echo "Conta: ";
        echo $conta->getInfo()."<br>";
        echo "Saldo Atual: ".$conta->getSaldo()."<br>";
        $conta->depositar(200);
        echo "Depósito de R$ 200 <br>";
        echo "Saldo Atual: ".$conta->getSaldo()."<br>";

        if( $conta->retirar(700) ){
            echo "Retirada de R$ 700 permitida <br>";
        }else{
            echo "Retirada de R$ 700 não permitida. Saldo Insulficiente <br>";
        }

        echo "Saldo Atual: ".$conta->getSaldo()."<br>";

        if( $conta->retirar(200) ){
            echo "Retirada de R$ 200 permitida <br>";
        }else{
            echo "Retirada de R$ 200 não permitida. Saldo Insulficiente <br>";
        }

        echo "Saldo Atual: ".$conta->getSaldo()."<br>";
        
        echo "<hr>";
    }