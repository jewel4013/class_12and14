<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.fileUpload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // image = all type of image file.
        // mimes = define a specific file with extension  like:jpg,png,txt
        request()->validate([
            'propic' => 'required|image'
        ],[
            'propic.required' => 'The Profile Picture fild is required...',
            'propic.image' => 'The Profile Picture must be an image.',
            // 'propic.mimes' => 'The Profile Picture must be a file of type: jpg, png, txt.',
        ]);

        if(request()->hasFile('propic'))
        {
            $filedes = 'upload_img';

            $fileEx = request()->file('propic')->getClientOriginalExtension();
            $fileName = request()->file('propic')->getClientOriginalName();
            $file = rand().uniqid().$fileName.'.'.$fileEx;

            request()->file('propic')->move($filedes, $file);

            return back();

        }
    }



    // multiple file upload
    public function mfcreate(){
        return view('files.multiFileUpload');
    }

    public function mfstore(Request $request){

        //dd(request()->file('propic')->getClientOriginalExtension());
        // dd($request->propic);
        $request->validate([
            'propic' => 'required',
            'propic.*' => 'image|mimes:jpg,png',
        ]);

        if($request->hasFile('propic')){
            foreach($request->propic as $file){
                $fileNam = $file->getClientOriginalName();
                $fileEx = $file->getClientOriginalExtension();
                $fileFulName = rand().uniqid().$fileNam;
                $file->move('All_img', $fileFulName);
            }

            
            return back()->with('success', 'Image uploaded successful');
        }

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
