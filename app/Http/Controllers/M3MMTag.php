<?php

namespace App\Http\Controllers;

use App\Models\M3Tag;
use Illuminate\Http\Request;

class M3MMTag extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('morph3/tag.index', [
            'tags' => M3Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('morph3/tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid_data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        //dd($valid_data);

        M3Tag::create($valid_data);

        return redirect(url('/morph3/tag'))->with('success', 'New tag add successfuly.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\M3Tag  $m3Tag
     * @return \Illuminate\Http\Response
     */
    public function show($tagname)
    {
        $tags = M3Tag::where('name', $tagname)->first();
        
        return view('morph3.tag.show', compact('tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\M3Tag  $m3Tag
     * @return \Illuminate\Http\Response
     */
    public function edit(M3Tag $m3Tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\M3Tag  $m3Tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, M3Tag $m3Tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\M3Tag  $m3Tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(M3Tag $m3Tag)
    {
        //
    }
}
