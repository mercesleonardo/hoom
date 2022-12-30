<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Helpers\HelperArchive;

class ProjectController extends Controller
{
    //
    public function index(Request $request){
        return view('client.dashboard.projects');
    }

    public function show() {
        return view('client.dashboard.project');
    }

    public function indexpainel() {
        return view('admin.cruds.projects.index');
    }


}
