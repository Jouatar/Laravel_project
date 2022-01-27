<?php

namespace App\Models\Factory;

abstract class Voiture {
  
  protected $marque;
  protected $prix = 1000;

  public function __construct($maMarque, $monPrix) {
    $this->marque = $maMarque;
    $this->prix = $monPrix;
  }

  public function getMarque(){
    return $this->marque;
  }

  public function getPrix(){
    return $this->prix;
  }
}