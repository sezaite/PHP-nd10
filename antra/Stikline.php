<?php
class Stikline {
    private $turis;
    private $kiekis;
    

    public function __construct($turis){
        $this->turis = $turis;
    }

    public function getTuris(){
        return $this->turis;
    }

    public function ipilti($kiekis){
        if ($kiekis > $this->turis){
            $this->kiekis = $this->turis;
        } else{
        $this->kiekis += $kiekis;
        }
    }

    public function ispilti() {
        $likutis = $this->kiekis;
        $this->kiekis = 0;
        return $likutis;
    }

}