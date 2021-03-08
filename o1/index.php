<?php
include __DIR__ . '/Bebras.php';
include __DIR__ . '/Udra.php';

$obj1 = new Bebras;
$obj2 = $obj1;
$obj3 = new Udra;

echo '<pre>';
echo $obj1->tail;
echo '<br>';

echo $obj1->tail;

echo '<br>';
// echo $obj1->age;
$obj1->sayTail();
$obj1->getAge();

$obj1->tail = 'SMALL';

$obj1->setAge(13);
$obj1->getAge();

echo '<br>';
var_dump($obj1);
var_dump($obj2);