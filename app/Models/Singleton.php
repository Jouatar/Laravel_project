<?php

namespace App\Models;

class Singleton {
 
  private static $instance = null;
  private $count = 0;

  private function __construct() {  
  }

  public static function getInstance() {
    if(is_null(self::$instance)) {
      self::$instance = new Singleton();  
    }
    return self::$instance;
  }

  public function increment(){
    $this->count = $this->count+1;
    return $this->count;
  }
}