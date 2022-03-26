<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
    //

    public function login(Request $request){
        //dd('okokokokkok');
        //dd($request);
        //dd($request->all());

        //Always filter/sanitize and validate the incomming data

        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required',
        ]);
        //Validation Pass
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("/")->withSuccess('Login details are not valid');
    }

    public function dashboard(){
        return view('dashboard');
    }
}
