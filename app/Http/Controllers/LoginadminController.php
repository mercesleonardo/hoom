<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginadminController extends Controller
{
    //
    public function index(Request $request) {
        $isLoggedIn = Auth::check();
        if($isLoggedIn) {
            if(Auth::user()->admin == 1) {
                return redirect()->route('painel');
            }

        }

        return view('admin.auth.login');
    }

    public function login_action(Request $request) {

        $this->validate($request,[
            'email' =>'required',
            'password' =>'required'
        ],[
            'email.required' =>'E-mail é obrigatório',
            'password.required' =>'Senha é obrigatório',
        ]
        );

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('painel');
        } else {
            return redirect()->back()->with('danger', 'E-mail ou senha inválida');
        }
    }
}
