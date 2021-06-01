<?php

namespace App\Http\Controllers;

use Auth;
use App\blog;
use App\Area;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blog = blog::all();
      $loggedInUserId =  Auth::user()->id ?? NULL;
      return view('user.blog.index', ['data' => $blog, 'loggedInUserId' => $loggedInUserId]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state = Area::where('type', 'state')->get();
        return view('user.blog.add', ['state' => $state]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auth = Auth::user();
        $blogObject = new blog;
        $blogObject->title = $request['title'];
        $blogObject->area_id = $request['state'];
        $blogObject->user_id = $auth->id;
        $blogObject->article = $request['content'];
        $blogObject->summary = $request['summary'];
        
        $destinationPath = 'blog-image';
        $file = $request->file('image');
        $imageFileName = 'image-' . rand(0, 99999) . '-'. time();
        $file->move($destinationPath, $imageFileName);

        $blogObject->banner = $imageFileName;

        $blogObject->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog =  blog::where('id', $id)->first();
        return view('user.blog.view', ['data' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bblog = blog::where('id', $id)->first();
        $bblog->delete();
        return back()->with(['message' => 'deleted']);
    }
}
