<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Singleton;

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
      return view('pattern.factory');
    }
    if($n==='3'){
      return view('pattern.facade');
    }
    if($n==='4'){
      return view('pattern.iterator');
    }
    if($n==='5'){
      return view('pattern.observer');
    }
    return view('error404');
  }

}