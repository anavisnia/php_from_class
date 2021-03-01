<?php 
// $masyvas = [
//     'spalva' => 'ryza',
//     'tipas' => 'kate',
//     'characteris' => 'fainas',
//     'dienotvarke' => [
//         'miega',
//         'eda',
//         'miega',
//         'eda',
//         'pupina',
//         'miega'
//     ]
// ];
// _pc($masyvas);

// $stringas = json_encode($masyvas);

// _pc($stringas);

// $masyvas = json_decode($stringas);

// _pc($masyvas);

// file_put_contents('kate.json', $stringas);

$stringas = file_get_contents('kate.json'); // skaitom faila

$masyvas = json_decode($stringas, 1); // 1 - kurimas masyvo, ne objekto (be klases indikavimo)

_pc($masyvas);

$masyvas['dienotvarke'][] = 'zaidzia';
$masyvas['dienotvarke'][] = 'miegoti';

$stringas = json_encode($masyvas);

file_put_contents('kate.json', $stringas); //irasinejame i faila

_pc($stringas);
