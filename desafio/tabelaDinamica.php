<?php 
    
    $coluna = 10;
    $linha = 6;

    echo "<table border='1'>";

        for ($i=0; $i < $coluna; $i++) { 
            echo "<tr>";
            for ($j=0; $j < $linha; $j++) { 
                echo "<td> $i $j </td>";
            }
            echo "</tr>";
        }
    echo "</table>"
?>