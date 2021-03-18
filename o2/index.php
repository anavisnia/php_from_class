<?php
include __DIR__ . '/Miskas.php';
include __DIR__ . '/Giria.php';
include __DIR__ . '/Eat.php';
include __DIR__ . '/River.php';
include __DIR__ . '/Bebras.php';
include __DIR__ . '/Udra.php';

$obj1 = new Bebras;
$obj2 = new Bebras;
$obj3 = new Udra;

$obj1->setRiver('Amazon');

$obj3->setRiver('Nill');

echo '<pre>';
$obj1->gold;

echo Bebras::$color;
echo '<br>';
var_dump($obj1);
var_dump($obj2);
var_dump($obj3);