<?php

namespace App\Http\Controllers;

use Auth;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Contact::all();
      return view('admin.contact.index' , ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('user.un-cat.contact', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact  = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->reason = $request->reason;
        $contact->message = $request->message;
        $user = Auth::user();
        if($user){
          $contact->user_id = $user->id;
        }
        $contact->save();
        return back()->with(['status' => 'Message Sent']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
    public function panGet()
    {
        return view('user.un-cat.upload-pan');
    }
    public function panStore(Request $request)
    {
        $user = Auth::user();
        $destinationPath = 'pan-card';
        $file = $request->file('image');
        $imageFileName = 'image-' . rand(0, 99999) . '-'. time();
        $file->move($destinationPath, $imageFileName);
        $user->pan = $imageFileName;
        $user->save();
        return redirect('market/create');
    }
}
