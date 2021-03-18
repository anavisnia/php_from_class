<?php

abstract class Eat {

    public static $color = 'Blue';

    public function letsEat()
    {
        echo '<br> Niam niam <br>';

    }

    abstract public  function saySomething2(string $words) : void;
}