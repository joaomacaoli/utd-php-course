<?php

$numbers = array();

for ($i = 0; $i < 10; $i++) {
    do {
        $newNumber = rand(0, 60);
        // echo $newNumber . " repetido!! <br>";
    } while (in_array($newNumber, $numbers));

    $numbers[] = $newNumber;
}

sort($numbers);

// echo "<hr>";

foreach ($numbers as $num) {
    echo $num . "<br>";
}
