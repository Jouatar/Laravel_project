<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Singleton;
use App\Models\Factory\VoitureFactory;
use App\Models\Facade\Facade;

class DpController extends Controller {
  
  public function index() {
    return view('pattern.indexDp');
  }

  public function show($n) {
    if($n==='1'){
      $a = Singleton::getInstance();
      $b = Singleton::getInstance();
      return view('pattern.singleton', ['a' => $a, 'b' => $b]);
    }
    if($n==='2'){
      $usine = new VoitureFactory('Usine de Baptiste');
      $opel = $usine->makeCar("opel");
      $renaud = $usine->makeCar("renaud");
      return view('pattern.factory', ['opel' => $opel, 'renaud' => $renaud]);
    }
    if($n==='3'){
      $facade = new Facade();
      $tabRes = $facade->commander(1);
      return view('pattern.facade',['usine'=>$tabRes[0], 'concession'=>$tabRes[1], 'facture'=>$tabRes[2] ]);
    }
    if($n==='4'){
      $facade = new Facade();
      $tabRes = $facade->commander(1);
      $tabRes = $facade->commander(2);
      $tabRes = $facade->commander(1);
      
      return view('pattern.iterator');
    }
    if($n==='5'){
      return view('pattern.observer');
    }
    return view('error404');
  }

}