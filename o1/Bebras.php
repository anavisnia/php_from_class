<?php
class Bebras {
    //savybes
    public $tail = 'BIG';
    private $age = 23;

    private static $legs = 2;

    private $wife = 'blod', $children1 = 'beaver1', $children2 = 'beaver3', $dog = 'bobik';

    private static $BebroObjektas;

    static public function createBebras($age)
    {
        echo 'Lets create';

        return self::$BebroObjektas ?? self::$BebroObjektas = new self($age);
    }


    public function __construct($age = 11)
    {
        echo '<br>';
        echo 'Konstruojam';
        echo '<br>';
        echo self::$legs;
        self::$legs = 4;
        // imitacija overloadinimo
        // if(is_integer($age)) {
        //     $this->init1($age);
        // }
        // if(is_string($age)) {
        //     $this->init2($age);
        // }
        $this->age = $age;
    }

    public function init1($age)
    {
        $this->age = $age;
    }

    public function init2($age)
    {
        $this->wife = $age;
    }

    public function __get($prop)
    {
        if(!in_array($prop, ['wife', 'children1', 'children2', 'dog', 'age'])) {
            echo 'Tokio nera...';
            return;
        }

        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        if('age' == $prop && $value > 30) {
            echo 'Blogi metai';
            return;
        }
        $this->$prop = $value;
    }

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

    public function setAge(int $age)
    {
        if($age > 30) {
            echo 'Blogi metai';
            return;
        }
        $this->age = $age;
    }
}