<?php

namespace App\Http\Controllers;

use \App\Pub;
use Illuminate\Http\Request;

class PubController extends Controller
{
    public function show() {

      $pubs = Pub::all();

      return view('Pubs.show', compact('pubs'));
    }
}
