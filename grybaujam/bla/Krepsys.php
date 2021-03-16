<?php
namespace Miskas\Didelis;
use Miskas\Mazas\Grybas;

class Krepsys {
    private $yra = 0;
    // constanta yra statine
    const TALPA = 500;

    public function deti(Grybas $grybas) : bool
    {
        if ($grybas->valgomas && !$grybas->sukirmijes) {
            $this->yra = $this->yra + $grybas->svoris;
        }
        return self::TALPA >= $this->yra;
    }
}