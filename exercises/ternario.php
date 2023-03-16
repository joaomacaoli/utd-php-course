<?php 

    $idade = rand(0,99);

    echo "$idade </br>";

    echo $idade < 14 
        ? "Criança" 
        : (
            $idade < 18
                ? "Adolescente"
                : (
                    $idade < 59 
                        ? "Adulto"
                        : "Idoso"
                )
        );
?>
