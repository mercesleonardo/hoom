<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(Request $request){

        $isLoggedIn = Auth::check();
        if($isLoggedIn) {
            return redirect()->route('dashboard');
        }
        return view('client.auth.login');
    }

    public function login_action(Request $request) {

        $validator = $request->validate([
            'email' =>'required|email',
            'password' =>'required|min:6'
        ]);

        if (Auth::attempt($validator)) {
            
            return redirect()->route('dashboard');
        };
    }
}
