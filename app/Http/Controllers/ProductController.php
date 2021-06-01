<?php

namespace App\Http\Controllers;

use Auth;
use App\Area;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        $loggedInUserId =  Auth::user()->id ?? NULL;  
        return view('user.marketplace.index', ['data' => $data, 'loggedInUserId' => $loggedInUserId]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state = Area::where('type', 'state')->get();
        return view('user.marketplace.add' ,['state' => $state]);
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
        $product = new Product;
        $product->name = $request['name'];
        $product->area_id = $request['state'];
        $product->user_id = $user->id;
        $product->summary = $request['summary'];
        $product->price = $request['price'];
        $product->article = $request['article'];
        
        $destinationPath = 'marketplace';
        $file = $request->file('image');
        $imageFileName = 'image-' . rand(0, 99999) . '-'. time();
        $file->move($destinationPath, $imageFileName);

        $product->image = $imageFileName;
        $product->save();
        return back()->with(['success' => 'Product Added to Marketplace']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        return view('user.marketplace.view',['data' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();
        return back()->with(['status' => 'Delete Successfully']);
    }
}
