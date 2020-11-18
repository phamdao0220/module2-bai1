<?php
$queue=new SplQueue();
$queue->enqueue(1);
$queue->enqueue(4);
$queue->enqueue(9);
$queue->rewind();
while ($queue->valid()){
    echo $queue->current()."<br>";
    $queue->next();
}
