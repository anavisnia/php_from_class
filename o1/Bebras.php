<?php
class Bebras {
    //savybes
    public $tail = 'BIG';
    private $age = 23;

    public function sayTail()
    {
        echo '<br>';
        echo 'Tail is ' . $this->tail;
        echo '<br>';
    }

    public function getAge()
    {
        echo '<br>';
        echo 'Age is ' . $this->age;
        echo '<br>';
    }

    public function setAge(int $num)
    {
        $this->age = $num;
    }
}