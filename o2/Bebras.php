<?php
class Bebras extends River {
    //savybes


    public function __construct()
    {
        echo '<br>';
        echo 'Konstruojam bebra';
        $this->letsEat();
    }

    public function saySomething(string $words) : void
    {
        foreach (range(1, 42) as $_) {
            echo $words;
        }
    }

    public  function saySomething2(string $words) : void
    {
        echo $words;
    }
}