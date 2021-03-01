<?php
echo '<pre>';
$text = 'dkskdfgmsk UUO-188 kdfmsk kl TZZ-121 ook okgmdf7739';
$textShort = 'UUU-111';

preg_match_all('/([A-Z]{3})-(\d{3})/', $text, $match);
echo '<br>';
print_r($match);
echo '<br>';

if (preg_match('/^([A-Z]{3})-(\d{3})$/', $textShort, $match2)) {
    echo 'Teisingas';
} else {
    echo 'Pusgalvis';
}
echo '<br>';
print_r($match2);
echo '<br>';

$starWars = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';
echo $starWars . '<br>';
preg_match('/\d/', $starWars, $match3);
print_r($match3);
echo '<br>';
