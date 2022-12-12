<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class DashboardController extends Controller
{
    public function index(Request $request){
        // dd(Auth::user());
        $AuthUser = Auth::user();
        return view('client.dashboard.dashboard', ['AuthUser' => $AuthUser]);
    }

    public function logout() {
        
    }
}
