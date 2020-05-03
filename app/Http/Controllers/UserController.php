<?php

namespace App\Http\Controllers;


use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show() {
      $user = Auth::user();

      return view('Users.user-profile', compact('user'));
    }
}
