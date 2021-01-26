<?php
include_once('Dancer.php');
$enqueue = new SplQueue();
$enqueue1 = new SplQueue();
$dancer = new Dancer('hoa', 'nu',18);
$dancer1 = new Dancer('quynh', 'nu',30);
$dancer2 = new Dancer('huy', 'nam',20);
$dancer3 = new Dancer('hai', 'nam',15);
$dancer4 = new Dancer('tuan', 'nam',30);
$enqueue->enqueue($dancer);
$enqueue->enqueue($dancer1);
$enqueue1->enqueue($dancer2);
$enqueue1->enqueue($dancer3);
$enqueue1->enqueue($dancer4);

function getCoupleDancer($enqueue, $enqueue1)
{
    if ($enqueue->count() == 0 || $enqueue1->count() == 0) {
        echo "<pre>";
        echo 'so nguoi vao hang doi la: ' . ($enqueue->count() + $enqueue1->count());
    } else {
        echo "<pre>";
        echo $enqueue->dequeue()->getName() . ' va ' . $enqueue1->dequeue()->getName();
    }

}

//function setCoupleDancer($enqueue, $enqueue1)
//{
//    echo '<pre>';
//    echo 'so nguoi vao hang doi la: ' . ($enqueue->count() + $enqueue1->count());
//
//}

getCoupleDancer($enqueue, $enqueue1);
getCoupleDancer($enqueue, $enqueue1);
getCoupleDancer($enqueue, $enqueue1);
