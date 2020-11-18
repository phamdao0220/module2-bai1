<?php
$dList=new SplDoublyLinkedList();
  $dList->push(1);
  $dList->push(2);
  $dList->push(4);
  $dList->unshift('c');
  $dList->unshift('b');
  $dList->unshift('a');
$dList->pop();
$dList->shift();
$dList->add(1,3.4);
for ($dList->rewind();$dList->valid();$dList->next()){
    echo $dList->current()."<br/>";
}
echo "<br>";
