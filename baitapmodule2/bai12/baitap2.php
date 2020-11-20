<?php
$mang = array(2, 3, 2, 5, 6, 1, -2, 3, 14, 12);

$sophantu = count($mang);
for ($i = 0; $i < $sophantu; $i++) {
    for ($j = $i + 1; $j < $sophantu; $j++) {
        if ($mang[$i] > $mang[$j]) {
            $tmp = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $tmp;
        }
    }
}
for ($i = 0; $i < $sophantu; $i++) {
    echo $mang[$i] . ' , ';
}
