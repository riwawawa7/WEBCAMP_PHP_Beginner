<?php
//
echo "0 \n";
echo "1 \n";

$a = 0;
$b = 1;

while ($b <= 10000){
    $c = $a + $b;
    echo "{$c} \n";

    $a = $b + $c;
    if ($c <= 10000){
    echo "{$a} \n";
    }
    $b = $c + $a;
    if ($a <= 10000){
    echo "{$b} \n";
    }
}