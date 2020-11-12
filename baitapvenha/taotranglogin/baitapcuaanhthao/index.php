<?php
include_once ('ong.php');
include_once ('cha.php');
include_once ('con.php');


$ong = new ong(60, 10);
echo 'ong area: ' . $circle->calculateArea() . '<br />';
echo 'ong perimeter: ' . $circle->calculatePerimeter() . '<br />';
