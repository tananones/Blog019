<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
   public function showLogin(){
    return view('content.login');
   }

   public function checkLogin(Request $request)
   {
    $credential = $request->validate([
        'email' => ['required', 'email'],
        'password'=>['required'],
    ]);
    if (Auth::attempt($credential)){
        $request ->session()->regenerate();
        return redirect() -> intended('/content');
    }
    return back()->withErrors([
        'email'=>'Creadentials do not math our records'
       ]);
   }

}
