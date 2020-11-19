<?php
function binarySearch(array $number,  int $needle):bool{
    $low=0;
    $high=count($number)-1;
    while ($low<=$high){
        $mid=(int)(($low+$high)/2);
        if ($number[$mid]>$needle){
            $high=$mid-1;
        }elseif($number[$mid]<$needle){
            $low=$mid+1;
        }else{
            return true;
        }
    }

    return false;
    $number=range(1,200,5);
    $number=31;
    if (binarySearch($number,$number)!==false){
        echo "$number Found"."<br>";
    }else{
        echo "$number Not fount"."<br>";
    }
    $number =500;
    if (binarySearch($number,$number)!==false){
        echo "$number Found"."<br>";
    }else{
        echo "$number Not found"."<br>";
    }
}

