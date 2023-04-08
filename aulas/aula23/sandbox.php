<?php

    include_once 'models/config.php';
    include_once 'controllers/validate.php';

    $pageTitle = "Página de Sandbox!!!";

    function content(){
        validateOption();
    }


    include_once 'views/layout/template.php';