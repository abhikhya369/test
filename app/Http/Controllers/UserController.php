<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use RegistersUsers;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();

        return view('listUser', ['users' => $users]);

        //return view('addUser');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addUser');
        //
    }

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


      User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => bcrypt($request['password']),
    ]);
      return view('adminDashboard');
        //
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idd)
    {
        /*
        $user = DB::table('users')->where('name', 'John')->first();

        echo $user->name;
        ---------------
        $ticket = Ticket::where('user_id', auth()->user()->id)
                        ->where('id', $id)
                        ->first();

        return view('user.edit', compact('ticket', 'id'));
         */
        //
        $user = DB::table('users')->where('id',$idd )->first();
        //return view('userView.selectedUser', $user);
       // return view('userView.selectedUser', ['users' => $user]);
        //
        return view('showUserProfile', ['users' => $user]);
        //return view('adminDashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /// delete 
        /* User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        $users = DB::table('users')->get();

        return view('listUser', ['users' => $users]);

        DB::table('users')->delete();

        DB::table('users')->where('votes', '>', 100)->delete();

        $nerd = Users::find($id);
        $nerd->delete();

        $users = DB::table('users')->get();

        return view('listUser', ['users' => $users]);

        $ticket = Ticket::where('user_id', auth()->user()->id)
                        ->where('id', $id)
                        ->first();

        return view('user.edit', compact('ticket', 'id'));

        */
        if($idd=="1")
        {
            return redirect('/user');
        }
        else
        {
            DB::table('users')->where('id','=' ,$idd)->delete();

        // redirect
        //Session::flash('message', 'Successfully deleted the nerd!');
        //return Redirect::to('/user');
        //return view('user');
            return redirect('/user');
        }
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
       /*DB::table('users')
            ->where('id', 1)
            ->update(['votes' => 1]);
            Post::where('id', $post)->update($request->all());
        */
             DB::table('users')
            ->where('id', $id)
            ->update(['name' => $request->name]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idd)
    {
        /// delete 
        /* User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        $users = DB::table('users')->get();

        return view('listUser', ['users' => $users]);

        DB::table('users')->delete();

        DB::table('users')->where('votes', '>', 100)->delete();

        $nerd = Users::find($id);
        $nerd->delete();
        'id', 1
        'id', '==',"idd
        */
        if($idd=="1")
        {
            return redirect('/user');
        }
        else
        {
            DB::table('users')->where('id','=' ,$idd)->delete();

        // redirect
        //Session::flash('message', 'Successfully deleted the nerd!');
        //return Redirect::to('/user');
        //return view('user');
            return redirect('/user');
        }
        
        
        //


    }
}
