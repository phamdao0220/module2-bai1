<?php
function RegularExpression($str)
{
    $pattern = '/^(C|A|P)\d{4,4}(G|H|I|K|L|M)$/';
    if (preg_match($pattern, $str)) {
        echo $str . (" hop le "). "<br>" ;
    } else {
        echo $str . (" khong hop le ");
    }
}

RegularExpression("C0318G");
RegularExpression(" M0318G, P0323A");
