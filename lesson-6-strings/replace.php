<?php

//Métodos pra substituir certa parte de uma String por uma outra
//str_replace()

$string = "Vamos agora testar o funcionamento do programa";

echo str_replace("agora", "AGORA", $string);

//Também podemos passar arrays como  parâmetros no lugar das strings

$vowels = ['A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u'];
echo str_replace($vowels, "", $string);