<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AttendanceController extends Controller
{
    //
    public function index(Request $request) {
        return view('client.dashboard.solicitation');
    }
}
