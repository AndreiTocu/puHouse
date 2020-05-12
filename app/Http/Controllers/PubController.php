<?php

namespace App\Http\Controllers;

use \App\Pub;
use \App\Review;
use Illuminate\Http\Request;

class PubController extends Controller
{
    public function lists() {

      $pubs = Pub::all();

      return view('Pubs.lists', compact('pubs'));
    }

    public function showPub($pubProfileId) {

      $pubProfile = Pub::find($pubProfileId);
      $pubReviews = Review::all()->where('pub_id', '=', $pubProfileId) -> toArray();

      return view('Pubs.pub-profile', compact('pubProfile', 'pubReviews'));
    }
}
