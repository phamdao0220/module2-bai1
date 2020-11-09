<?php
$max=0;
$arr=[[2,4,6,8,9],[1,3,5,7,2]];
for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr[$i]);$j++) {
        if ($arr[$i][$j] > $max) {
            $max = $arr[$i][$j];
        }
    }
}
echo $max;
