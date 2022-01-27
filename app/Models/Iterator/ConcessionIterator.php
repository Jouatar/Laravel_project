<?php
namespace App\Models\Iterator;

class ConcessionIterator {
    private $position = 0;
    private $tabVoiture = [];

    public function __construct($tabVoiture){
        $this->tabVoiture=$tabVoiture;
    }

    public function hasNext(){
        return $this->tabVoiture[$this->position]!==null;
    } 

    public function next(){
        $voiture = $this->tabVoiture[$this->position];
        $this->position++;
        return $voiture;

    }
}