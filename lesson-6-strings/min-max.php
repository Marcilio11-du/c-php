<?php

$name = "Marcílio Domingos";
$second_name = "fernando";
$last_name = "DOMINGOS";


//o mb_strtoupper ou mb_strtoupper, permite formatar strings que contêm acentos
echo mb_strtoupper($name);
echo strtoupper($second_name);
echo strtolower($last_name);


echo ucfirst($second_name);
echo lcfirst("Nilton Domingos"); //Cada palavra da String vai possuir a primeira letra minúscula
echo ucwords("nilton domingos");//Cada palavra vai possuir a primeira letra maiúscula