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
            if(Auth::user()->client == 1) {
                return redirect()->route('dashboard');
            }
            
        }
        return view('client.auth.login');
    }

    public function login_action(Request $request) {

        $this->validate($request,[
            'email' =>'required',
            'password' =>'required'
        ],[
            'email.required' =>'Email é obrigatório',
            'password.required' =>'Senha é obrigatório',
        ]
        );

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('danger', 'Email ou senha inválidos');
        }
        
    }
}
