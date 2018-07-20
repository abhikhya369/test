<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;

class UploadFileController extends Controller
{
    //


    /**
     * Create a new user instance after a valid registration.
     * Store a newly created resource in storage.
     *
     *
     * 
     * 
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \App\User
     */
    public function store(Request $request)
    {
        //$name = $request->name;

        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            //Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatar/',$filename));
            //Image::make($avatar)->resize(300,300)->save(public_path().'/uploads/avatar/',$filename);
            //Image::make($avatar)->resize(300,300)->save(public_path().'/uploads/avatar/',$filename);
            Image::make($avatar)->encode('jpg', 75)->save(public_path().'/uploads/avatar/'.$filename);

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

        }   

    //return view('showUserProfile', ['users' => $user]);
    return view('showUserProfile', array('user' => Auth::user()) );//['users' => $user]);
    //return redirect()->back();
}


}
