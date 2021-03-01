<?php
$masyvas = [
    'mano knyga',
    'zurnalai' => 'seni zurnalai',
    'zaislai' => 'mano zaislai',
    'mano batai'
];
echo '<pre>';
print_r($masyvas);

// $masyvas = [];
// $masyvas['kojinės'] = [];
// $masyvas['kojinės']['zalios'] = 'visos žalios kojinės';
// $masyvas['kojinės']['juodos'] = 'visos juodos kojinės';
// $masyvas['kojinės']['margos'] = 'visos margos kojinės';
// $masyvas['pirstines'] = [];
// $masyvas['pirstines']['kailines'] = 'mano kailinės pirštinės';
// $masyvas['pirstines']['odines'] = 'mano odinės pirštinės';
// $masyvas['nosines'] = 'visos mano nosinės';

foreach ($masyvas as $index => $value) {
    echo $index . ' === ' . $value;
    echo '<br>';
}

foreach (range(1, 5) as $value) {
    echo $value;
    echo '<br>';
}


// ***************************************
foreach(range(1, 10) as $index1 => $_) {
    foreach (range(1, 5) as $index2 => $_) {
        $multidArr[$index1][$index2] = rand(5, 25);
    }
}
_pr($multidArr);

//usort
// a masyvas ir b masyvas sio atveju
usort($multidArr, function($a, $b) {
    return $b[1] <=> $a[1];
});
_pr($multidArr);