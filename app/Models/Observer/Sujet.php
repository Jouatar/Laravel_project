<?php
namespace App\Models\Observer;

class Sujet {
    private $tabObserver = [];

    public function __construct(){}

    public function attach($newObs){
        $this->tabObserver[] = $newObs;
    }

    public function change(){
        echo 'Sujet modifié';
        foreach($this->tabObserver as $obs){
            $obs->update();
        }
    }

    public function display(){
        foreach($this->tabObserver as $obs){
            $obs->display();
            echo ' ';
        }
    }
}