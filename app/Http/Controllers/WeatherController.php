<?php

namespace App\Http\Controllers;

use Auth;
use App\Area;
use App\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ids = Area::where('type','state')->pluck('id');
        $data = Weather::whereIn('area_id',$ids)->get();
        return view('user.weather.index', ['data' => $data]);
    }
    
    public function adminIndex()
    {
        $data = Weather::all();
        return view('admin.weather.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ids = Weather::select('area_id')->pluck('area_id');
        $area = Area::whereNotIn('id', $ids)->get();
        return view('admin.weather.add', ['data' => $area]);
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
        $weather = new Weather;  
        $weather->min_temp = $request['min_temp'];
        $weather->max_temp = $request['max_temp'];
        $weather->good_for = $request['good_for'];
        $weather->area_id = $request['area'];
        $weather->user_id = $user->id;
        $weather->save();
        return back()->with(['status' => 'Saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area = Area::where('belong_to', $id)->get()->pluck('id');
        $data = Weather::whereIn('area_id', $area)->get();
        $state = Area::where('id', $id)->first();
        return view('user.weather.district', ['data' => $data, 'state' => $state]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Weather::where('id', $id)->first();
        return view('admin.weather.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $weather = Weather::where('id', $id)->first();  
        $weather->min_temp = $request['min_temp'];
        $weather->max_temp = $request['max_temp'];
        $weather->good_for = $request['good_for'];
        $weather->user_id = $user->id;
        $weather->save();
        return back()->with(['status' => 'Update successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $weather = Weather::where('id', $id)->first();
      $weather->delete();
      return back();  
    }
}
