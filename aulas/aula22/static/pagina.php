<?php

    include_once 'Html.php';

    echo Html::openTag("html");
        echo Html::openTag("head");
            echo Html::openTag("title");
                echo Html::write("Página PHP Estática");
            echo Html::closeTag("title");
        echo Html::closeTag("head");
    echo Html::closeTag("html");