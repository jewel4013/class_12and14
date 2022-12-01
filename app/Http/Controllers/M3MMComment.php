<?php

namespace App\Http\Controllers;

use App\Models\M3comment;
use App\Models\M3mmpost;
use App\Models\M3video;
use Illuminate\Http\Request;

class M3MMComment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/morph3/comment.index', [
            'comments' => M3comment::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|max:2000',
        ]);


        return back();
    }
    public function postcomment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|max:2000',
        ],[
            'comment.required' => 'Write something first.',
            'comment.max' => 'Maximum charecter for comment is 2000.',
        ]);
        $spost = M3mmpost::find($id);
        //dd(request('comment'));
        $spost->comments()->create([
            'comment' => request('comment'),
        ]);

        return back();
    }
    public function videocomment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|max:2000',
        ],[
            'comment.required' => 'Write something first.',
            'comment.max' => 'Maximum charecter for comment is 2000.',
        ]);
        $svideo = M3video::find($id);
        //dd(request('comment'));
        $svideo->comments()->create([
            'comment' => request('comment'),
        ]);

        return back();
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
        //
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
        //
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
