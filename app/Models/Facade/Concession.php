<?php
namespace App\Models\Facade;

use App\Models\Iterator\ConcessionIterator;

class Concession {
    private $commande = [];
    private $nom = '';

    public function __construct($maConcession){
        $this->nom = $maConcession;
    }

    public function getArrayVoiture(){
        return $this->commande;
    }

    public function addVoiture($newVoiture){
        $this->commande[] = $newVoiture;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getIterator(){
        return new ConcessionIterator($this->commande);
    }
}