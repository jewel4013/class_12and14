<?php

namespace App\Http\Controllers;

use App\Mail\Firstmail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Rules\AllUnderRule;
use App\Rules\YearValidate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class userControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.userCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $myyear = Carbon::parse($request->date_of_birth)->format('Y');
        // dd($myyear);
        $request->validate([
            'fname' => 'required|min:3|max:20',
            'lname' => 'required|min:3|max:20',
            'uname' => 'required|unique:users,uname',
            'email' => 'required|email|unique:users,email',
            'phone' => ['required', 'numeric', new AllUnderRule],
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'address' => 'required|max:80',
            'pic' => 'required',
            'bio' => 'required|max:1000',
            'date_of_birth' => ['required', 'date', new YearValidate],
            'gender' => 'required',
        ],[
            'fname.required' => 'The First Name field is required.',
            'fname.min' => 'The First Name must be at least 3 characters.',
            'fname.max' => 'The First Name must not be greater than 20 characters.',
            'lname.required' => 'The Last Name field is required.',
            'lname.min' => 'The Last Name must be at least 3 characters.',
            'lname.max' => 'The Last Name must not be greater than 20 characters.',
            'uname.required' => 'The User Name field is required.',
            'uname.unique' => 'The User Name has already been taken.',
            'email.required' => 'The Email Address field is required.',
            'email.email' => 'The Email Address must be a valid email address.',
            'email.unique' => 'The Email Address has already been taken.',
            'phone.required' => 'The Phone Number field is required.',
            'phone.numeric' => 'The Phone Number must be a number.',
            'password.required' => 'The Password field is required.',
            'password_confirmation.required' => 'The Confirm Password field is required.',
            'address.required' => 'The Address field is required.',
            'pic.required' => 'The Photo field is required.',
            'bio.required' => 'The Biography field is required.',
            'date_of_birth.required' => 'The Date of Birth field is required.',
            'gender.required' => 'The Gender field is required.',
        ]);

        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'uname' => $request->uname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
        ]);

        $user->profile()->create([
            'address' => $request->address,
            'pic' => $request->pic,
            'bio' => $request->bio,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
        ]);

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.singleUser', [
            'suser' => User::find($id),
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
        return view('users.userUpdate', [
            'suser' => User::find($id),
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
            'fname' => 'required|min:3|max:20',
            'lname' => 'required|min:3|max:20',
            'uname' => 'required|unique:users,id,{$id}',
            'email' => 'required|unique:users,id,{$id}',
            'phone' => ['required', 'numeric', new AllUnderRule],
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ],[
            'fname.required' => 'The First Name field is required.',
            'fname.min' => 'The First Name must be at least 3 characters.',
            'fname.max' => 'The First Name must not be greater than 20 characters.',
            'lname.required' => 'The Last Name field is required.',
            'lname.min' => 'The Last Name must be at least 3 characters.',
            'lname.max' => 'The Last Name must not be greater than 20 characters.',
            'uname.required' => 'The User Name field is required.',
            'uname.unique' => 'The User Name has already been taken.',
            'email.required' => 'The Email Address field is required.',
            'email.email' => 'The Email Address must be a valid email address.',
            'email.unique' => 'The Email Address has already been taken.',
            'phone.required' => 'The Phone Number field is required.',
            'phone.numeric' => 'The Phone Number must be a number.',
            'password.required' => 'The Password field is required.',
            'password_confirmation.required' => 'The Confirm Password field is required.',
        ]);
        // dd($request->all());
        //dd(User::find($id)->id);
        $user = User::find($id);
        $user->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'uname' => $request->uname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
        ]);

        return redirect('/'.$user->id);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $user->profile->delete();

        return redirect('/');

    }

    public function sendmail()
    {
        return view('mails.sendMail');
        
    }
    public function sending(){
        request()->validate([
            'email' => 'required|email',
            'sub' => 'required',
            'message' => 'required',
        ]);

        $to = request('email');
        $sub = request('sub');
        $mailmsg = request('message');


        $object = new \stdClass();
        $object->message = $mailmsg;
        $object->subject = $sub;
        Mail::to($to)->send(new Firstmail($object));

        return redirect('/');

    }
}
