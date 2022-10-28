<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class profileControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profiles.index', [
            'profiles' => Profile::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('profiles.profileUpdate', [
           'suser'  => Profile::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'address' => 'required|max:80',
            'pic' => 'required',
            'bio' => 'required|max:1000',
            'date_of_birth' => 'required',
            'gender' => 'required',
        ],[
            'address.required' => 'The Address field is required.',
            'pic.required' => 'The Photo field is required.',
            'bio.required' => 'The Biography field is required.',
            'date_of_birth.required' => 'The Date of Birth field is required.',
            'gender.required' => 'The Gender field is required.',
        ]);

        $user = Profile::find($id);
        $user->update([
            'address' => $request->address,
            'pic' => $request->pic,
            'bio' => $request->bio,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
        ]);

        return redirect('/'.$user->owner->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
