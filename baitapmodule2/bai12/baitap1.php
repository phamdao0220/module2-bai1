<?php
$mang = array(1, 9, 4.5, 6.6, 5.7, -4.5);
$sophantu = count($mang);

for ($i = 0; $i < $sophantu - 1; $i++) {
    $max = $i;
    for ($j = $i + 1; $j < $sophantu; $j++) {
        if ($mang[$j] > $mang[$max]) {
            $max = $j;
        }
    }
    $temp = $mang[$i];
    $mang[$i] = $mang[$max];
    $mang[$max] = $temp;
}
for ($i = 0; $i < $sophantu; $i++) {
    echo $mang[$i] . ' , ';
}

