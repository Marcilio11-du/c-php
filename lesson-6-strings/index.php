<?php


//Os métodos trim, ltrim, e rtrim, removem espaços no fim e no início das strings

//O trim remove no início e fim
$phrase = "   Curso PHP  ";
$modified_phrase = trim($phrase);

echo strlen($phrase);
echo strlen($modified_phrase);
