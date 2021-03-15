<?php

Class River extends Eat {

    
    protected $river;
    private $gold = 400;

    public function __construct()
    {
        echo '<br>';
        echo 'Konstruojam RIVER';
    }

    public function setRiver($river)
    {
        $this->river = $river;
    }
}