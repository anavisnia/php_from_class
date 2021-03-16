<?php
class Stikline {
    private $turis;
    private $stiklinesKiekis = 0;

    public function __construct($turis)
    {
        $this->turis = $turis;
    }

    public function ipilti($kiekis)
    {
        $visoKiekis = $kiekis + $this->stiklinesKiekis;
        $this->stiklinesKiekis = min($this->turis, $visoKiekis);
    }

    public function ispilti()
    {
        $stiklinesKiekis = $this->stiklinesKiekis;
        $this->stiklinesKiekis = 0;
        return $stiklinesKiekis;
    }
}