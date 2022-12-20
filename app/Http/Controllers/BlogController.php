<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Helpers\HelperArchive;

class BlogController extends Controller
{   
    protected $pathUpload = 'admin/uploads/images/blog';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $blogs = Blog::paginate('20');
        return view('admin.cruds.blog.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        return view('admin.cruds.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $helper = new HelperArchive();
        $path_image = $helper->optimizeImage($request, 'path_image', $this->pathUpload, null, 100);

        if ($path_image) $data['path_image'] = $path_image;

        $path_image_author = $helper->optimizeImage($request, 'path_image_author', $this->pathUpload, null, 100);

        if ($path_image_author) $data['path_image_author'] = $path_image_author;

        


        $data['active'] = $request->active?1:0;

        Blog::create($data);

        if($path_image) $request->file('path_image')->storeAs($this->pathUpload, $path_image);
        if($path_image_author) $request->file('path_image_author')->storeAs($this->pathUpload, $path_image_author);

        return redirect()->route('admin.blog.index'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.cruds.blog.edit', [
            'blog'=>$blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->all();

        $helper = new HelperArchive();
        $path_image = $helper->renameArchiveUpload($request, 'path_image');

        if ($path_image) $data['path_image'] = $this->pathUpload.$path_image;

        if(isset($request->delete_path_image) && !$path_image){
            $inputFile = $request->delete_path_image;
            Storage::delete($benefitSection->$inputFile);
            $data['path_image'] = null;
        }

        $path_image_author = $helper->renameArchiveUpload($request, 'path_image_author');

        if ($path_image_author) $data['path_image_author'] = $this->pathUpload.$path_image_author;

        if(isset($request->delete_path_image_author) && !$path_image_author){
            $inputFile = $request->delete_path_image_author;
            Storage::delete($benefitSection->$inputFile);
            $data['path_image_author'] = null;
        }



        $data['active'] = $request->active?1:0;

        $blog->fill($data)->save();

        if($path_image) $request->file('path_image')->storeAs($this->pathUpload, $path_image);
        if($path_image_author) $request->file('path_image_author')->storeAs($this->pathUpload, $path_image_author);

        return view('admin.cruds.blog.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {   
        Storage::delete($this->pathUpload.$blog->path_image);
        Storage::delete($this->pathUpload.$blog->path_image_author);
        $blog->delete();
        
        return redirect()->back();
    }
}
