<?php
include_once('circle.php');
include_once('cylinder.php');


$circle = new circle(4, 'black');
echo 'circle color: ' . $circle->getColor() . '<br />';
echo 'circle area: ' . $circle->calculateArea() . '<br />';
echo 'circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new cylinder(3, 'yellow', 4);
echo 'cylinder color: ' . $cylinder->getColor() . '<br />';
echo 'cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
