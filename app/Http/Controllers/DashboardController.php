<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Link;



class DashboardController extends Controller
{
    public function index(Request $request){
        // dd(Auth::user());
        $links = Link::where('user_id', Auth::user()->id)->get();
        $AuthUser = Auth::user();

        $names = collect(explode(' ', Auth::user()->name))->slice(0, 1)->implode(' ');
        $names = ucfirst(strtolower($names));

        return view('client.dashboard.dashboard', ['AuthUser' => $AuthUser, 'names' => $names, 'links' => $links]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }

}
