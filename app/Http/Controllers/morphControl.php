<?php

namespace App\Http\Controllers;

use App\Models\MorphPost;
use App\Models\MorphUser;
use Exception;
use Faker\Extension\Extension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class morphControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('morph.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('morph.create');
    }

    public function postcreate()
    {
        return view('morph.post');
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
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'path' => 'required',
        ]);

        try {
            DB::transaction(function(){
                $user = MorphUser::create([
                    'name' => request('name'),
                    'email' => request('email'),
                ]);
        
                $user->images()->create([
                    'path' => request('path'),
                ]);
    
            });
        } catch (Exception $e) {
            return back()->with('wrongs', 'Something wrong, pleas trying again letter.');
        }



        return redirect(url('/morph'));

    }



    public function poststore(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:50',
            'path' => 'required',
        ]);

        try {
            DB::transaction(function(){
                $post = MorphPost::create([
                    'title' => request('title'),
                ]);

                $post->images()->create([
                    'path' => request('path'),
                ]);
            });
        } catch (Extension $e) {
            return back()->with('wrongs', 'Something Wrong, try again');
        }


        return redirect(url('/morph'));
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
