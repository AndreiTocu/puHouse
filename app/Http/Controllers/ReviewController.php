<?php

namespace App\Http\Controllers;

use \App\Pub;
use \App\Review;
use \App\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
  public function store(Request $request) {

    Review::create($request->all() + ['user_id' => auth()->id()]);

    return  redirect()->back();
  }
}
