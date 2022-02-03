<?php
namespace App\Models\Iterator;

class ConcessionIterator{
    private $position = 0;
    private $tabVoiture = [];

    public function __construct($tabVoiture){
        $this->tabVoiture=$tabVoiture;
    }

    public function hasNext(){
        return isset($this->tabVoiture[$this->position]);
    } 

    public function next(){
        $voiture = $this->tabVoiture[$this->position];
        $this->position++;
        return $voiture;
    }
}