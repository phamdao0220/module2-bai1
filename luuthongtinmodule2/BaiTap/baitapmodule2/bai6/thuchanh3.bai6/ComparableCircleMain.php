<?php
include "ComparableCircle.php";
$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 3);
var_dump($circleOne->compareTo($circleTwo));
