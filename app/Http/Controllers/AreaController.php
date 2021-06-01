<?php

namespace App\Http\Controllers;

use App\Area;
use Auth;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Area::where('type', 'state')->get();
        return view('admin.area.home', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $for)
    {
        if($for == "state"){
          return view('admin.area.add', ['for' => $for]);
        }else if($for == "district"){
          $id = $request->id;
          $state = Area::where('id',$id)->first();
          $districts = Area::where('belong_to',$id)->get();
          if($state == null){
            return redirect('admin/area')->with(['error' => 'Invalid URL']);
          }
          return view('admin.area.add', ['for' => $for, 'state' => $state, 'districts'=> $districts]);
        }
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
        $area = new Area;
        $area->type = $request->for;
        $area->belong_to = $request->state;
        $area->value = $request->area;
        $area->user_id = $user->id;
        $area->save();
        if($request->for == 'state'){
          return redirect()->route('admin.area')->with(['status' => 'State Added']);
        }
        return back()->with(['status' => 'Saved Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        //
    }
}
