<?php
namespace App\Models\Factory;
use ErrorException;

class VoitureFactory{
    private $nom;
    
    public function __construct($nom){
        $this->nom = $nom;
    }
    
    public function makeCar($marqueVoiture) {
        switch($marqueVoiture){
            case "opel":
                return new Opel();
            case "renaud":
                return new Renaud();
            default:
                throw new ErrorException('Erreur, la marque n\'existe pas');
        }
    }

    public function getNom(){
        return $this->nom;
    }
}