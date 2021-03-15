<?php
include __DIR__ . '/Bebras.php';
include __DIR__ . '/Udra.php';

// Bebras::createBebras();

// $obj1 = Bebras::createBebras(11);
// $obj2 = Bebras::createBebras(20);
$obj1 = new Bebras('red');
$obj2 = new Bebras('20');
$obj3 = new Udra;

echo '<pre>';
echo '<br>';
// echo Bebras::$legs; // priejimas prie static savybes
// echo $obj1->tail;
// echo '<br>';

// echo $obj1->tail;

// echo '<br>';
// // echo $obj1->age;
// $obj1->sayTail();
// $obj1->getAge();

// $obj1->tail = 'SMALL';

// $obj1->setAge(13);
// $obj1->getAge();

// $obj1->dog;
// $obj1->laba;
// echo '<br>';

echo '<br>';
var_dump($obj1);
var_dump($obj2);