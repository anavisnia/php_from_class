<?php
include 'Krepsys.php';
include 'Grybas.php';

$krepsys1 = new Krepsys;

while($krepsys1->deti(new Grybas)){}

_pr($krepsys1);