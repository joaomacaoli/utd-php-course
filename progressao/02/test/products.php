<?php

$json = file_get_contents("products.json");
$data = json_decode($json);

// echo var_dump($data);
// echo "<hr>";


function testPlot($data)
{
    foreach ($data as $key => $value) {
        // echo $key . "<br>";
        echo $value->name . "<br>";
        echo $value->cod . "<br>";
        echo $value->price . "<br>";
        echo $value->date_registration . "<br>";
        // echo $value->available ? "Disponível <br>" : "Não disponível <br>";
        echo "<hr>";
    }
}

// testPlot($data);

$products = (object) [
    "name" => "Pão Sovado",
    "cod" => "4813",
    "stock" => 35,
    "price" => 0.55,
    "date_registration" => "23-03-2023"
];

array_push($data, $products);
// echo var_dump($data);

testPlot($data);

$json = json_encode($data);

$file = fopen("products.json",'w');
fwrite($file, $json);
fclose($file);