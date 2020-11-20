<?php
$mang = array(5, -4, 3, 7, 2, 1, 0, 8, 9, 2);
$sophantu = count($mang);
for ($i = 0; $i < $sophantu; $i++) {
    $loop = $i;
    $current = $mang[$i];
    while ($loop > 0 && ($mang[$loop - 1] < $current)) {

        $mang[$loop] = $mang[$loop - 1];
        $loop -= 1;
    }
    $mang[$loop] = $current;

}
for ($i = 0; $i < count($mang); $i++) {
    echo $mang[$i]." , ";
}
