<?php
namespace App\Models\Facade;

class Facture {
    private $montant = 0;
    
    public function __construct(){}

    public function calcMontant($tabVoiture){
        $this->montant=0;
        foreach($tabVoiture as $voiture){
            $this->montant = $this->montant + $voiture->getPrix();
        }
    }

    public function getMontant(){
        return $this->montant;
    }
}