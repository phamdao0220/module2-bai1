<?php

class DivideByZeroException extends Exception
{
    public function __toString()
    {
        return "Can't divide by zero";
    }
}

        function divide($numerator, $denominator)
        {
            if ($denominator === 0) {
                throw new DivideByZeroException();
            }
            return $numerator / $denominator;
}
try {

    echo divide(100, 5)."<br>";

    echo divide(100, 0);


} catch (DivideByZeroException $e) {
    echo 'co loi xay ra:' . $e;
}

