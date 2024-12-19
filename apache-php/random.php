<?php

$randomNumber = rand(1, 100);


$isEvenOrOdd = ($randomNumber % 2 == 0) ? "par" : "impar";


$array = ["pimiento", "Shinnosuke Nohara", "Nevado", "Himawari", "Ivooooo"];


$randomElement = $array[array_rand($array)];


$response = [
    "numero" => $randomNumber,
    "par_o_impar" => $isEvenOrOdd,
    "elemento_aleatorio" => $randomElement
];


header('Content-Type: application/json');
echo json_encode($response);
?>
