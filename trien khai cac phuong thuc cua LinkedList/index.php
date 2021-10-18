<?php
include_once "Node.php";
include_once "LinkedList.php";
$linkedList = new LinkedList();
$linkedList->addFirst(1);
$linkedList->addFirst(2);
$linkedList->addLast(3);
$linkedList->addLast(4);
echo "<pre>";
print_r($linkedList);