<?php
$number=[3,4,7,9,3,2,3,6];
//echo "<pre>";
//print_r(array_count_values($arr));
function countNumber($number,$value){
    $count=0;
    for ($i=0;$i<count($number);$i++){
        if ($number[$i]==$value){
            $count++;
        }
    }
    return $count;
}
echo countNumber($number,3);
