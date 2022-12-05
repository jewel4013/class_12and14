<?php

namespace App\Http\Controllers;

use App\Models\M3comment;
use App\Models\M3mmpost as Model3mmpost;
use App\Models\M3Tag;
use Illuminate\Http\Request;

class M3MMPost extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('morph3.post.index', [
            'posts' => Model3mmpost::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('morph3.post.create', [
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
            'caption' => 'required|min:5',
            'pbody' => 'required|min:5|max:5000', 
            'tag' => 'required',
        ]);

        $video = Model3mmpost::create(request()->except(['_token', 'tag']));

        $tags = M3Tag::find($request->tag);

        $video->tags()->attach($tags);
        
        return redirect()->to(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('morph3.post.show',[
            'spost' => Model3mmpost::find($id),
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
        $post = Model3mmpost::find($id);
        return view('morph3.post.edit',[
            'spost' => $post,
            'tags' => M3Tag::all(),
            'posttag' => $post->tags->pluck('id'),
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
            'caption' => 'required|min:5',
            'pbody' => 'required|min:5|max:5000', 
            'tag' => 'required',
        ]);

        // get new data from form
        $tag = $request->tag;
        // original data from database
        $spost = Model3mmpost::find($id);
        // update data
        $spost->update(request()->except(['_token', 'tag']));
        // match new form data with exixting original data (tags)
        $valid_tag = M3Tag::find($tag);

           
        
            // // detach data (tag)
            // $spost->tags()->detach($spost->tags);
            // // attach data (tag)
            // $spost->tags()->attach($valid_tag);
        //or
        $spost->tags()->sync($valid_tag);



        return redirect(url('/morph3/post/'.$id));
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
