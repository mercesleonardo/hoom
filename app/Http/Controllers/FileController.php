<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class FileController extends Controller
{
    //
    public function index(Request $request) {
        return view('client.dashboard.files');
    }
}
