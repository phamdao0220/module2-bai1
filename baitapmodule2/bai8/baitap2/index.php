<?php
include_once "LinkedList.php";

$linkedlist = new LinkList();


$linkedlist->insertFirst("Frist");
$linkedlist->insertFirst("Second");
$linkedlist->insertLast("Third");


print("<pre>" . print_r($linkedlist->readList(), true) . "</pre>");
print("<pre>" . print_r($linkedlist, true) . "</pre>");


$arr = [];
foreach ($linkedlist->getFirstNode() as $value) {

    if (is_object($value)) {

        array_push($arr, $value->data);

    } else {
        array_push($arr, $value);
    }

}

print("<pre>" . print_r($arr, true) . "</pre>");
print("<pre>" . print_r($linkedlist->getFirstNode(), true) . "</pre>");
