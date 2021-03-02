<?php
// vienkartinis naudojimas, pirma karta uzpildyti duomenim
$users = [
    ['name' => 'Petras', 'surname' => 'Lapinskas', 'pass' => password_hash('123', PASSWORD_DEFAULT)],
    ['name' => 'Ona', 'surname' => 'Lapinskas', 'pass' => password_hash('123', PASSWORD_DEFAULT)],
    ['name' => 'Saulius', 'surname' => 'Lapinskas', 'pass' => password_hash('123', PASSWORD_DEFAULT)],
];

file_put_contents(__DIR__.'/users.json', json_encode($users));