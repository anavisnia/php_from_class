<?php

class Udra extends River implements Miskas {
    
    public function __construct()
    {
        parent::__construct();
        echo '<br>';
        echo 'Konstruojam udra';
        $this->letsEat();
    }

    //metodo overwritinimas
    public function letsEat()
    {
        echo '<br> Niam niam niam niam<br>';

    }

    public function saySomething(string $words) : void
    {
        foreach (range(1, 3) as $_) {
            echo $words;
        }
    }

    public  function saySomething2(string $words) : void
    {
        echo $words;
    }

    public function bla1(string $word) : void
    {
        echo $word;
    }
}