<?php
namespace App\Models\Observer;

class Observer {
    private $idObserver = '';
    private $nbNotif = 0;

    public function __construct($id){
        $this->idObserver=$id;
    }

    public function update(){
        $this->nbNotif++;
    }

    public function display(){
        echo 'Observer '.$this->idObserver.' notifié '.$this->nbNotif.' fois';
    } 
}