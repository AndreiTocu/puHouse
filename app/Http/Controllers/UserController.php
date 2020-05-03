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

    public function update(Request $request) {

      $user = Auth::user();

      $NewData = $request->validate([
        'name' => 'required',
        'email' => 'required|email'
      ]);

      //A condition that helps to modify the data only if there are changes
      if(strcmp($user['name'], $NewData['name']) != 0 || strcmp($user['email'], $NewData['email']) != 0) {

        $user['name'] = $NewData['name'];
        $user['email'] = $NewData['email'];

        $user->save();

        return redirect()->back()->with('message', 'Changed Successfully!');
      } else {
          return redirect()->back();
      }
    }
}
