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

    public function indexpainel(Project $projects) {
        $projects = Project::with('user')->paginate('20');
        
        return view('admin.cruds.projects.index', ['projects' => $projects]);
    }

    public function create() {
        $users = User::where('options',0)->pluck('name','id');
        // dd($users);
        return view ('admin.cruds.projects.create', ['users' => $users]);
    }

    public function store(Request $request) {

        $data = $request->all();

        Project::create($data);

        return redirect()->route('admin.projects.index');
    }

    public function edit(Project $project)
    {   
        $users = User::where('options',0)->pluck('name','id');

        return view('admin.cruds.projects.edit', ['users' => $users,
            'project'=>$project
        ]);
    }

    public function update(Request $request, Project $project) {

        $data = $request->all();

        $project->fill($data)->save();

        return redirect()->route('admin.projects.index');
    }

    public function destroy(Project $project)
    {
        
        $project->delete();

        return redirect()->back();
    }


}
