<?php

// echo number_format(10.90484884554448448458488, 5);
// echo nl2br("\nDiego de Abreu => ") . str_replace(['e'], 'o', 'Diego de Abreu'); // Diogo de Abrou

$service_id = null;

$variavel1 = !is_null($service_id) ? $service_id : (object) ["id" => -1];
$variavel2 = !is_null($service_id) ? $service_id : (float) ["id" => -1];
$variavel3 = !is_null($service_id) ? $service_id : (string) ["id" => -1];

// echo $variavel;
var_dump($variavel1);
echo nl2br("\n");
var_dump($variavel2);
echo nl2br("\n");
var_dump($variavel3);
echo nl2br("\n");
echo $variavel3;
