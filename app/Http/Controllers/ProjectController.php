<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProjectController extends Controller
{
    //
    public function index(Request $request){
        return view('client.dashboard.projects');
    }

    public function show() {
        return view('client.dashboard.project');
    }


}
