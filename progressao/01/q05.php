<?php

$numbers = array();

for ($i = 0; $i < 6; $i++) {
    do {
        $newNumber = rand(0, 60);
        echo $newNumber . " repetido!! <br>";
    } while (in_array($newNumber, $numbers));

    $numbers[] = $newNumber;
}

echo "<hr>";
foreach ($numbers as $num) {
    echo $num . "<br>";
}
