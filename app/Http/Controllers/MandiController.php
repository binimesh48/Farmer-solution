<?php

namespace App\Http\Controllers;

use Auth;
use App\Mandi;
use App\Area;
use Illuminate\Http\Request;

class MandiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      $state = Area::where('belong_to', NULL)->get();
      return view('user.mandi.index', [
        'state'=> $state
      ]);
    }

    public function adminIndex()
    {
      $area = Area::where('type', 'state')->get();
      return view('admin.mandi.index', ['data' => $area]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $state = Area::where('id', $id)->first();
        $districts = Area::where('belong_to', $id)->get();
        $mandi = Mandi::whereIn('area_id', $districts->pluck('id'))->get();
        return view('admin.mandi.create', [
          'districts' => $districts, 
          'mandi' => $mandi,
          'state'=> $state
          ]);
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
        $mandi = new Mandi;
        $mandi->area_id = $request['area_id'];
        $mandi->name = $request['name'];
        $mandi->address = $request['address'];
        $mandi->phone = $request['phone'];
        $mandi->user_id = $user->id;
        $mandi->save();

        return back()->with(['status', 'Mandi Added Successfully']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mandi  $mandi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $state = Area::where('id', $id)->first();
      $districts = Area::where('belong_to', $id)->get();
      $mandi = Mandi::whereIn('area_id', $districts->pluck('id'))->get();
      return view('user.mandi.view', [
        'districts' => $districts, 
        'mandi' => $mandi,
        'state'=> $state
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mandi  $mandi
     * @return \Illuminate\Http\Response
     */
    public function edit(Mandi $mandi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mandi  $mandi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mandi $mandi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mandi  $mandi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mandi $mandi)
    {
        //
    }
}
