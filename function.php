<?php

//function hello($name, $age=20){
//    echo "hello $name, I'm $age years old";
//}
//
//hello("Man");

//function sum($a, $b, ... $params)
//{
//    echo "$a, $b........". count($params). "more";
//}
//sum(2,3,45,56,65,76,7,87);


// ----------NEWWWWWWWWWWWWWWWWW-----------------------
//function sum($a, $b, $c)
//{
//    return $a + $b + $c;
//}
//$array=[1, 2 ,5 , 8];
//echo sum(2, ...$array);

// NEWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW
//function sum($a, $b) : int
//{
//    return $a + $b;
//}
//var_dump(sum(2,3));

function can_bac_n_mot_so($a,$n): int
{
    return pow($a,1/$n) ;
}
echo can_bac_n_mot_so(125,3);