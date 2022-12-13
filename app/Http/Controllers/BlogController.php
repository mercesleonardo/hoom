<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class BlogController extends Controller
{
    //
    public function index(Request $request){
        return view('client.dashboard.blogs');
    }

    public function show() {
        return view('client.dashboard.blog');
    }

}
