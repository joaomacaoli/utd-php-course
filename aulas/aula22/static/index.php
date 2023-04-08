<?php

    include_once 'Software.php';

    new Software('Sublime Text 3');
    new Software('Vs Code');
    new Software('Notepad++');
    new Software('Notepad');

    echo "Quantidade de Softwares: ".Software::$contador;