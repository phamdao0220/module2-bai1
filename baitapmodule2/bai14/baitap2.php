<?php
function RegularExpression($account){
    $pattern="/^[_a-z0-9]{6,}$/";
    if (preg_match($pattern, $account)){
        echo $account.("hop le")."<br>";
    }else{
        echo $account.("khong hop le");
    }
}
RegularExpression('_abc123');
RegularExpression('12345');
