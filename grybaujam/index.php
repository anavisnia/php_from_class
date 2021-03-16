<?php
include 'Krepsys.php';
include 'Grybas.php';

$krepsys1 = new Miskas\Didelis\Krepsys;

while($krepsys1->deti(new Miskas\Mazas\Grybas)){}

_pr($krepsys1);