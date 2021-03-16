<?php
class Krepsys {
    private $yra = 0;
    // constanta yra statine
    const TALPA = 500;

    public function deti(Grybas $grybas)
    {
        if ($grybas->valgomas && !$grybas->sukirmijes) {
            $this->yra = $this->yra + $grybas->svoris;
        }
        return self::TALPA >= $this->yra;
    }
}