<?php

class Udra extends River {
    
    
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

}