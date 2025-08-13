<?php

//Permitem tranformar uma string em um array e vice-versa

$full_name = "Marcílio Fernando Domingos";

$name_array  = explode(" ", $full_name);
echo $name_array[0];


echo "<br> Implode <br>";

$fruits = ["Maçã", "Banana", "Morango"];

$string_fruits = implode(" ", $fruits);
echo $string_fruits;

