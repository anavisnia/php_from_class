<?php

class Box {
    public $id, $bannana;

    public static function getRandom()
    {
        return 'Box No: ' . Helper::getRandom();
    }

}