<?php

namespace App\Http\Controllers;

use App\GovtScheme;
use App\Area;
use Auth;
use Illuminate\Http\Request;

class GovtSchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GovtScheme::all();
        return view('admin.scheme.home', ['data' => $data]);
    }

    public function userIndex()
    {
        $data = GovtScheme::all();
        return view('user.scheme.home', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state = Area::where('type', 'state')->get();
        return view('admin.scheme.add', ['state' => $state]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $scheme = new GovtScheme;
        $scheme->name = $request->name;
        $scheme->area_id = $request->state;
        $scheme->details = $request->details;
        $scheme->article = $request->article;
        $scheme->user_id = $user->id;
        // $scheme->save();
        
        $destinationPath = 'govt-scheme';
        $file = $request->file('image');
        $imageFileName = 'image-' . rand(0, 99999) . '-'. time();
        $file->move($destinationPath, $imageFileName);

        $scheme->banner = $imageFileName;
        $scheme->save();
        return back()->with(['status' => 'Saved Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GovtScheme  $govtScheme
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = GovtScheme::where('id',$id)->first();
        return view('user.scheme.view', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GovtScheme  $govtScheme
     * @return \Illuminate\Http\Response
     */
    public function edit(GovtScheme $govtScheme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GovtScheme  $govtScheme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GovtScheme $govtScheme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GovtScheme  $govtScheme
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scheme =  GovtScheme::where('id', $id)->first();
        if($scheme){
          $scheme->delete();
          return redirect()->route('admin.scheme')->with(['status' => 'Deleted Successfully']);
        }else{
          return back('admin.scheme')->with(['error' => 'Invalid Request']);
        }
    }
}
