<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;



class DashboardController extends Controller
{
    public function index(Request $request){
        // dd(Auth::user());

        $AuthUser = Auth::user();

        $names = collect(explode(' ', Auth::user()->name))->slice(0, 1)->implode(' ');
        $names = ucfirst(strtolower($names));

        return view('client.dashboard.dashboard', ['AuthUser' => $AuthUser, 'names' => $names]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }

}
