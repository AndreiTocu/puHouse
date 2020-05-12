<?php

namespace App\Http\Controllers;

use \App\Pub;
use \App\Review;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
  public function store(Request $request) {

    Review::create($request->all() + ['user_id' => auth()->id()]);

    return  redirect()->back();
  }

  public function delete($reviewId) {

    $dataDel = Review::find($reviewId);

    $dataDel -> delete();

    return redirect()->back();
  }
}
