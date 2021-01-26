<?php
//$pattern='/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
function kiemtra($str)
{
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';

    if (preg_match($pattern, $str)) {
        echo $str.(" email hop le") . "<br>";
    } else {
        echo $str.(" email khong hop le");
    }
}
kiemtra('abc@hotmail.com');
kiemtra('@gmail.com');
