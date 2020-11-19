<?php
$num = [2, 4, 6, 8, 9, 1];
function newArr($n){
    $sum=0;
    for ($i = 0; $i < count($n); $i++) {
        $sum += $i;
    }
    return $sum;
}
echo newArr($num);
