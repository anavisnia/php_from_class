<h1>Labas zuikis, ka tu?</h1>

<?php

$kintamasis = 12;
$pirmas = 'bla bla';
$antras = 'ku ku';
$trecias = $pirmas . $antras;
?>

<h1>Normaliai</h1>

<?php
echo $trecias;
echo '<br>';
$ketvirtas = "bla $antras bla";
echo $ketvirtas;

echo '<br>';
$pirmas = 'antras';
$antras = 'bla bla';
$trecias = 'pirmas';
echo '<br>';
echo $$pirmas;

$z1 = 'Banginis';
$z2 = 'Lape';
$z3 = 'Gaidys';

$rand = rand(1, 3);

$name = 'z' . $rand;

// echo ${'z' . $rand}; // dinamiskai sugeneruotas kintamasis random budu

echo $$name;
