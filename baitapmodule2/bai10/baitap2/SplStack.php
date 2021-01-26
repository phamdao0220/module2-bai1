<?php
function Stack($sym)
{
    $bracket = new SplStack();
    $bracket1 = new SplStack();
    $array = str_split($sym);
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === "(") {
            $bracket->push($array[$i]);
        } elseif ($array[$i] === ')') {
            $bracket1->push($array[$i]);

        }
    }
    if ($bracket->count() == $bracket1->count()) {
        return true;
    } else {
        return false;
    }
}

var_dump(Stack("s * (s – a) * (s – b) * (s – c)"));
echo"<br>";
var_dump(Stack("(– b + (b2 – 4*a*c)^0.5) / 2*a)"));


