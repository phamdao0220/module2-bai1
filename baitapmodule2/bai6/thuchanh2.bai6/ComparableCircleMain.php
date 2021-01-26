<?php
include "ComparableCircle.php";


$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 6);
$circleThree = new ComparableCircle('circleThree', 9);
$test = $circleOne->compareTo($circleTwo);
echo("Comparable:");
echo $test;
