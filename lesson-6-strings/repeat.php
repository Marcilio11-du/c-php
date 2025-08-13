<?php


//str_repeat() repete uma sequência de caracateres específica

echo str_repeat("->", 10);

//str_pad() - sintáxe str_pad(string $string, int $length, string $pad_string = " ", int $pad_type = STR_PAD_RIGHT): string
echo str_pad("Menu", 50, "= ", STR_PAD_BOTH);


//My own method
function create_write($string, $len, $pad_string, $pad_type){
    if($pad_type == "Right")
        echo $string . str_repeat($pad_string, $len - strlen($string));
    else if($pad_type == "Left")
        echo str_repeat($pad_string, $len - strlen($string)) . $string ;
    else if($pad_type == "Both" )
        echo str_repeat($pad_string, (int) $len/2) . $string . str_repeat($pad_string, (int) $len/2 - 1);
}
echo create_write("Menu", 50, "= ", "Both");