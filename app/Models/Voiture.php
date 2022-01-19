<?php

namespace App\Models;

abstract class Voiture {
  
  protected $marque = '';

  public function __construct($maMarque) {
    $this->marque = $maMarque;
  }

}