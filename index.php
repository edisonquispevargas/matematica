<?php

function suma($a, $b)
{
    return $a + $b;
}
function resta ($a,$b){
    return $a - $b;
}
function multiplicacion($a,$b){
    return $a * $b; 
}
function division($a, $b){
    if ($b == 0)
    return "error";
    return $a / $b; 
}
function ptencia($a, $b){
    $res = ;
    for($i =; $i <=$b; $i++)
    $res  = $res * $a;
}
?>