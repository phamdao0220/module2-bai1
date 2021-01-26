<?php
include_once('Point.php');
include_once('MoveablePoint.php');

$point = new Point(10, 20);
echo 'Point: ' . $point->toString() . '<br/>';

print("<pre>" . print_r($point, true) . "</pre>");

$movablePoint = new MovablePoint(7, 2, 0, 1);
echo 'MovablePoint: ' . $movablePoint->toString();


echo $movablePoint->toString();

print("<pre>" . print_r($movablePoint, true) . "</pre>");


print("<pre>" . print_r($movablePoint->move(), true) . "</pre>");
print("<pre>" . print_r($movablePoint->move(), true) . "</pre>");
print("<pre>" . print_r($movablePoint->move(), true) . "</pre>");
