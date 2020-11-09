<?php
 $arr=[2,4,6,7,89,2];
 $min=$arr[0];
 for ($i=0; $i<count($arr); $i++){
     if ($min>$arr[$i]){
         $min=$arr[$i];
     }
 }
 echo $min;
