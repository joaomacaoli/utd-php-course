<?php

   $tempoInicial = round(microtime(true) * 1000);

   function bubbleSort($array)
   {
     for($i = 0; $i < count($array); $i++)
     {
        for($j = 0; $j < count($array) - 1; $j++)
        {
          if($array[$j] > $array[$j + 1])
          {
            $aux = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $aux;
          }
        }
     }
   }
   
   $arr = array();
   for($a=0;$a<20000;$a++){
    $arr[] = rand(0,9999999);
   }

  
   var_dump(bubbleSort($arr)); 


   $tempoFinal = round(microtime(true) * 1000);

   $total = $tempoFinal - $tempoInicial;

   echo "Resultado: Tempo inicial: $tempoInicial ".PHP_EOL;
   echo "Tempo final: $tempoFinal".PHP_EOL;
   echo "Total: $total";