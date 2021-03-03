<?php

//nuskaito duomenis is JSON failo
function readData() : array
{
    if(!file_exists(DIR.'data/boxes.json')) { // pirmas kartas
        $data = json_encode([]);
        file_put_contents(DIR.'data/boxes.json',$data);
    }

    // skaitom duomenis
    $data = file_get_contents(DIR.'data/boxes.json');
    return json_decode($data, 1); // vienetas - kad butu masyvas
}

function writeData(array $data) : void
{
    $data = json_encode($data);
    file_put_contents(DIR.'data.boxes.json', $data);
}

function getBox(int $id) : ?array
{
    foreach(readData() as $box) {
        if($box['id'] == $id) {
            return $box;
        }
    }
    return null;
}

function create(int $count) : void
{
    $boxes = readData(); // turim visus box is json failo
    $id = getNextId(); // ziurim koki id duoosim
    // konstruuosim savo boxa
    $box = ['id' => $id, 'banana' => $count];
    $boxes[] = $box; // sita deze, pridedam prie kitu deziu
    // visas dezes yrasom i json faila
    writeData($boxes);
}

function update(int $id, int $count) : void
{
    $boxes = readData(); // visi boxai
    $box = getBox($id);
    if(!$box) {
        return;
    }
    $box['banana'] = $count; // updatinam sena boxa
    deleteBox($id); // istrinam sena (neupdatinta)
    $boxes = readData(); // visi be istrinto
    $boxes[] = $box;
    writeData($boxes);
}

function deleteBox(int $id) : void
{
    $boxes = readData();
    foreach($boxes as $key => $box) {
        if($box['id'] == $id) {
            unset($boxes[$key]); // istrinam
            writeData($boxes); // irasom be istrintus
            return;
        }
    }
}

function getNextId() : int
{
    if(!file_exists(DIR.'data/indexes.json')) { // pirmas kartas
        $index = json_encode(['id'=>1]);
        file_put_contents(DIR.'data/indexes.json',$index);
    }
    // skaitom id
    $index = file_get_contents(DIR.'data/indexes.json');
    $index = json_decode($index, 1);
    $id = (int) $index['id'];
    $index['id'] = $id + 1;
    $index = json_encode($index);
    file_put_contents(DIR.'data/indexes.json',$index);
    return $id;
}


/*
id identifikuoja masyva, prasideda nuo 1, turi buti unikalus
kazkas turi prisiminti koks buvo paskutinis skaicius (turi buti atmintis)
[
    ['id' => 1, 'banana' => 0],
    ['id' => 2, 'banana' => 10],
    ['id' => 3, 'banana' => 400],
]
*/