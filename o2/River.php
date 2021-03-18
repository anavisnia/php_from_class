<?php

abstract class River extends Eat {
    
    protected $river;
    private $gold = 400;

    public function __construct()
    {
        echo '<br>';
        echo 'Konstruojam RIVER';
        $this->saySomething('Muuuu');
    }

    public function setRiver($river)
    {
        $this->river = $river;
    }

    abstract public function saySomething(string $words) : void;
    
}