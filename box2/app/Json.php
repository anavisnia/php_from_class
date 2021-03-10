<?php

class Json {

    private static $jsonObj;

    private $data;

    public static function getDB()
    {
        return self::$jsonObj ?? self::$jsonObj = new self;
    }

    public function __construct()
    {
        if(!file_exists(DIR.'data/boxes.json')) { // pirmas kartas
            $data = json_encode([]); // uzkados kaip tuscia masyvas, o jo elementai bus objektai
            file_put_contents(DIR.'data/boxes.json',$data);
        }
        // skaitom duomenis
        $data = file_get_contents(DIR.'data/boxes.json');
        $this->data = json_decode($data);
    }

    public function __destruct()
    {
        file_put_contents(DIR.'data/boxes.json', json_decode($this->data));
    }

    //nuskaito duomenis is JSON failo
    public function readData() : array
    {
        return $this->data;
    }

    public function writeData(array $data) : void
    {
        $this->data = json_encode($data);

        file_put_contents(DIR.'data.boxes.json', $data);
    }

    public function getBox(int $id) : ?object
    {
        foreach($this->data as $box) {
            if($box->id == $id) {
                return $box;
            }
        }
        return null;
    }

    public function store(Box $box) : void
    {
        $id = $this->getNextId();
        $box->id = $id;
        $this->data[] = $box;
    }

    public function update(int $id, int $count) : void
    {
        $box = $this->getBox($id);
        if(!box) {
            return;
        }
        foreach($this->data as $key => $box) {
            if($box['id'] == $id ) {
                $box = ['id' => $id, 'banana' => $count];
                $this->data[$key] = $box;
                return;
            }
        }
    }

    public function delete(int $id) : void
    {
        foreach($this->data as $key => $box) {
            if($box['id'] == $id) {
                unset($boxes[$key]); // istrinam
                return;
            }
        }
    }

    private function getNextId() : int
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