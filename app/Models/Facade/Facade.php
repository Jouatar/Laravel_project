<?php
namespace App\Models\Facade;
use ErrorException;

use App\Models\Factory\VoitureFactory;

class Facade {
    private $usine;
    private $concession;
    private $facture;

    public function __construct(){
        $this->usine = new VoitureFactory('Usine de Baptiste');
        $this->concession = new Concession('BaptisteAuto');
        $this->facture = new Facture();
    }

    public function commander($val){
        $newVoiture = null;
        switch($val){
            case 1:
                $newVoiture = $this->usine->makeCar('opel');
                break;
            case 2:
                $newVoiture = $this->usine->makeCar('renaud');
                break;
            default:
                throw new ErrorException('Erreur, la marque n\'existe pas');
        }
        $this->concession->addVoiture($newVoiture);
        $this->facture->calcMontant($this->concession->getArrayVoiture());
        return array($this->usine, $this->concession, $this->facture);
    }
}