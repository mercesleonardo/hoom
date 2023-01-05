<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Link;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Helpers\HelperArchive;

class LinkController extends Controller
{
    protected $pathUpload = 'admin/uploads/images/link';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $links = Link::with('user')->paginate('20');
        // dd($links);
        return view('admin.cruds.links.index', ['links' => $links]);
    }

    public function show(Link $link) {
        return view('client.dashboard.links', ['link' => $link]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::where('options',0)->pluck('name','id');
        // dd($users);
        return view ('admin.cruds.links.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $helper = new HelperArchive();
        $path_image = $helper->optimizeImage($request, 'path_image', $this->pathUpload, null, 100);

        if ($path_image) $data['path_image'] = $path_image;

        Link::create($data);

        if($path_image) $request->file('path_image')->storeAs($this->pathUpload, $path_image);

        return redirect()->route('admin.links.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
        $users = User::where('options',0)->pluck('name','id');

        return view('admin.cruds.links.edit', ['users' => $users,
            'link'=>$link
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        //
        $data = $request->all();

        $helper = new HelperArchive();
        $path_image = $helper->optimizeImage($request, 'path_image', $this->pathUpload, null, 100);

        if ($path_image) $data['path_image'] = $path_image;

        if(isset($request->delete_path_image) && !$path_image){
            $inputFile = $request->delete_path_image;
            Storage::delete($benefitSection->$inputFile);
            $data['path_image'] = null;
        }


        $link->fill($data)->save();

        if($path_image) $request->file('path_image')->storeAs($this->pathUpload, $path_image);

        return redirect()->route('admin.links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        //
        Storage::delete($this->pathUpload.$link->path_image);
        $link->delete();

        return redirect()->back();
    }
}
