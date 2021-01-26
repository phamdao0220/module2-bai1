<?php
function RegularExpression($str){
    $pattern='/^\([0-9]{2}\)+-\([0]{1}[0-9]{9}\)$/';
    if (preg_match($pattern,$str)){
        echo $str.("hop le")."<br>";
    }else{
        echo $str.("khong hop le");
    }
}
RegularExpression('(84)-(0978489648)');
RegularExpression( '(a8)-(22222222)');

