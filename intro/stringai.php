<?php

$num = 5;
$location = 'tree';

// %d - digit; %s - string
$format = 'There are %d monkeys in the %s.';

echo sprintf($format, $num, $location);
echo "<br><br><br>";
//Vienpusiai algaritmai
echo md5('123'); // sesioliktainis kodas sio stringo (hash)
