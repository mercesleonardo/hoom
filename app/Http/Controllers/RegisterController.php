<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('client.auth.register');
    }

    public function store(Request $request) {
        $data= $Request->all();

        
    }
}
