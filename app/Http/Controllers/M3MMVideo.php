<?php

namespace App\Http\Controllers;

use App\Models\M3Tag;
use App\Models\M3video;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class M3MMVideo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('morph3/video.index', [
            'videos' => M3video::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('morph3/video.create', [
            'tags' => M3Tag::all(),
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
        $request->validate([
            'caption' => 'required',
            'url' => 'required',
            'vpath' => 'required',
            'tag' => 'required',
        ]);

        try{
            DB::transaction(function(){
                $videos = M3video::create(request()->except(['_token', 'tag']));
                $tags = M3Tag::find(request('tag'));
                $videos->tags()->attach($tags);
            });
        }catch(Exception $e){
            return back()->with('wrong', 'Something wrong. Please try again letter');
        }

        return redirect(url('/morph3/video'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/morph3/video.show',[
            'svideo' => M3video::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $video =   M3video::find($id);
        $video_tag = $video->tags->pluck('id');


        return view('morph3.video.edit', [
            'svideo' => $video,
            'tags' => M3Tag::all(),
            'vtag' => $video_tag,
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
            'caption' => 'required|min:3',
            'url' => 'required',
            'vpath' => 'required',
            'tag' => 'required',
        ]);


        // form data
        $tag = $request->tag;
        // original data
        $video = M3video::find($id);
        // original data update
        $video->update(request()->except(['_token', 'tag']));
        // form data match with oridinal data ()
        $valid_tag = M3Tag::find($tag);




        // detach data 
        // $video->tags()->detach($video->tags);
        // // attach data
        // $video->tags()->attach($valid_tag);
        // // or
        $video->tags()->sync($valid_tag);



        // return 
        return redirect(url('/morph3/video/'.$id));

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
